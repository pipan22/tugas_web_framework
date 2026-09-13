<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Pengajuan Akademik')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: #eef2f7;
            color: #2c3e50;
            line-height: 1.6;
        }
        /* Navbar */
        nav {
            background: linear-gradient(135deg, #1e3a5f 0%, #2c5282 100%);
            padding: 0 40px;
            height: 64px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 12px rgba(0,0,0,0.15);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        nav .brand {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-right: 40px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        nav .brand span {
            background: #f6c343;
            color: #1e3a5f;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 12px;
        }
        nav a {
            color: #cbd5e0;
            text-decoration: none;
            margin-right: 25px;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }
        nav a:hover { color: #fff; }

        /* Container */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 25px;
        }

        /* Card */
        .card {
            background: #fff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border-top: 4px solid #2c5282;
        }
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }
        .card-header h1 {
            font-size: 24px;
            color: #1e3a5f;
            font-weight: 700;
        }
        .card-header p {
            color: #718096;
            font-size: 13px;
            margin-top: 4px;
        }

        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: #2c5282;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #1e3a5f;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(44,82,130,0.3);
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th {
            background: #f7fafc;
            color: #4a5568;
            text-align: left;
            padding: 14px 16px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
        }
        td {
            padding: 16px;
            border-bottom: 1px solid #edf2f7;
            font-size: 14px;
            color: #2d3748;
        }
        tr:hover td { background: #f7fafc; }

        /* Badge */
        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: capitalize;
        }
        .badge-diajukan { background: #e2e8f0; color: #4a5568; }
        .badge-diverifikasi { background: #fef3c7; color: #92400e; }
        .badge-disetujui { background: #d1fae5; color: #065f46; }
        .badge-ditolak { background: #fee2e2; color: #991b1b; }
        .badge-selesai { background: #dbeafe; color: #1e40af; }

        /* Aksi */
        .aksi-link {
            color: #2c5282;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
        }
        .aksi-link:hover { text-decoration: underline; }

        /* Footer */
        footer {
            text-align: center;
            padding: 30px;
            color: #a0aec0;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="brand">📚 Sistem Akademik <span>INF625313</span></div>
        <a href="{{ route('riwayat-status.index') }}">Riwayat Status</a>
        <a href="{{ route('riwayat-status.create') }}">Tambah Riwayat</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Sistem Pengajuan Akademik &mdash; Web Framework
    </footer>
</body>
</html>