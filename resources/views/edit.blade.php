<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Laravel</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);


    body {
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .navbar-laravel {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
    }

    .navbar-brand, .nav-link, .my-form, .login-form {
        font-family: Raleway, sans-serif;
    }

    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row {
        margin-left: 0;
        margin-right: 0;
    }
</style>
<body>


<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sửa thông tin nhân viên</div>
                    <div class="card-body">
                        <form name="my-form" onsubmit="return validform()" action="{{route('staff.edit')}}"
                              method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$staff->id}}">
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">Họ và tên</label>
                                <div class="col-md-6">
                                    <input type="text" id="full_name" class="form-control" name="name" value="{{$staff->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user_name" class="col-md-4 col-form-label text-md-right">Nhóm nhân
                                    viên</label>
                                <div class="col-md-6">
                                    <select id="user_name" class="form-control" name="group">
                                        <option value="Lễ Tân">Lễ Tân</option>
                                        <option value="Dịch Vụ">Dịch Vụ</option>
                                        <option value="Quản Lí Nhân Sự">Quản lí nhân sự</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" value="{{$staff->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Số điện
                                    thoại</label>
                                <div class="col-md-6">
                                    <input type="text" id="phone_number" class="form-control" name="phone" value="{{$staff->phone}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="present_address" class="col-md-4 col-form-label text-md-right">Số
                                    CMND</label>
                                <div class="col-md-6">
                                    <input type="text" id="present_address" class="form-control" name="ID_number" value="{{$staff->ID_number}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Ngày
                                    sinh</label>
                                <div class="col-md-6">
                                    <input type="date" id="permanent_address" class="form-control" name="dob" value="{{$staff->dob}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Giới tính</label>
                                <div class="col-md-6">
                                    <select id="gender" class="form-control" name="gender">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nid_number" class="col-md-4 col-form-label text-md-right">Địa chỉ</label>
                                <div class="col-md-6">
                                    <input type="text" id="nid_number" class="form-control" name="address" value="{{$staff->address}}">
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Sửa
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
{{--<script>--}}
{{--    function validform() {--}}

{{--        var a = document.forms["my-form"]["full-name"].value;--}}
{{--        var b = document.forms["my-form"]["email-address"].value;--}}
{{--        var c = document.forms["my-form"]["username"].value;--}}
{{--        var d = document.forms["my-form"]["permanent-address"].value;--}}
{{--        var e = document.forms["my-form"]["nid-number"].value;--}}

{{--        if (a==null || a=="")--}}
{{--        {--}}
{{--            alert("Please Enter Your Full Name");--}}
{{--            return false;--}}
{{--        }else if (b==null || b=="")--}}
{{--        {--}}
{{--            alert("Please Enter Your Email Address");--}}
{{--            return false;--}}
{{--        }else if (c==null || c=="")--}}
{{--        {--}}
{{--            alert("Please Enter Your Username");--}}
{{--            return false;--}}
{{--        }else if (d==null || d=="")--}}
{{--        {--}}
{{--            alert("Please Enter Your Permanent Address");--}}
{{--            return false;--}}
{{--        }else if (e==null || e=="")--}}
{{--        {--}}
{{--            alert("Please Enter Your NID Number");--}}
{{--            return false;--}}
{{--        }--}}

{{--    }--}}
{{--</script>--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
