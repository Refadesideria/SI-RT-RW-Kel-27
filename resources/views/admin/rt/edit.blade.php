<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.topscrip')
    <style>
        .bayangan {
            box-shadow: 5px 4px 5px;
        }
    </style>
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('layouts.components.side')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('layouts.components.navbar')
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <br><br><br>
                        <!-- row -->
                        <div class="row">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        {{-- @include('layouts/_flash') --}}
                                        
                                        <div class="card w-75 mx-auto">
                                            <div class="card-header">
                                                Data rt
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('rt.update', $rt->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="mb-3">
                                                        <label class="form-label">Rt</label>
                                                        <input type="number"
                                                            class="form-control  @error('rt') is-invalid @enderror"
                                                            name="rt" value="{{ $rt->rt }}">
                                                        @error('rt')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text"
                                                            class="form-control  @error('nama') is-invalid @enderror"
                                                            name="nama" value="{{ $rt->nama }}">
                                                        @error('nama')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Umur</label>
                                                        <input type="number"
                                                            class="form-control  @error('umur') is-invalid @enderror"
                                                            name="umur" value="{{ $rt->umur }}">
                                                        @error('umur')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Jenis Kelamin</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input @error('jk') is-invalid @enderror"type="radio" name="jk" value="Laki-laki" @if ($rt->jk == 'Laki-laki') checked @endif>
                                                            <label class="form-check-label">
                                                                Laki-laki
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input @error('jk') is-invalid @enderror"
                                                                type="radio" name="jk" value="Perempuan"
                                                                @if ($rt->jk == 'Perempuan') checked @endif>
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
                                                        <label class="form-label">Tanggal Lahir</label>
                                                        <input type="date"
                                                            class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                                            name="tanggal_lahir" value="{{ $rt->tanggal_lahir }}">
                                                        @error('tanggal_lahir')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Agama</label>
                                                        <select class="form-control" name="agama">
                                                            <option selected disabled>Pilih Salah Satu</option>
                                                            <option value="Islam"{{ $rt->agama == 'Islam' ? 'selected' : '' }}>Islam
                                                            </option>
                                                            <option value="Kristen"
                                                                {{ $rt->agama == 'Kristen' ? 'selected' : '' }}>Kristen
                                                            </option>
                                                            <option value="Budha"
                                                                {{ $rt->agama == 'Budha' ? 'selected' : '' }}>Budha
                                                            </option>
                                                            <option value="Hindu"
                                                                {{ $rt->agama == 'Hindu' ? 'selected' : '' }}>Hindu
                                                            </option>
                                                            <option value="Katolik"
                                                                {{ $rt->agama == 'Katolik' ? 'selected' : '' }}>Katolik
                                                            </option>
                                                        </select>
                                                        @error('agama')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Foto</label>
                                                        @if (isset($rt) && $rt->image)
                                                            <p>
                                                                <img src="{{ asset('image/rt/' . $rt->image) }}"
                                                                    class="img-rounded img-responsive"
                                                                    style="width: 75px; height:75px;" alt="">
                                                            </p>
                                                        @endif
                                                        <input type="file"
                                                            class="form-control  @error('image') is-invalid @enderror"
                                                            name="image" value="{{ $rt->image }}">
                                                        @error('image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email"
                                                            class="form-control  @error('email') is-invalid @enderror"
                                                            name="email" value="{{ $dataAkunRt->email }}">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input type="password"
                                                            class="form-control  @error('password') is-invalid @enderror"
                                                            name="password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="d-grid gap-2">
                                                            <button class="btn btn-primary mx-auto"
                                                                type="submit">Save</button>
                                                            <a href="{{ route('rt.index') }}"
                                                                class="btn cur-p btn-outline-primary">Kembali</a>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
        <!-- model popup -->
        <!-- The Modal -->
        {{-- <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                </div>
            </div>
        </div> --}}
        <!-- end model popup -->
    </div>
    <!-- jQuery -->
    @include('components.bottomscrip')
</body>

</html>

