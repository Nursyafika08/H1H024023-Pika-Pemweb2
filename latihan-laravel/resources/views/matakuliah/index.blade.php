<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
</head>
<body>

    <h1>Daftar Mata Kuliah</h1>

    <form method="GET">
        <input type="text" name="kataKunci" value="{{ $kataKunci }}" placeholder="Cari mata kuliah...">
        <button type="submit">Cari</button>
    </form>

    <br>

   @foreach ($matakuliah as $mk)
    <div>
        <a href="{{ url('/matakuliah/' . $mk['kode']) }}">
            {{ $mk['kode'] }}
        </a>
        - {{ $mk['nama'] }}

        <x-badge-sks :sks="$mk['sks']" />
    </div>
@endforeach

</body>
</html>