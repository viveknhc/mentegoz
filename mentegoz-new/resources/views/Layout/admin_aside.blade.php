
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" {{url('dashboard')}} " target="_blank">
    <img src="{{asset('admin/assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white">Dashboard</span>
    </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
    <li class="nav-item mb-2 mt-0">
    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
    <img src="{{asset('admin/assets/img/avatar.png')}}" class="avatar">
    <span class="nav-link-text ms-2 ps-1">Administrator</span>
    </a>
    <div class="collapse" id="ProfileNav">
    <ul class="nav ">
    <!-- <li class="nav-item">
    <a class="nav-link text-white" href="../pages/pages/profile/overview.html">
    <span class="sidenav-mini-icon"> MP </span>
    <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
    </a>
    </li> -->
    <!-- <li class="nav-item">
    <a class="nav-link text-white " href="../pages/pages/account/settings.html">
    <span class="sidenav-mini-icon"> S </span>
    <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
    </a>
    </li> -->
     <li class="nav-item">
    <a class="nav-link text-white"  href=" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                     
    <span class="sidenav-mini-icon"> L </span>
    <span class="sidenav-normal  ms-3  ps-1"> {{ __('Logout') }} </span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </li>
    </ul>
    </div>
    </li>
    <hr class="horizontal light mt-0">
    <li class="nav-item">
    <a  href="{{url('dashboard')}}" class="nav-link text-white ">
    <i class="material-icons-round opacity-10">dashboard</i>
    <span class="nav-link-text ms-2 ps-1">Dashboard</span>
    </a>

    </li>
    <li class="nav-item mt-3">
    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
    </li>
    <li class="nav-item">
    <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white active" aria-controls="pagesExamples" role="button" aria-expanded="true">
    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apartment</i>
    <span class="nav-link-text ms-2 ps-1">Project</span>
    </a>
    <div class="collapse " id="pagesExamples">
    <ul class="nav ">
    <li class="nav-item ">
    <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="true" href="#Homepage">
    <span class="sidenav-mini-icon"> P P</span>
    <span class="sidenav-normal  ms-2  ps-1"> Project Page <b class="caret"></b></span>
    </a>
    <div class="collapse " id="Homepage">
    <ul class="nav nav-sm flex-column">
    <li class="nav-item">
    <a class="nav-link text-white " href="{{url('project_category')}}">
    <span class="sidenav-mini-icon"> PC </span>
    <span class="sidenav-normal  ms-2  ps-1"> Project Category </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-white " href="{{url('project_technology')}}">
    <span class="sidenav-mini-icon"> PT </span>
    <span class="sidenav-normal  ms-2  ps-1"> Technologies Used </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-white " href="{{url('project_tags')}}">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal  ms-2  ps-1"> Tags </span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link text-white " href="{{url('project')}}">
    <span class="sidenav-mini-icon"> P </span>
    <span class="sidenav-normal  ms-2  ps-1"> Projects </span>
    </a>
    </li>
    </ul>
    </div>
    </li>

    </ul>
    </div>
    </li>

    <li class="nav-item">
    <a  href="{{url('adminnews')}}" class="nav-link text-white " >
    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">newspaper
</i>
    <span class="nav-link-text ms-2 ps-1">Blog</span>
    </a>
    </li>
    <li class="nav-item">
    <a  href="{{url('admincareer')}}" class="nav-link text-white " >
    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">badge</i>
    <span class="nav-link-text ms-2 ps-1">Careers</span>
    </a>
    </li>

    <li class="nav-item">
    <a  href="{{url('team')}}" class="nav-link text-white " >
    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">person_add</i>
    <span class="nav-link-text ms-2 ps-1">Team</span>
    </a>
    </li>


 

    </ul>
    </div>
    </aside>