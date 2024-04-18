<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT - intelliinfo</title>
    <link rel="icon" href="{{URL::asset('assets/images/favicon.png')}}" type="image/x-icon">
    <!-- <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/> -->




    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"
        integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <section class="login_sec d-flex align-items-center p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                    <div class="row">
                        <div
                            class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center first_col">
                            <img src="{{URL::asset('/assets/images/logo.png')}}" width="70%" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-4  col-md-6 col-sm-12 p-0 ">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <form id="login_form">
                                        <div class="row ">
                                            <div class="card login_card px-4 py-3">
                                                <h4 class="pt-5 text-center">Login</h4>
                                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                                    <div class="input-group mt-3">
                                                        <span class="text-white">User Name</span>
                                                        <input type="text" placeholder="User Name" class="user_name"
                                                            id="user_name" name="user_name" autocomplete="off">
                                                    </div>

                                                    <div class="input-group mt-3">
                                                        <span class="text-white">Password</span>
                                                        <input type="password" placeholder="Password" class="password"
                                                            id="password" name="password" autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mt-2">
                                                    <div class="form-outline ">
                                                        <div class="error_msg text-center" style="display:none;color:#ff0000;">
                                                        </div>
                                                        <div class="success_msg text-center " style="display:none;color:#ffffff;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center mt-4">
                                                    <button type="submit" class="login_btn mb-5" style="width:100%;">Sign In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- <section class="login_sec p-0 d-flex align-items-center">
        <div class="container-fluid">
            <div class="row main_row">
                <div class="col-lg-5 col-md-6 col-sm-12  d-flex align-items-center justify-content-center left_col">
                    <img src="{{URL::asset('/assets/images/Cincyr Logo_Last.png')}}" width="50%" alt="">
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 d-flex align-items-center justify-content-center   pt-3">
                    
                    <form id="login_form">
                        <div class="card login_card ">
                            <h4 class="pt-5 text-center">Login</h4>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="input-group mt-3">
                                    <span class="text-white">User Name</span>
                                    <input type="text" placeholder="User Name" class="user_name" id="user_name"
                                        name="user_name" autocomplete="off">
                                </div>

                                <div class="input-group mt-3">
                                    <span class="text-white">Password</span>
                                    <input type="password" placeholder="Password" class="password" id="password"
                                        name="password" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <div class="form-outline ">
                                    <div class="error_msg text-center" style="display:none;color:red;">
                                    </div>
                                    <div class="success_msg text-center " style="display:none;color:green;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="login_btn mb-5" style="width:100%;">Sign
                                    In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

<script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



<script>
AOS.init();
</script>
<script>
$("#login_form").validate({
    ignore: [],
    rules: {
        user_name: {
            required: true,
        },
        password: {
            required: true,
            passwordValidate: 'password',
        }
    },
    messages: {
        user_name: {
            required: "Please enter the username",
        },
        password: {
            required: "Please enter the password",
            passwordValidate: 'Password must contain at least one digit and one uppercase and lowercase letter, and at least 8 characters'
        }
    },
    submitHandler: function(form) {
        console.log($(form).serialize());
        $.ajax({
            type: "POST",
            url: "validate-log-in",
            data: $(form).serialize(),

            success: function(result) {
                if (result == 2) {
                    $('.success_msg').css({
                        'display': 'block'
                    });
                    $('.success_msg').text('Log In Has Successful ');
                    setTimeout(() => {
                        $('.success_msg').css({
                            'display': 'none'
                        });
                        window.location.href = document.location.origin +
                            '/jobs';
                    }, 3000);
                } else if (result == 3) {
                    $('.error_msg').css({
                        'display': 'block'
                    });
                    $('.error_msg').text('Incorrect credentials .');
                    setTimeout(() => {
                        $('.error_msg').css({
                            'display': 'none'
                        });

                    }, 3000);
                } else {
                    $('.error_msg').css({
                        'display': 'block'
                    });
                    $('.error_msg').text('some thing went wrong');
                    setTimeout(() => {
                        $('.error_msg').css({
                            'display': 'none'
                        });
                    }, 3000);
                    return false;
                }
            }
        });
        return false; // required to block normal submit since you used ajax
    }
});


$.validator.addMethod(
    "passwordValidate",
    function(value, element, param) {
        if (this.optional(element)) {
            return true;
        } else if (!/[A-Z]/.test(value)) {
            return false;
        } else if (!/[a-z]/.test(value)) {
            return false;
        } else if (!/[0-9]/.test(value)) {
            return false;
        } else if (!/[~!@#$%^&*()-_+={}[|\;:"<>,./?]/.test(value)) {
            return false;
        } else if (value.length < 8) {
            return false;
        }
        return true;
    },
);
</script>


</html>