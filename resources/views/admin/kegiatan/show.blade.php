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
                        <br> <br>
                        <!-- row -->
                        <div class="row column1 ">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class=" white_shd full margin_bottom_30">
                                    <div class="bayangan my-auto full price_table padding_infor_info">
                                        <div class="row">
                                            <!-- user profile section -->
                                            <!-- profile image -->
                                            <div class="col-lg-12">
                                                <div class="full dis_flex center_text">
                                                    <div class="profile_contant">
                                                        <div class="contact_inner mx-auto">
                                                            <h3>Kegiatan</h3>
                                                            <table>
                                                                <tr>
                                                                    <td><strong>Nama Kegiatan </strong> </td>
                                                                    <td><strong> : </strong> </td>
                                                                    <td>
                                                                        <strong>{{ $kegiatan->nama_kegiatan }} </strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>RT </strong> </td>
                                                                    <td><strong> : </strong> </td>
                                                                    <td>
                                                                        <strong>{{ $kegiatan->rt->rt }} </strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Hari/Tanggal</strong> </td>
                                                                    <td><strong> : </strong> </td>
                                                                    <td>
                                                                        <strong>{{ $kegiatan->tanggal_kegiatan }} </strong>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <div class="button_blockc d-flex justify-content-end"><a
                                                                    href="{{ route('kegiatan.index') }}"
                                                                    class="btn cur-p btn-outline-primary ">Kembali</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- footer -->

                    </div>
                    <!-- end dashboard inner -->
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    @include('components.bottomscrip')
</body>

</html>