<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 Mahasiswa dengan IPK Tertinggi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f8fafc;
            color: #1e293b;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #cbd5e1;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #e2e8f0;
        }

        tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .kosong {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>10 Mahasiswa dengan IPK Tertinggi</h1>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($daftarMahasiswa as $mahasiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->programStudi->nama ?? '-' }}</td>
                    <td>{{ $mahasiswa->angkatan }}</td>
                    <td>{{ number_format($mahasiswa->ipk, 2) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="kosong">
                        Belum ada data mahasiswa Teknik Komputer.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>