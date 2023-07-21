<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration using bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">
    
   <div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 bg-white m-auto rounded-top wrapper">
            <h2 class="text-center pt-3">Signup now</h2>
            <p class="text-center text-muted lead">Its Free and takes a minute</p>
<form action="{{url('/')}}/register" method="post">
@csrf
    <div class="input-group mb-3">
        <span class="input-group-text">
        <i class="fa fa-user"></i></span>
        <input type="text" name="name" class="form-control" placeholder="Username">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">
        <i class="fa fa-user"></i></span>
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">
        <i class="fa fa-envelope"></i></span>
        <input type="password" name="pass" class="form-control" placeholder="Password">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">
        <i class="fa fa-lock"></i></span>
        <input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">
        <i class="fa fa-lock"></i></span>
        <input type="text" name="pan" class="form-control" placeholder="PAN">
    </div>

    <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-success"> Signup Now</button>
        <p class="text-center text-muted mt-2">When you Register by clicking the Signup button, you agree to our <a href="#">Terms and conditions</a> and <a href="#">Privacy Policy</a></p>
    <p class="text-center">
        Already have an account ? <a href="login.html">Login here</a>
    </p>
    </div>

</form>

        </div>
    </div>
   </div>

</body>
</html>