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
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>User RT</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img"><img width="195" height="300" class="rounded" src="{{ asset('/image/rt/' . $rt->image)}}" alt="#" /></div>
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3>{{$rt->nama }}</h3>
                                                <table>
                                                   <tr>
                                                      <td><p><strong>Ketua Rt</strong></p></td>
                                                      <td><p><strong> : </strong></p></td>
                                                      <td><p><strong>{{$rt->rt}} </strong></p></td>
                                                   </tr>
                                                   <tr>
                                                      <td><p><strong>Umur</strong></p></td>
                                                      <td><p><strong> : </strong></p></td>
                                                      <td><p><strong>{{$rt->umur}} </strong></p></td>
                                                   </tr>
                                                   <tr>
                                                      <td><p><strong>Jenis Kelamin</strong></p></td>
                                                      <td><p><strong> : </strong></p></td>
                                                      <td><p><strong>{{$rt->jk}} </strong></p></td>
                                                   </tr>
                                                   <tr>
                                                      <td><p><strong>Tanggal Lahir</strong></p></td>
                                                      <td><p><strong> : </strong></p></td>
                                                      <td><p><strong>{{$rt->tanggal_lahir}} </strong></p></td>
                                                   </tr>
                                                   <tr>
                                                      <td><p><strong>Agama</strong></p></td>
                                                      <td><p><strong> : </strong></p></td>
                                                      <td><p><strong>{{$rt->agama}} </strong></p></td>
                                                   </tr>
                                                </table>
                                                <div class="button_blockc d-flex justify-content-end"><a href="{{ route('rt.index') }}" class="btn cur-p btn-outline-primary ">Kembali</a></div>
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
    @include('components.bottomscrip')
</body>

</html>