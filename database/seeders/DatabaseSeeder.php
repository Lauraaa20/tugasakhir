<?php

namespace Database\Seeders;

use App\Http\Controllers\tables\ClassificationController;
use App\Http\Controllers\tables\PlacementController;
use App\Http\Controllers\tables\SertifikatControler;
use App\Http\Controllers\tables\NilaiControler;
use App\Http\Controllers\tables\TutorController;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Placement;
use App\Models\Classification;
use App\Models\Jadwal;
use App\Models\KartuKendali;
use App\Models\Quiz;
use App\Models\Tutor;
use App\Models\Nilai;
use App\Models\Sertifikat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed admin
        User::create([
            "nama" => "admin",
            "email" => "admin@seiza.edu",
            "username" => "admin",
            "password" => bcrypt("admin"),
            "role" => "Admin",
        ]);


        // Seed 10 siswa
        foreach (range(1, 10) as $index) {
            User::create([
                "nama" => "Siswa" . $index,
                "email" => "siswa" . $index . "@seiza.edu",
                "username" => "siswa" . $index,
                "password" => bcrypt("siswa" . $index),
                "role" => "Siswa",
            ]);

            Siswa::create([
                "nama" => "Siswa" . $index,
                "user_id" => $index += 1,
                "nik" => $index,
                "alamat" => "jln. " . $index,
                "agama" => "Islam",
                "nama_ortu" => "Ibu" . $index,
                "no_telp" => "0800000000" . $index,
                "kerja_ortu" => "Pegawai Toko " . $index,
                "level" => "Intermediate",
            ]);

            Placement::create([
                "soal" => "What is the color of an Apple?" . $index,
                "jawaban" => "a. Red, b. Blue, c. Yellow",
                "jawaban_benar" => "a. Red",
            ]);

            Classification::create([
                "nama" => "siswa" . $index,
                "jenjang" => "smp",
                "nilai" => "100",
                "hasil_kelas" => "Intermediate",
            ]);

            Tutor::create([
                "nama" => "siswa" . $index,
                "nik" => "1234567890" . $index,
                "alamat" => "dimana mana" . $index,
                "foto" => "foto",
            ]);

            KartuKendali::create([
                "nama" => "siswa" . $index,
                "pert_1" => "ceklis",
                "pert_2" => "ceklis",
                "pert_3" => "ceklis",
                "pert_4" => "ceklis",
                "pert_5" => "ceklis",
                "pert_6" => "ceklis",
                "pert_7" => "ceklis",
                "pencapaian" => "tuntas",
            ]);

            Jadwal::create([
                "tutor" => "tutor" . $index,
                "mapel" => "bing",
                "kelas" => "beginer",
                "jam" => "13.00 - 15.00",
            ]);

            Quiz::create([
                "soal" => "What is the color of an Apple?" . $index,
                "jawaban" => "a. Red, b. Blue, c. Yellow",
                "jawaban_benar" => "a. Red",
            ]);

            Nilai::create([
                "nama" => "siswa" . $index,
                "writing" => "100",
                "reading" => "100",
                "listening" => "100",
                "rata_rata" => "100"
            ]);

            Sertifikat::create([
                "nama" => "siswa" . $index,
                "sertifikat" => "upload",
            ]);
        }
    }
}
