<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="nk-block-head-content" style="text-align: center; padding: 20px;">
        <h4>Click the button below to reset your password</h4>
        <!-- Ensure you generate the URL dynamically to include the reset token -->
        <a href="{{url('password/reset/'.$token)}}" class="btn btn-primary nk-block-title">Reset Password</a>
        <p class="nk-block-des text-success">You will be redirected to a secure page to choose a new password.</p>
    </div>
</body>
</html>