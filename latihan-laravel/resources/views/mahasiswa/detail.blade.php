<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px 16px;
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #334155;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            color: #1e293b;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 24px;
        }

        .card {
            background: white;
            padding: 24px;
            margin-bottom: 24px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.06);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .label {
            display: block;
            margin-bottom: 6px;
            color: #64748b;
            font-size: 13px;
        }

        .value {
            font-weight: bold;
            overflow-wrap: anywhere;
        }

        h2 {
            margin-top: 0;
            color: #1e293b;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 13px 14px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #f1f5f9;
            color: #334155;
            font-size: 13px;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #2563eb;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .empty {
            padding: 20px;
            text-align: center;
            color: #64748b;
        }

        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 18px;
            }
        }
    </style>
</head>

<body>
    <main class="container">
        <a href="{{ url('/matakuliah') }}" class="back-link">
            &larr; Kembali ke daftar mata kuliah
        </a>

        <h1>Detail Mahasiswa</h1>
        <p class="subtitle">Informasi mahasiswa dan daftar mata kuliah yang diambil.</p>

        <section class="card">
            <h2>Informasi Mahasiswa</h2>

            <div class="info-grid">
                <div>
                    <span class="label">NIM</span>
                    <span class="value">{{ $mahasiswa->nim }}</span>
                </div>

                <div>
                    <span class="label">Nama</span>
                    <span class="value">{{ $mahasiswa->nama }}</span>
                </div>

                <div>
                    <span class="label">Email</span>
                    <span class="value">{{ $mahasiswa->email }}</span>
                </div>

                <div>
                    <span class="label">IPK</span>
                    <span class="value">{{ number_format((float) $mahasiswa->ipk, 2) }}</span>
                </div>
            </div>
        </section>

        <section class="card">
            <h2>Daftar Mata Kuliah</h2>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($mahasiswa->mataKuliah as $mataKuliah)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mataKuliah->kode }}</td>
                                <td>{{ $mataKuliah->nama }}</td>
                                <td>{{ $mataKuliah->sks }}</td>
                                <td>{{ $mataKuliah->semester }}</td>
                                <td>{{ $mataKuliah->pivot->nilai ?? '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty">
                                    Mahasiswa ini belum mengambil mata kuliah.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>