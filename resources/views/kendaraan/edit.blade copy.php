<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:active>{{ $active }}</x-slot:active>

    Halaman Edit data kendaraan

    {{-- <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Kendaraan</h3>
        </div> --}}


    {{-- <div class="card-body">
            <form action="{{ route('kendaraan.store') }}" method="POST"
                onsubmit="document.getElementById('btn-submit-create').disabled">
                @csrf

                <div class="form-group">
                    <label for="nomor_polisi">Nomor Polisi Kendaraan</label>
                    <input required type="text" name='nomor_polisi'
                        class="form-control @error('nomor_polisi') is-invalid @enderror"
                        placeholder="Masukan Nomor Polisi kendaraan">
                    @error('nomor_polisi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="merek">Merek Kendaraan</label>
                    <input required type="text" name='merek'
                        class="form-control @error('merek') is-invalid @enderror" placeholder="Masukan Merek Kendaraan">
                    @error('merek')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status Kendaraan</label>
                    <select class="form-control" name='status'>
                        <option value=''>-- Pilih Status Kendaraan --</option>
                        <option value=true>Active/Tersedia</option>
                        <option value=false>Deactive/Tidak Terseda</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kategori_kendaraan">Kategori Kendaraan</label>
                    <select class="form-control" name='kategori_kendaraan'>
                        <option value=''>-- Pilih kategori Kendaraan --</option>
                        @foreach ($kategoriKendaraans as $kategoriKendaraan)
                            <option value="{{ $kategoriKendaraan->id }}">{{ $kategoriKendaraan->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                    @error('kategori_kendaraan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi Kendaraan</label>
                    <input required type="text" name='deskripsi'
                        class="form-control @error('deskripsi') is-invalid @enderror"
                        placeholder="Masukan Deskripsi Kendaraan">
                    @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <br>
                <button id="btn-submit-create" type="submit" class="btn btn-primary">Submit</button>
                &nbsp;
                <a href="/kendaraan" class="btn btn-outline-dark">Kembali</a>

            </form>
        </div> --}}
    {{-- </div> --}}
</x-layout>
