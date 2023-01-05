@extends('layouts.admin')
@section('content')
    <div class="row justify-content">
        <div class="col-md-8 mx-auto">
            <div class="card ">
                <div class="white_shd full margin_bottom_30 bayangan">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h3>Jadwal ronda Rt {{ auth()->user()->rt->rt }} Bulan {{ $ronda->bulan }} Minggu ke
                                {{ $ronda->minggu }}</h3>
                        </div>
                    </div>

                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm mb-3">
                            <h5>Senin</h5>
                            <table class="table table-bordered">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    {{-- @foreach ($jadwal as $data)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive-sm mb-3">
                            <h5>Selasa</h5>
                            <table class="table table-bordered">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    {{-- @foreach ($jadwal as $data)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive-sm mb-3">
                            <h5>Rabu</h5>
                            <table class="table table-bordered">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    {{-- @foreach ($jadwal as $data)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive-sm mb-3">
                            <h5>Kamis</h5>
                            <table class="table table-bordered">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    {{-- @foreach ($jadwal as $data)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive-sm mb-3">
                            <h5>Jumat</h5>
                            <table class="table table-bordered">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    {{-- @foreach ($jadwal as $data)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive-sm mb-3">
                            <h5>Sabtu</h5>
                            <table class="table table-bordered">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    {{-- @foreach ($jadwal as $data)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive-sm mb-3">
                            <h5>Minggu</h5>
                            <table class="table table-bordered">
                                <thead class='thead-dark mx-auto '>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="mx-auto">
                                    @php $no = 1; @endphp
                                    {{-- @foreach ($jadwal as $data)
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <a href="/admin-rt/jadwal/create?id=1" class="btn btn-sm btn-primary" style="float: right">
                                Tambah Data
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
