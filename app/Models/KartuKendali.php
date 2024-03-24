<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class KartuKendali extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = "kartukendali";

    protected $fillable = [
        'nama',
        'pert_1',
        'pert_2',
        'pert_3',
        'pert_4',
        'pert_5',
        'pert_6',
        'pert_7',
        'pert_8',
        'pert_9',
        'pert_10',
        'pert_11',
        'pert_12',
        'pert_13',
        'pert_14',
        'pert_15',
        'pert_16',
        'pert_17',
        'pert_18',
        'pert_19',
        'pert_20',
        'pert_21',
        'pert_22',
        'pert_23',
        'pert_24',
        'pert_25',
        'pert_26',
        'pert_27',
        'pert_28',
        'pert_29',
        'pert_30',
        'pert_31',
        'pert_32',
        'pencapaian',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'updated_at',
        'created_at'
    ];
}
