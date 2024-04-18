<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>IT - intelliinfo</title>
    <!-- Favicon-->
    <link rel="icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/x-icon">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Plugins Core Css -->
    <link href="{{URL::asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"
        integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />
    <!-- Custom Css -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- <link href="{{URL::asset('assets/css/prism.css')}}" rel="stylesheet" /> -->

    <!-- You can choose a theme from css/styles instead of get all themes -->
    <!-- <link href="{{URL::asset('assets/css/styles/theme-white.css')}}" rel="stylesheet" /> -->

    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    
    <!-- <style>
         input[type=search]:not(.browser-default){
            border:none !important;
            background-color: #f3f5fa !important;
            border-radius: 30px !important;
            /* width: 300px !important; */
            /* margin: 8px 0px 0px 0px; */
            padding: 0px 20px 0px 34px;
        }
        /* .bg{
            background-color: #f8f9fc !important;
        } */
        .searchicon{  
            position: absolute;
            z-index: 2;
            left: 12px;
            top: 8px;

        }
         .searchicon i{
            color:#777777 !important;
        }
    </style> -->
</head>

<body class=" theme-white  bg" >
    <!-- Page Loader -->
    <div class="page-loader-wrapper d-none">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{URL::asset('assets\images\favicon.png')}}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Top Bar -->
    @include('admin.layouts.header')
    <!-- #Top Bar -->
    @include('admin.layouts.sidemenu')
    <section class="content admin_content p-3">
        <div class="container-fluid p-0">
            @yield('content')
        </div>
    </section>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">ARE YOU SURE , YOU WANT TO LOGOUT...!!</h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                          <a href="logout" id="logout_button">
                            <button type="button" class="btn btn-info waves-effect logout_button cardtxt" id="logout" name="logout">Confirm</button>     
                          </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <button type="button" class="btn btn-danger waves-effect"data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- <script src="{{URL::asset('assets/js/prism.js')}}"></script> -->
    <script src="{{URL::asset('assets/js/app.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <!-- Custom Js -->
    
    <script src="{{URL::asset('assets/js/admin.js')}}"></script>
    <script src="{{URL::asset('assets/js/form.min.js')}}"></script>
    <!-- <script src="{{URL::asset('js/app.js')}}"></script> -->
    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>

      <!-- Select 2  multi select-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- <script src="{{URL::asset('assets/js/date.js')}}"></script> -->
    
    

    <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#editor2' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#editor3' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#editor4' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#editor5' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
</body>

</html>