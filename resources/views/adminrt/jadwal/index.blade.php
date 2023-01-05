@extends('layouts.admin')
@section('content')
    <div class="row justify-content">
        <div class="col-md-8 mx-auto">
            <div class="card ">
                <div class="white_shd full margin_bottom_30 bayangan">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Jadwal ronda Rt {{ auth()->user()->rt->rt }}</h2>
                        </div>
                    </div>

                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Bulan</th>
                                        <th>Minggu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    @foreach ($jadwal as $data)
                                        <tr class="table-dark text-dark">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->bulan }} </td>
                                            <td>{{ $data->minggu }} </td>
                                            <td><a href="/admin-rt/jadwal/ronda/{{ $data->id }}"
                                                    class="btn btn-sm btn btn-primary">Kelola</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <a href="{{ route('ronda.create') }}" class="btn btn-sm btn-primary" style="float: right">
                                Tambah Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
