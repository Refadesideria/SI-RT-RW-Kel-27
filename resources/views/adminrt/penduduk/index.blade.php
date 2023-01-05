<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.topscrip')
    <style>
        .bayangan {
            box-shadow: 1px 1px 10px rgba(0,0,0, 0.9);
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
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30 bayangan">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>
                                            Data penduduk RT {{auth()->user()->rt->rt}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="table_section padding_infor_info">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Umur</th>
                                                        <th>Tempat/Tanggal Lahir</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Agama</th>
                                                        <th>Status Perkawinan</th>
                                                        <th>Pendidikan</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Gol darah</th>
                                                        {{-- <th>Rt</th> --}}
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($penduduk as $data)
                                                    <tr class="table-dark text-dark">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{$data->nik}} </td>
                                                        <td>{{$data->nama}} </td>
                                                        <td>{{$data->umur}} </td>
                                                        <td>{{$data->tempat_lahir}}/{{$data->tanggal_lahir}} </td>
                                                        <td>{{$data->jk}} </td>
                                                        <td>{{$data->agama}} </td>
                                                        <td>{{$data->status_nikah}} </td>
                                                        <td>{{$data->Pendidikan}} </td>
                                                        <td>{{$data->pekerjaan}} </td>
                                                        <td>{{$data->gol_darah}} </td>
                                                        {{-- <td>{{ $data->rt->rt }} </td> --}}
                                                        <td>
                                                            <form action="{{ route('penduduk.destroy', $data->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('penduduk.edit', $data->id) }}"
                                                                    class="btn btn-sm btn-outline-success fa fa-pencil-square-o">

                                                                </a> |
                                                                <a href="{{ route('penduduk.show', $data->id) }}"
                                                                    class="btn btn-sm btn-outline-warning fa fa-eye">

                                                                </a> |
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-outline-danger fa fa-trash-o"
                                                                    onclick="return confirm('Apakah Anda Yakin?')">
                                                                    {{-- <i class="fa fa-user blue_color2"></i> --}}

                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <a href="{{ route('penduduk.create') }}" class="btn btn-sm btn-primary"
                                                style="float: right">
                                                Tambah Data
                                            </a>
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
    </div>
    <!-- jQuery -->
    @include('components.bottomscrip')
</body>

</html>