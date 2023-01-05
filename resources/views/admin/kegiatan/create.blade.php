<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.topscrip')
    
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
                            <div class="card w-75 mx-auto">
                                <div class="card-header">
                                    <strong>
                                        Data RONDA
                                    </strong>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('kegiatan.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="mb-3">
                                            <label class="form-label">Nama Kegiatan </label>
                                            <input type="text" class="form-control  @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" placeholder="Masukan Nama Kegiatan">
                                            @error('nama_kegiatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Rt</label>
                                            <select name="id_rt" class="form-control  @error('id_rt') is-invalid @enderror">
                                                @foreach ($rt as $data)
                                                <option value="{{ $data->id }}">{{ $data->rt }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_rt')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Tanggal</label>
                                            <input type="date" class="form-control  @error('tanggal_kegiatan') is-invalid @enderror" name="tanggal_kegiatan" placeholder="Masukan Nama">
                                            @error('tanggal_kegiatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </form>
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