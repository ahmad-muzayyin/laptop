<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::all();
        $data = [
            'title' => config('app.name'),
            'laptops' => $laptops,
        ];

        return view('laptops.index', $data);
    }

    public function kriteriaSetting()
    {
        $cpu = Laptop::selectRaw('DISTINCT cpu')->get();
        $ram = Laptop::selectRaw('DISTINCT ram')->get();
        $resolution = Laptop::selectRaw('DISTINCT resolusi_layar')->get();
        $vga = Laptop::selectRaw('DISTINCT vga')->get();
        $storage = Laptop::selectRaw('DISTINCT storage')->get();
        $data = [
            'title' => config('app.name'),
            'cpu' => $cpu,
            'ram' => $ram,
            'resolution' => $resolution,
            'vga' => $vga,
            'storage' => $storage,
        ];

        return view('laptops.kriteria', $data);
    }

    public function updateCpu(Request $request)
    {
        $laptopIds = $request->input('laptop_id');
        $nilaiCpu = $request->input('nilai_cpu');

        foreach ($laptopIds as $index => $laptopId) {
            $laptop = Laptop::where('cpu', $laptopId)->first();

            Laptop::where('cpu', $laptop->cpu)->update([
                'nilai_cpu' => $nilaiCpu[$index],
            ]);
        }
        // return redirect()->route('laptops.index')->with('success', 'Data CPU berhasil diperbarui');
    }

    public function updateRam(Request $request)
    {
        $laptopIds = $request->input('laptop_id');
        $nilaiRam = $request->input('nilai_ram');

        foreach ($laptopIds as $index => $laptopId) {
            $laptop = Laptop::where('ram', $laptopId)->first();

            Laptop::where('ram', $laptop->ram)->update([
                'nilai_ram' => $nilaiRam[$index],
            ]);
        }
        // return redirect()->route('laptops.index')->with('success', 'Data CPU berhasil diperbarui');
    }

    public function updateStorage(Request $request)
    {
        $laptopIds = $request->input('laptop_id');
        $nilaiStorage = $request->input('nilai_storage');

        foreach ($laptopIds as $index => $laptopId) {
            $laptop = Laptop::where('storage', $laptopId)->first();

            Laptop::where('storage', $laptop->storage)->update([
                'nilai_storage' => $nilaiStorage[$index],
            ]);
        }
        // return redirect()->route('laptops.index')->with('success', 'Data CPU berhasil diperbarui');
    }

    public function updateResolution(Request $request)
    {
        $laptopIds = $request->input('laptop_id');
        $resolusi_layar = $request->input('nilai_resolusi_layar');

        foreach ($laptopIds as $index => $laptopId) {
            $laptop = Laptop::where('resolusi_layar', $laptopId)->first();

            Laptop::where('resolusi_layar', $laptop->resolusi_layar)->update([
                'nilai_resolusi_layar' => $resolusi_layar[$index],
            ]);
        }
        // return redirect()->route('laptops.index')->with('success', 'Data CPU berhasil diperbarui');
    }

    public function updateVga(Request $request)
    {
        $laptopIds = $request->input('laptop_id');
        $nilai_vga = $request->input('nilai_vga');

        foreach ($laptopIds as $index => $laptopId) {
            $laptop = Laptop::where('vga', $laptopId)->first();

            Laptop::where('vga', $laptop->vga)->update([
                'nilai_vga' => $nilai_vga[$index],
            ]);
        }
        // return redirect()->route('laptops.index')->with('success', 'Data CPU berhasil diperbarui');
    }

    // Fungsi Menormalisasikan Matriks dari semua Kriteria
    public function showNormalizedMatrix()
    {
        // Retrieve the laptops collection
        $laptops = Laptop::all();

        // Calculate the maximum values for each attribute
        $maxCpu = $laptops->max('nilai_cpu');
        $maxRam = $laptops->max('nilai_ram');
        $maxStorage = $laptops->max('nilai_storage');
        $maxResolusiLayar = $laptops->max('nilai_resolusi_layar');
        $maxVga = $laptops->max('nilai_vga');

        // Normalize the attributes and create the normalized matrix
        $normalizedMatrix = $laptops->map(function ($laptop) use ($maxCpu, $maxRam, $maxStorage, $maxResolusiLayar, $maxVga) {
            return [
                'id' => $laptop->id,
                'merk' => $laptop->merk,
                'type' => $laptop->type,
                'cpu' => $laptop->cpu,
                'ram' => $laptop->ram,
                'storage' => $laptop->storage,
                'resolusi_layar' => $laptop->resolusi_layar,
                'vga' => $laptop->vga,
                'normalized_cpu' => $laptop->nilai_cpu / $maxCpu,
                'normalized_ram' => $laptop->nilai_ram / $maxRam,
                'normalized_storage' => $laptop->nilai_storage / $maxStorage,
                'normalized_resolusi_layar' => $laptop->nilai_resolusi_layar / $maxResolusiLayar,
                'normalized_vga' => $laptop->nilai_vga / $maxVga,
            ];
        });

        $title = 'Normalized Matrix';

        return view('laptops.normalizedMatrix', compact('normalizedMatrix', 'title'));
    }

    public function show($id)
    {
        $laptop = Laptop::findOrFail($id);
        $title = 'Spesifikasi Laptop';

        return view('laptops.show', compact('laptop', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'type' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'resolusi_layar' => 'required',
            'vga' => 'required',
            'nilai_cpu' => 'required',
            'nilai_ram' => 'required',
            'nilai_storage' => 'required',
            'nilai_resolusi_layar' => 'required',
            'nilai_vga' => 'required',
        ]);

        $laptop = Laptop::create($request->all());

        return response()->json($laptop, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required',
            'type' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'storage' => 'required',
            'resolusi_layar' => 'required',
            'vga' => 'required',
            'nilai_cpu' => 'required',
            'nilai_ram' => 'required',
            'nilai_storage' => 'required',
            'nilai_resolusi_layar' => 'required',
            'nilai_vga' => 'required',
        ]);

        $laptop = Laptop::findOrFail($id);
        $laptop->update($request->all());

        return response()->json($laptop, 200);
    }

    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();

        return response()->json(null, 204);
    }

    public function calculateSAW(Request $request)
    {
        $laptops = Laptop::all();

        $maxCpu = $laptops->max('nilai_cpu');
        $maxRam = $laptops->max('nilai_ram');
        $maxStorage = $laptops->max('nilai_storage');
        $maxResolusiLayar = $laptops->max('nilai_resolusi_layar');
        $maxVga = $laptops->max('nilai_vga');

        $normalizedMatrix = $laptops->map(function ($laptop) use ($maxCpu, $maxRam, $maxStorage, $maxResolusiLayar, $maxVga) {
            return [
            'id' => $laptop->id,
            'merk' => $laptop->merk,
            'type' => $laptop->type,
            'cpu' => $laptop->cpu,
            'ram' => $laptop->ram,
            'storage' => $laptop->storage,
            'resolusi_layar' => $laptop->resolusi_layar,
            'vga' => $laptop->vga,
            'normalized_cpu' => $laptop->nilai_cpu / $maxCpu,
            'normalized_ram' => $laptop->nilai_ram / $maxRam,
            'normalized_storage' => $laptop->nilai_storage / $maxStorage,
            'normalized_resolusi_layar' => $laptop->nilai_resolusi_layar / $maxResolusiLayar,
            'normalized_vga' => $laptop->nilai_vga / $maxVga,
        ];
        });

        $subKriteriaWeights = [
        'cpu' => $request->cpu,
        'ram' => $request->ram,
        'storage' => $request->storage,
        'resolusi_layar' => $request->resolusi,
        'vga' => $request->vga,
    ];

        $weightedSums = $normalizedMatrix->map(function ($laptop) use ($subKriteriaWeights) {
            $weightedSum = 0;

            foreach ($subKriteriaWeights as $subKriteria => $weight) {
                $subKriteriaValue = $laptop['normalized_'.strtolower($subKriteria)];
                $weightedSum += $subKriteriaValue * $weight;
            }

            return [
            'id' => $laptop['id'],
            'merk' => $laptop['merk'],
            'type' => $laptop['type'],
            'weighted_sum' => $weightedSum,
        ];
        });

        $sortedLaptops = $weightedSums->sortByDesc('weighted_sum')->values();

        return $sortedLaptops;
    }

    public function showRanking(Request $request)
    {
        $laptops = Laptop::all();

        $maxCpu = $laptops->max('nilai_cpu');
        $maxRam = $laptops->max('nilai_ram');
        $maxStorage = $laptops->max('nilai_storage');
        $maxResolusiLayar = $laptops->max('nilai_resolusi_layar');
        $maxVga = $laptops->max('nilai_vga');

        $normalizedMatrix = $laptops->map(function ($laptop) use ($maxCpu, $maxRam, $maxStorage, $maxResolusiLayar, $maxVga) {
            return [
            'id' => $laptop->id,
            'merk' => $laptop->merk,
            'type' => $laptop->type,
            'cpu' => $laptop->cpu,
            'ram' => $laptop->ram,
            'storage' => $laptop->storage,
            'resolusi_layar' => $laptop->resolusi_layar,
            'vga' => $laptop->vga,
            'price' => $laptop->price,
            'normalized_cpu' => $laptop->nilai_cpu / $maxCpu,
            'normalized_ram' => $laptop->nilai_ram / $maxRam,
            'normalized_storage' => $laptop->nilai_storage / $maxStorage,
            'normalized_resolusi_layar' => $laptop->nilai_resolusi_layar / $maxResolusiLayar,
            'normalized_vga' => $laptop->nilai_vga / $maxVga,
        ];
        });

        $subKriteriaWeights = [
        'cpu' => $request->cpu,
        'ram' => $request->ram,
        'storage' => $request->storage,
        'resolusi_layar' => $request->resolusi,
        'vga' => $request->vga,
    ];

        $weightedSums = $normalizedMatrix->map(function ($laptop) use ($subKriteriaWeights) {
            $weightedSum = 0;

            foreach ($subKriteriaWeights as $subKriteria => $weight) {
                $subKriteriaValue = $laptop['normalized_'.strtolower($subKriteria)];
                $weightedSum += $subKriteriaValue * $weight;
            }

            return [
            'id' => $laptop['id'],
            'merk' => $laptop['merk'],
            'type' => $laptop['type'],
            'price' => $laptop['price'],
            'weighted_sum' => $weightedSum,
        ];
        });

        $sortedLaptops = $weightedSums->sortByDesc('weighted_sum')->values();

        $ranking = $sortedLaptops->map(function ($laptop, $index) {
            return [
                'id' => $laptop['id'],
                'merk' => $laptop['merk'],
                'type' => $laptop['type'],
                'price' => $laptop['price'],
                'total_score' => $laptop['weighted_sum'],
                'ranking' => $index + 1,
            ];
        });

        $data = [
            'title' => 'Ranking Laptop',
            'ranking' => $ranking,
        ];

        return view('layouts.RankingFrontend', $data);
    }
}
