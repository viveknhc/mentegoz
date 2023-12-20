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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Team</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Edit Team</h6>
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

            <form action="{{route('admin_team.update',$data->id)}}" method="post" enctype="multipart/form-data"}}>
            {{csrf_field()}}
            {{method_field('PATCH')}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Name</label>
                            <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Name">
                        </div>
                    </div>
               
                    
                    <div class="col-md-6">
                        <div class="input-group input-group-static my-3">
                        <label>Designation</label>
                            <input type="text" name="designation" value="{{$data->designation}}" class="form-control" placeholder="Designation">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="js--image-preview">
                    <img style="width: 254px;" class="upload" src="{{asset('/upload/team_image/'.$data->image)}}">
                    </div>
                        <div class="input-group input-group-static">
                        <label>Team Image</label>
                        <input name="image" placeholder="Choose Image" class="form-control" type="file"  />
                        <input  type="hidden" name="img_team"  class="image-upload" value="{{$data->image}}" >
                        </div>
              
                    </div>
                    <div class="col-md-6">
                    <div class="js--image-preview">
                    <img style="width: 254px;" class="upload" src="{{asset('/upload/team_image/'.$data->details_image)}}">
                    </div>
                        <div class="input-group input-group-static">
                        <label>Team Details Image</label>
                        <input name="details_image" placeholder="Choose Image" class="form-control" type="file"  />
                        <input  type="hidden" name="img_detls_team"  class="image-upload" value="{{$data->image}}" >
                        </div>
              
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-static">
                            <label>Priority</label>
                            <input type="text" name="priority" value="{{$data->priority}}" class="form-control" placeholder="Priority">
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="input-group input-group-static">
                    <label>Description</label>
                        <textarea class="form-control" id="description"  name="overview" rows="2"
                            placeholder="Overview"
                            spellcheck="false">{{$data->overview}}</textarea>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js"></script>
<script type="text/javascript">
    var useDarkMode = window.matchMedia("(prefers-color-scheme: dark)").matches;

    tinymce.init({
        selector: "textarea#description",
        plugins: "print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons",
        imagetools_cors_hosts: ["picsum.photos"],
        menubar: "file edit view insert format tools table help",
        toolbar: "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl",
        toolbar_sticky: false,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {

        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
        image_advtab: true,
        importcss_append: true,
        templates: [

            {
                title: "Overview",
                description: "Overview",
                content: ''
            }
        ],
        template_cdate_format: "[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]",
        template_mdate_format: "[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]",
        height: 500,
        image_caption: true,
        quickbars_selection_toolbar: "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: "sliding",
        contextmenu: "link image imagetools table",
        skin: useDarkMode ? "oxide-dark" : "oxide",
        content_css: useDarkMode ? "dark" : "default",
        forced_root_block : "", 
        force_br_newlines : true,
        force_p_newlines : false
    });

</script>
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