<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambah extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama',
        'Email',
        'Password',
        'Status'
    ];
}
