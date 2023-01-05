<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.topscrip')
    <style>
        .bayangan {
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.9);
        }
    </style>
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('layouts.components.side2')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('layouts.components.navbar2')
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <br><br><br>
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30 ">
                                    <div class="table_section padding_infor_info">
                                        <section class='content'>
                                            @yield('content1')
                                        </section>
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