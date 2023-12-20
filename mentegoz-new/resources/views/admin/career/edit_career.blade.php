<?php
use Illuminate\Support\Facades\Auth;
 
if (Auth::check()) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}')}}">
    <link rel="icon" type="image/png" href="{{asset('admin/assets/img/favicon.png')}}')}}">
    <title>
        Admin Dashboard
    </title>




    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <link href="{{asset('admin/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <link id="pagestyle" href="{{asset('admin/assets/css/material-dashboard.min.css')}}" rel="stylesheet" />

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
@include('Layout.admin_aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Career</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Edit Career</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                    <ul class="navbar-nav  justify-content-end">

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->


        <div class="p-4" style="background-color: #fff;">

            <form action="{{route('admin_career.update',$data->id)}}" method="post" enctype="multipart/form-data"}}>
            {{csrf_field()}}
            {{method_field('PATCH')}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Title</label>
                            <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Experience</label>
                            <input type="text" name="experience" value="{{$data->experience}}" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Location </label>
                            <input type="text" name="location" class="form-control" value="{{$data->location}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Vacancies </label>
                            <input type="text" name="vacancies" class="form-control" value="{{$data->vacancies}}>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Qualification</label>
                            <input type="text" name="qualification" value="{{$data->qualification}}" class="form-control" >
                        </div>
                    </div>
                 <div class="col-md-6">
                    <div class="input-group input-group-static">
                    <label>Description</label>
                        <textarea class="form-control" name="description" rows="2"
                            placeholder="Description"
                            spellcheck="false">{{$data->description}}</textarea>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static">
                            <label>Priority</label>
                            <input type="text" name="priority" value="{{$data->priority}}" class="form-control" placeholder="Priority">
                        </div>
                    </div>
                
                  
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                       <input type="submit" class="btn btn-info" value="Update">
                    </div>
                </div>
            </form>

          
        </div>

        @include('Layout.admin_footer')

</body>

</html>
<?php
} else{

?>
        <script>
            window.location = "{{ url('/login') }}";

        </script>
        <?php     
   }
   ?>