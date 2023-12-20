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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
                    <h6 class="font-weight-bolder mb-0">Add New Career</h6>
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

            <form action="{{url('career_store')}}" method="post">
            {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Job Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Experience </label>
                            <input type="text" name="experience" class="form-control" placeholder="Experience ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Location </label>
                            <input type="text" name="location" class="form-control" placeholder="Location ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Vacancies </label>
                            <input type="text" name="vacancies" class="form-control" placeholder="No.Of Vacancies ">
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Qualification </label>
                            <input type="text" name="qualification" class="form-control" placeholder="Qualification ">
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="input-group input-group-static">
                    <label>Description</label>
                        <textarea class="form-control" name="description" rows="2"
                            placeholder="Description"
                            spellcheck="false"></textarea>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static">
                            <label>Priority</label>
                            <input type="text" name="priority" class="form-control" placeholder="Priority">
                        </div>
                    </div>
                
                  
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                       <input type="submit" class="btn btn-info" value="Submit">
                    </div>
                </div>
            </form>

            <h6 class="font-weight-bolder mb-0">Career List</h6>
            <div class="table-responsive">
                <table id="datatable" class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SL NO</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Job Title</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Experience</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Qualification</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Priority</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($career as $new)
                        <tr>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{@$i +=1}}</p>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
            
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">{{$new->title}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
            
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">{{$new->experience}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
            
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">{{$new->qualification}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
            
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">{{$new->priority}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <a href="{{route('admin_career.edit',$new->id)}}" class="text-secondary font-weight-normal text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    <i class="fa fa-pencil-square" aria-hidden="true"></i> &nbsp;Edit
                                </a>
                            </td>
                            <td class="align-middle text-center">
                <form method="post" class="delete_form" action="{{route('career_delete', $new->id)}}">
                 {{csrf_field()}}
                 <input type="hidden" name="_method" value="DELETE" />
                 <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> &nbsp;Delete</button>
                </form>
                 </td>
                        
                        </tr>
                        @endforeach 
             
                       
                    </tbody>
                </table>
            </div>
        </div>

        @include('Layout.admin_footer')

</body>

<script type="text/javascript">
                $(document).ready(function() {
    $('#datatable').DataTable();
} );
 
</script>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
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