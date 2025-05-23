<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">



                <form action="{{route('verifyLogin.user')}}" method="POST" class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    @csrf
                    @method('POST')

                    <div class="d-flex align-items-center justify-content-between mb-3">

                        <h3>Login</h3>


                    </div>
                    <div class="col-12">
                        @if ($message = Session::get('failed'))
                            <div class="alert alert-danger">{{$message}}</div>
                        @endif

                        @if ($message = Session::get('logout'))
                            <div class="alert alert-success">{{$message}}</div>
                        @endif
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="logName" class="form-control" id="floatingInput" placeholder="name">
                        <label for="floatingInput">Login name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('dashboard/lib/chart/chart.min.js')}}"></script>
<script src="{{asset('dashboard/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('dashboard/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('dashboard/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('dashboard/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('dashboard/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('dashboard/js/main.js')}}"></script>
</body>

</html>
