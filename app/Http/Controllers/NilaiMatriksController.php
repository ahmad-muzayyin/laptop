<?php

namespace App\Http\Controllers;

use App\Models\Laptop;

class NilaiMatriksController extends Controller
{
    public function hitungNilaiMatriks()
    {
        $laptops = Laptop::all();

        // Inisialisasi variabel nilai matriks
        $nilaiMatriks = [];

        foreach ($laptops as $laptop) {
            // Menghitung nilai matriks berdasarkan atribut CPU, RAM, Storage, Resolusi Layar, dan VGA
            $nilai = $laptop->cpu + $laptop->ram + $laptop->storage + $laptop->resolusi_layar + $laptop->vga;

            // Menyimpan nilai matriks dalam array
            $nilaiMatriks[] = [
                'id' => $laptop->id,
                'merk' => $laptop->merk,
                'type' => $laptop->type,
                'nilai' => $nilai,
            ];
        }

        // Menampilkan nilai matriks
        return response()->json($nilaiMatriks);
    }
}
