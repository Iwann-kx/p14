<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('sbadmin2/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for authentication pages-->
    <link href="<?php echo e(asset('sbadmin2/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-container {
            width: 100%;
            max-width: 500px;
            padding: 15px;
        }

        .auth-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .auth-card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-bottom: none;
        }

        .auth-card-header h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }

        .auth-card-header p {
            margin: 10px 0 0 0;
            font-size: 14px;
            opacity: 0.9;
        }

        .auth-card-body {
            padding: 30px;
            background: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            display: block;
            font-size: 14px;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-check {
            margin-bottom: 15px;
        }

        .form-check-label {
            font-size: 14px;
            color: #666;
        }

        .btn-login {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 15px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
            color: white;
        }

        .auth-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .auth-links a {
            color: #667eea;
            text-decoration: none;
            transition: color 0.3s;
        }

        .auth-links a:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .auth-footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 14px;
            color: #666;
        }

        .auth-footer a {
            color: #667eea;
            text-decoration: none;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .invalid-feedback {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }

        .is-invalid {
            border-color: #e74c3c !important;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-section i {
            font-size: 40px;
            color: #667eea;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('sbadmin2/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\web-item\resources\views/layouts/auth.blade.php ENDPATH**/ ?>