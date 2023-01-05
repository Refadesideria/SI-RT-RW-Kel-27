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
                                    <form action="{{ route('ronda.update',$ronda->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <label class="form-label">Rt</label>
                                            <select name="id_rt"
                                                class="form-control  @error('id_rt') is-invalid @enderror">
                                                @foreach ($rt as $data)
                                                <option value="{{ $data->id }}"{{ $data->id == $ronda->id_rt ? 'selected' : '' }}>{{ $data->rt }}</option>
                                                @endforeach
                                            </select>
                                            @error('id_rt')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
`                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Bulan</label>
                                            <select class="form-control @error('bulan') is-invalid @enderror"
                                                name="bulan">
                                                <option selected disabled>Pilih Bulan</option>
                                                <option value="Januari" {{ $ronda->bulan == 'Januari' ? 'selected' : '' }}>Januari</option>
                                                <option value="Februari" {{ $ronda->bulan == 'Februari' ? 'selected' : '' }}>Februari</option>
                                                <option value="Maret" {{ $ronda->bulan == 'Maret' ? 'selected' : '' }}>Maret</option>
                                                <option value="April" {{ $ronda->bulan == 'April' ? 'selected' : '' }}>April</option>
                                                <option value="Mei" {{ $ronda->bulan == 'Mei' ? 'selected' : '' }}>Mei</option>
                                                <option value="Juni" {{ $ronda->bulan == 'Juni' ? 'selected' : '' }}>Juni</option>
                                                <option value="Juli" {{ $ronda->bulan == 'Juli' ? 'selected' : '' }}>Juli</option>
                                                <option value="Agustus" {{ $ronda->bulan == 'Agustus' ? 'selected' : '' }}>Agustus</option>
                                                <option value="September" {{ $ronda->bulan == 'September' ? 'selected' : '' }}>September</option>
                                                <option value="Oktober" {{ $ronda->bulan == 'Oktober' ? 'selected' : '' }}>Oktober</option>
                                                <option value="November" {{ $ronda->bulan == 'November' ? 'selected' : '' }}>November</option>
                                                <option value="Desember" {{ $ronda->bulan == 'Desember' ? 'selected' : '' }}>Desember</option>
                                            </select>
                                            @error('bulan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Minggu Ke</label>
                                            <select class="form-control @error('minggu') is-invalid @enderror"
                                                name="minggu">
                                                <option selected disabled>Minggu Ke...</option>
                                                <option value="Pertama" {{ $ronda->minggu == 'Pertama' ? 'selected' : '' }}>Pertama</option>
                                                <option value="Kedua" {{ $ronda->minggu == 'Kedua' ? 'selected' : '' }}>Kedua</option>
                                                <option value="Ketiga" {{ $ronda->minggu == 'Ketiga' ? 'selected' : '' }}>Ketiga</option>
                                                <option value="Keempat" {{ $ronda->minggu == 'Keempat' ? 'selected' : '' }}>Keempat</option>
                                            </select>
                                            @error('minggu')
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
    </div>
    <!-- jQuery -->
    @include('components.bottomscrip')
</body>

</html>