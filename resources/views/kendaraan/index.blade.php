<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:active>{{ $active }}</x-slot:active>

    <div>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">+ Tambah Data</a>
        @if (session()->has('pesan'))
            <div class='alert alert-success'>
                {{ session()->get('pesan') }}
            </div>
        @elseif (session()->has('pesan_error'))
            <div class='alert alert-danger'>
                {{ session()->get('pesan_error') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nomor Polisi</th>
                    <th>Aksi</th>
                    <th>Merek</th>
                    <th>Status</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @if (count($kendaraans) == 0)
                    <tr>
                        <td rowspan="4">Tidak ada data</td>
                    </tr>
                @else
                    @foreach ($kendaraans as $kendaraan)
                        <tr>
                            <td>{{ $kendaraan->nomor_polisi }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('kendaraan.edit', ['kendaraan' => $kendaraan->id]) }}">Edit</a>

                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                            <td>{{ $kendaraan->merek }}</td>
                            <td>
                                @if ($kendaraan->status == 0)
                                    Tidak Tersedia
                                @elseif($kendaraan->status == 1)
                                    Tersedia
                                @else
                                    Kesalahan Membaca Data
                                @endif
                            </td>
                            <td>{{ $kendaraan->kategori->nama_kategori }}</td>
                            <td>{{ $kendaraan->deskripsi }}</td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>
</x-layout>
