@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card w-75 mx-auto">
        <br><br>
        <h1 align="center">
            Data Penduduk
        </h1>
        <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
        <form action="{{ route('penduduk.update',$penduduk->id) }}" method="post" enctype="multipart/form-data" class="d-flex p-4">
            @csrf
            @method('put')

            <div class="col-md-6 pe-4">
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input type="number" class="form-control  @error('nik') is-invalid @enderror" name="nik"
                        placeholder="Masukan NIK" value="{{ $penduduk->nik }}">
                    @error('nik')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama"
                        placeholder="Masukan Nama" value="{{ $penduduk->nama }}">
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Umur</label>
                    <input type="number" class="form-control  @error('umur') is-invalid @enderror" name="umur"
                        placeholder="Masukan Umur" value="{{ $penduduk->umur }}">
                    @error('umur')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror"
                        name="tempat_lahir" placeholder="Masukan Tempat lahir" value="{{ $penduduk->tempat_lahir }}">
                    @error('tempat_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                        name="tanggal_lahir" value="{{ $penduduk->tanggal_lahir }}">
                    @error('tanggal_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk"
                            value="Laki-laki" @if ($penduduk->jk == 'Laki-laki') checked @endif> 
                        <label class="form-check-label">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk"
                            value="Perempuan" @if ($penduduk->jk == 'Perempuan') checked @endif>
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>
                    @error('jk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                </div>
                <button type="submit" class="btn btn-outline-danger" name="submit">Kirim</button>
            </div>

            <div class="col-md-6">

                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select class="form-control" name="agama">
                        <option selected disabled>Pilih Salah Satu</option>
                        <option value="Islam" {{ $penduduk->agama == 'Islam' ? 'selected' : '' }}>Islam
                        </option>
                        <option value="Kristen" {{ $penduduk->agama == 'Kristen' ? 'selected' : '' }}>Kristen
                        </option>
                        <option value="Budha" {{ $penduduk->agama == 'Budha' ? 'selected' : '' }}>Budha
                        </option>
                        <option value="Hindu" {{ $penduduk->agama == 'Hindu' ? 'selected' : '' }}>Hindu
                        </option>
                        <option value="Katolik" {{ $penduduk->agama == 'Katolik' ? 'selected' : '' }}>Katolik
                        </option>
                    </select>
                    @error('agama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Status Perkawinan</label>
                    <select class="form-control @error('status_nikah') is-invalid @enderror" name="status_nikah">
                        <option selected disabled>Pilih Salah Satu</option>
                        <option value="Belum Kawin" {{ $penduduk->status_nikah == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
                        <option value="Kawin" {{ $penduduk->status_nikah == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                        <option value="Cerai Hidup" {{ $penduduk->status_nikah == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                        <option value="Cerai Mati" {{ $penduduk->status_nikah == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                    </select>
                    @error('status_nikah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Pendidikan</label>
                    <select class="form-control @error('Pendidikan') is-invalid @enderror" name="Pendidikan">
                        <option selected disabled>Pilih Salah Satu</option>
                        <option value="SD" {{ $penduduk->Pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                        <option value="SMP" {{ $penduduk->Pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                        <option value="SMA/K" {{ $penduduk->Pendidikan == 'SMA/K' ? 'selected' : '' }}>SMA/K</option>
                        <option value="S1" {{ $penduduk->Pendidikan == 'S1' ? 'selected' : '' }}>S1</option>
                        <option value="S2" {{ $penduduk->Pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                        <option value="S3" {{ $penduduk->Pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                    </select>
                    @error('Pendidikan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control  @error('pekerjaan') is-invalid @enderror" name="pekerjaan"
                        placeholder="Masukan Pekerjaan" value="{{ $penduduk->pekerjaan }}">
                    @error('pekerjaan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Gol darah</label>
                    <select class="form-control @error('gol_darah') is-invalid @enderror" name="gol_darah">
                        <option selected disabled>Pilih Salah Satu</option>
                        <option value="A" {{ $penduduk->gol_darah == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ $penduduk->gol_darah == 'B' ? 'selected' : '' }}>B</option>
                        <option value="AB" {{ $penduduk->gol_darah == 'AB' ? 'selected' : '' }}>AB</option>
                        <option value="O" {{ $penduduk->gol_darah == 'O' ? 'selected' : '' }}>O</option>
                    </select>
                    @error('gol_darah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Rt</label>
                    <select name="id_rt" class="form-control  @error('id_rt') is-invalid @enderror">
                        @foreach ($rt as $data)
                        <option value="{{ $data->id }}"{{ $data->id == $penduduk->id_rt ? 'selected' : '' }}>{{ $data->rt }}</option>
                        @endforeach
                    </select>
                    @error('id_rt')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    @if (isset($penduduk) && $penduduk->foto)
                    <p>
                        <img src="{{ asset('image/penduduk/' . $penduduk->foto) }}" class="img-rounded img-responsive"
                            style="width: 75px; height:75px;" alt="">
                    </p>
                    @endif
                    <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto" value="{{ $penduduk->foto }}">
                    @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </form>
    </div>
</div>
@endsection