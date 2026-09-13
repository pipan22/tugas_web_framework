<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $riwayat = [
        (object) [
            'id' => 1,
            'pengajuan_id' => 101,
            'status_lama' => 'diajukan',
            'status_baru' => 'diverifikasi PA',
            'keterangan' => 'Berkas lengkap, lanjut ke Kaprodi.',
            'created_at' => '2026-09-08 08:00:00'
        ],
        (object) [
            'id' => 2,
            'pengajuan_id' => 101,
            'status_lama' => 'diverifikasi PA',
            'status_baru' => 'disetujui Kaprodi',
            'keterangan' => 'Disetujui, lanjut ke TU.',
            'created_at' => '2026-09-08 10:30:00'
        ],
        (object) [
            'id' => 3,
            'pengajuan_id' => 102,
            'status_lama' => 'diajukan',
            'status_baru' => 'ditolak',
            'keterangan' => 'Berkas tidak lengkap.',
            'created_at' => '2026-09-08 09:15:00'
        ],
        (object) [
            'id' => 4,
            'pengajuan_id' => 103,
            'status_lama' => 'diajukan',
            'status_baru' => 'diverifikasi PA',
            'keterangan' => 'Menunggu persetujuan Kaprodi.',
            'created_at' => '2026-09-08 11:00:00'
        ],
        (object) [
            'id' => 5,
            'pengajuan_id' => 103,
            'status_lama' => 'diverifikasi PA',
            'status_baru' => 'selesai',
            'keterangan' => 'Surat sudah bisa diambil di TU.',
            'created_at' => '2026-09-08 14:00:00'
        ],
    ];

    return view('riwayat-status.index', compact('riwayat'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
