<? use App\Http\Controllers\UserController; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-divce-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Store Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style type="text/css">
            .bg-image {
                height: 100%;
                width: 100%;
                background-image: url(resources/img/2042.jpg);
                background-repeat: no-repeat;
                background-position: top center;
                background-size: cover;
                background-attachment: fixed;
            }
            .login-page{
                padding-top: 5%;
                padding-bottom: 10%;
            }
            .custome-login {
                padding: 25px 35px 35px;
                box-shadow: 0px 0px 4px #0000001f;
                background: #fff;
            }
            .main-title {
                font-weight: 900;
                font-size: 35px;
            }
            span#basic-addon1 {
                background: #fff;
            }
            a {
                font-size: 15px;
                font-weight: 500;
                color: #ec0000;
            }
            .btn-50 {
                width: 49%;
            }
            .custome-header-panel{
                max-width:100%;
                background:#fff;
            }
            .navbar-brand{
                font-weight:900;
            }
            .navbar-list{
                padding: 0px;
                margin: 0px;
            }
            .navbar-list li {
                padding: 0px;
                text-decoration: none;
                display: inline-block;
            }
            .h-item  a {
                text-decoration:none;
                padding: 4px 15px;
            }
            .custome-side-panel{
                max-width:17%;
                background:#fff;
            }
            .navbar-nav {
                display: block!important;
                width: 100%;
                padding: 0;
            }
            a.nav-link {
                /*border-bottom: 1px solid #0000000d;*/
                color: #847592;
                padding: 10px 15px!important;
                transition-duration: .1s;
                text-transform: uppercase;
                font-size: 13px;
            }
            a.nav-link:hover {
                border-left: 5px solid #007bff;
                color: #007bff;
                background: #f1f8ff;
            }
            a.nav-link i {
                font-size: 18px;
                padding-right: 10px;
            }
            .font-16{ font-size:16px!important; }
            .list-arrow{ float: right; }
            @media(max-width:767px){
                .navbar-brand, .navbar-list{
                    width:100%!important;
                }
                .navbar-brand {
                    font-weight: 900;
                    text-align: center;
                    font-size: 25px;
                    margin-bottom:10px;
                }
                .h-item a {
                    padding: 4px 15px;
                }
            }
        </style>
    </head>
    <body class="bg-light">
        @if(Session::has('user'))
            {{View::make('header')}}
        @endif
            @yield('content')
        @if(Session::has('user'))
            {{View::make('footer')}}
        @endif
    </body>
</html>