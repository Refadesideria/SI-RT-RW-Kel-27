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


                                        <!-- Cards -->
                                        <div class="row">
                                            <div class="card w-75 mx-auto">
                                                <br><br>
                                                <h1 align="center">
                                                    Data Rt
                                                </h1>
                                                <span class="d-block w-50 bg-secondary rounded mx-auto"
                                                    style="height: 2px"></span>
                                                <form action="{{ route('rt.store') }}" method="post"
                                                    enctype="multipart/form-data" class="d-flex p-4">
                                                    @csrf
                                                    <div class="col-md-6 pe-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama</label>
                                                            <input type="text"
                                                                class="form-control  @error('nama') is-invalid @enderror"
                                                                name="nama" placeholder="Masukan Nama">
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
                                                                name="umur" placeholder="Masukan Umur">
                                                            @error('umur')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Tanggal Lahir</label>
                                                            <input type="date"
                                                                class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                                                name="tanggal_lahir">
                                                            @error('tanggal_lahir')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Agama</label>
                                                            <select
                                                                class="form-control @error('agama') is-invalid @enderror"
                                                                name="agama">
                                                                <option selected disabled>Pilih Salah Satu</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Budha">Budha</option>
                                                            </select>
                                                            @error('agama')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Jenis Kelamin</label>
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input @error('jk') is-invalid @enderror"
                                                                    type="radio" name="jk" value="Laki-laki">
                                                                <label class="form-check-label">
                                                                    Laki-laki
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input @error('jk') is-invalid @enderror"
                                                                    type="radio" name="jk" value="Perempuan">
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
                                                        <button type="submit" class="btn btn-outline-danger"
                                                            name="submit">Kirim</button>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="mb-3">
                                                            <label class="form-label"><b> Rt </b></label>
                                                            <input type="number"
                                                                class="form-control  @error('rt') is-invalid @enderror"
                                                                name="rt" placeholder="Masukan RT">
                                                            @error('rt')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Foto</label>
                                                            <input type="file"
                                                                class="form-control  @error('image') is-invalid @enderror"
                                                                name="image">
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
                                                                name="email" placeholder="Masukan Akun @">
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
                                                                name="password" placeholder="Masukan Password">
                                                            @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
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