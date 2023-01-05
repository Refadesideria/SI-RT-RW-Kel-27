@extends('layouts.admin')
@section('content')
    <div class="row justify-content">
        <div class="col-md-8 mx-auto">
            <div class="container-fluid">
                <!-- row -->

                <!-- column contact -->
                <div class=" profile_details margin_bottom_30 ">
                    <div class="contact_blog">
                        <h4 class="brief">{{ $penduduk->nik }}</h4>
                        <div class="contact_inner">
                            <div class="left">
                                <h3>{{ $penduduk->nama }}</h3>
                                <table>
                                    <tr>
                                        <td><strong>Umur</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->umur }} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tempat/Tgl Lahir</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->tempat_lahir }},{{ $penduduk->tanggal_lahir }} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jenis Kelamin</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->jk }} </td>
                                        <td><strong>Gol Darah</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->gol_darah }} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Agama</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->agama }} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Status Perkawinan</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->status_nikah }} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pendidikan Terakhir</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->Pendidikan }} </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pekerjaan</strong></td>
                                        <td> &nbsp:&nbsp </td>
                                        <td> {{ $penduduk->pekerjaan }} </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="right">
                                <div class="profile_contacts">
                                    @if (isset($penduduk) && $penduduk->foto)
                                    <img class="img-responsive" src="{{ asset('image/penduduk/' . $penduduk->foto) }}"alt="#" />
                                    @endif
                                </div>
                            </div>
                            <div class="bottom_list">
                                <div class="left_rating">
                                    <div class="button_blockc d-flex justify-content-end">
                                        <a href="{{ route('penduduk.index') }}"class="btn cur-p btn-outline-primary ">Kembali</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end column contact blog -->
                <!-- end row -->
            </div>
            <!-- footer -->
        </div>
        <!-- end dashboard inner -->
    </div>
    </div>
@endsection
