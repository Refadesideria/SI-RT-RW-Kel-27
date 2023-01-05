
<head>
    @include('components.topscrip')
    
        
</head>

<body class="inner_page login">
    <div class="full_container shadow-lg p-3 mb-5 bg-body rounded">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210"  alt="" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <div class="field">
                                    <label class="label_field ">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukan Email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan Password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <center>
                                    <button class="main_bt">Masuk</button>
                                    </center>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.bottomscrip')

</body>



</html>
