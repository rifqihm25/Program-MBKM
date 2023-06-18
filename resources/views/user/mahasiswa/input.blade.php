@extends('partials.app')
@section('page_styles')
    <link rel="stylesheet" href="{{ url('css/styleinput.css') }}">
@endsection
@section('content')
    <div class="container">
        <h2 class="header text-center mt-4">FORMULIR PENDAFTARAN MBKM</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-column">
                    <label for="nama">Nama Lengkap :</label>
                    <input style="width: 500px; margin: auto;" class="form-control @error('nama')
                        is-invalid
                    @enderror"
                        type="text" name="nama" id="nama" placeholder="Masukan Nama Anda" required
                        value="{{ $mhs->nama }}">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            {{-- </div><br> --}}

                <div class="form-column">
                    <label for="email">Email :</label>
                    <input style="width: 500px; margin: auto;" class="form-control @error('email_mhs')
                        is-invalid
                    @enderror"
                        type="email" name="email_mhs" id="email_mhs" placeholder="Masukan Email Anda" required
                        value="{{ $mhs->email_mhs }}">
                    @error('email_mhs')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="npm">NPM :</label>
                    <input style="width: 500px; margin: auto;" class="form-control @error('npm')
                        is-invalid
                    @enderror"
                        type="text" name="npm" id="npm" placeholder="Masukan NPM Anda" required
                        value="{{ $mhs->npm }}">
                    @error('npm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            {{-- </div><br> --}}

                <div class="form-column">
                    <label for="no_telepon">Nomor Telepon :</label>
                    <input style="width: 500px; margin: auto;" class="form-control @error('no_telepon')
                        is-invalid
                    @enderror"
                        type="number" name="no_telepon" id="no_telepon" placeholder="Masukan Nomor Telepon Anda" required
                        value="{{ $mhs->no_telepon }}">
                    @error('no_telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- <div>
                <label for="fakultas">Fakultas :</label>
                <input class="form-control @error('fakultas')
                    is-invalid
                @enderror"
                    type="text" name="fakultas" id="fakultas" placeholder="Masukan Fakultas Anda" required
                    value="{{ $mhs->fakultas }}">
                @error('fakultas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div><br> --}}

            <div class="form-row">
                <div class="form-column">
                <label for="fakultas">Fakultas :</label>
                <select style="width: 500px; margin: auto;" class="form-control" name="fakultas" id="fakultas" required>
                    <option disabled selected>Pilih Fakultas</option>
                    <option value="Fakultas Teknik dan Ilmu Komputer">Fakultas Teknik dan Ilmu Komputer</option>
                </select>
                </div>
            {{-- </div><br> --}}

                <div class="form-column">
                <label for="jurusan">Prodi :</label>
                <select style="width: 500px; margin: auto;" class="form-control" name="jurusan" id="jurusan" required>
                    <option disabled selected>Pilih Prodi</option>
                    <option value="Informatika">Informatika</option>
                </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-column">
                <label for="semester">Semester:</label>
                <input style="width: 500px; margin: auto;" class="form-control @error('semester')
                    is-invalid
                @enderror"
                    type="number" name="semester" id="semester" placeholder="Masukan Semester Anda" required
                    value="{{ $mhs->semester }}">
                @error('semester')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            {{-- </div><br> --}}

                <div class="form-column">
                <label for="periode_smt">Periode Semester :</label>
                <select style="width: 500px; margin: auto;" class="form-control" name="periode_smt" id="periode_smt" required>
                    <option disabled selected>Pilih Periode</option>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-column">
                <label for="ipk">IPK :</label>
                <input style="width: 500px; margin: auto;" class="form-control @error('ipk')
                    is-invalid
                @enderror"
                    type="number" step="0.01" name="ipk" id="ipk" placeholder="Masukan IPK Anda" required
                    value="{{ $mhs->ipk }}">
                @error('ipk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            {{-- </div><br> --}}

                <div class="form-column">
                <label for="jenis_mbkm">Jenis MBKM :</label>
                <select style="width: 500px; margin: auto;" class="form-control" name="jenis_mbkm" id="jenis_mbkm" required>
                    <option disabled selected>Pilih Jenis MBKM</option>
                    @foreach ($mbkm as $mbkm)
                        <option value="{{ $mbkm->mbkm_id }}">{{ $mbkm->nama_mbkm }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-column">
                    <label for="tgl_daftar">Tanggal Daftar Program</label>
                    <input style="width: 500px; margin: auto;" type="date" class="form control tgl-daftar @error('tgl_daftar') is-invalid @enderror"
                        name="tgl_daftar" placeholder="Masukkan Tanggal Daftar Program" value="{{ old('tgl_daftar') }}">
                    @error('tgl_daftar')
                        <span class="invalid-feedback font-weight-bold">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-column" style="margin-top: 4%; padding-left: 2.5%">
                    <button type="submit" class="btn-daftar btn-primary" style="width: 243px">Simpan</button>
                    <button type="reset" class="btn-reset btn-danger" style="width: 243px">Hapus</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('page_js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@endsection
@section('page_script')
    <script>
        $(function() {
            flatpickr(".tgl-daftar", {
                dateFormat: "Y-m-d",
                allowInput: true,
                altInput: true,
                altFormat: "Y-m-d",
            });
        });
    </script>
@endsection
