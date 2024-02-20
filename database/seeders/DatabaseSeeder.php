<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
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
        }
    }
}
