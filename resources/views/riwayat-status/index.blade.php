@extends('layouts.app')

@section('title', 'Riwayat Status Pengajuan')

@section('content')
<div class="card">
    <div class="card-header">
        <div>
            <h1>Riwayat Status Pengajuan</h1>
            <p>Pelacakan perubahan status pengajuan dokumen akademik</p>
        </div>
        <a href="{{ route('riwayat-status.create') }}" class="btn">+ Tambah Riwayat</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pengajuan</th>
                <th>Status Lama</th>
                <th>Status Baru</th>
                <th>Keterangan</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayat as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>#{{ $item->pengajuan_id }}</strong></td>
                <td>
                    <span class="badge badge-{{ str_replace(' ', '', $item->status_lama) }}">
                        {{ $item->status_lama }}
                    </span>
                </td>
                <td>
                    <span class="badge badge-{{ str_replace(' ', '', $item->status_baru) }}">
                        {{ $item->status_baru }}
                    </span>
                </td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{ route('riwayat-status.show', $item->id) }}" class="aksi-link">Lihat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection