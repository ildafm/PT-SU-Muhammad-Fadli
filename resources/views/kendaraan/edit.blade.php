<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:active>{{ $active }}</x-slot:active>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data Kendaraan Nomor Polisi {{ $kendaraan->nomor_polisi }}</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('kendaraan.update', ['kendaraan' => $kendaraan->id]) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="nomor_polisi">Nomor Polisi Kendaraan</label>
                    <input required type="text" name='nomor_polisi'
                        class="form-control @error('nomor_polisi') is-invalid @enderror"
                        placeholder="Masukan Nomor Polisi kendaraan" value="{{ $kendaraan->nomor_polisi }}">
                    @error('nomor_polisi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="merek">Merek Kendaraan</label>
                    <input required type="text" name='merek'
                        class="form-control @error('merek') is-invalid @enderror" placeholder="Masukan Merek Kendaraan"
                        value="{{ $kendaraan->merek }}">
                    @error('merek')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status Kendaraan</label>
                    <select class="form-control  @error('status') is-invalid @enderror" name='status'>
                        <option value=''>-- Pilih Status Kendaraan --</option>
                        <option value=0 <?= $kendaraan->status == 0 ? 'selected' : '' ?>>Deactive/Tidak Terseda</option>
                        <option value=1 <?= $kendaraan->status == 1 ? 'selected' : '' ?>>Active/Tersedia</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kategori_kendaraan">Kategori Kendaraan</label>
                    @php
                        $option = $kendaraan->kategori_id;
                    @endphp

                    <select class="form-control @error('status') is-invalid @enderror" name='kategori_kendaraan'>
                        <option value=''>-- Pilih kategori Kendaraan --</option>
                        @foreach ($kategoriKendaraans as $kategoriKendaraan)
                            <option value="{{ $kategoriKendaraan->id }}"
                                {{ $option == $kendaraan->kategori_id ? 'selected' : '' }}>
                                {{ $kategoriKendaraan->nama_kategori }}
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
                        placeholder="Masukan Deskripsi Kendaraan" value="{{ $kendaraan->deskripsi }}">>
                    @error('deskripsi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <br>
                <button id="btn-submit-create" type="submit" class="btn btn-primary">Submit</button>
                &nbsp;
                <a href="/kendaraan" class="btn btn-outline-dark">Kembali</a>

            </form>
        </div>
    </div>


</x-layout>
