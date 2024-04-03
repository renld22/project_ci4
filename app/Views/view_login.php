<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bootstrap Example</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        }

        .login-heading {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-floating {
            margin-bottom: 15px;
        }

        .form-floating input {
            border-radius: 5px;
            padding: 10px;
        }

        .login-btn {
            border-radius: 5px;
            padding: 10px 0;
        }

        .login-btn:hover {
            background-color: #007bff;
        }

        .login-link {
            text-decoration: none;
            color: #007bff;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <h2 class="login-heading">Silahkan Login terlebih dahulu</h2>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>

            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <div class="form-floating">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
            </div>

            <div class="form-floating">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary login-btn" type="submit">Login</button>
        </form>

        <div class="text-center mt-3">
            <a href="<?= base_url(); ?>register" class="login-link">sudah punya akun belum ?</a>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-V2mPcX0jPOtn7OW3OrQvYC0sHHRQ6ZzjJ/CpVKZUCF94jzqy5I5zvhfRbFkXfVW/" crossorigin="anonymous"></script>
</body>
</html>
