<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'laptop';
    protected $fillable = ['merk', 'type', 'cpu', 'ram', 'storage', 'resolusi_layar', 'vga','nilai_cpu', 'nilai_ram', 'nilai_storage', 'nilai_resolusi_layar', 'nilai_vga'];
    protected $casts = [
        'id' => 'integer',
    ];
}
