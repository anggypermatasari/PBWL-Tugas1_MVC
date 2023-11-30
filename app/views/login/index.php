<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e6e6fa;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 40px;
            padding: 20px;
            border: 1px solid #d1d1d1;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-family: "Open Sans", sans-serif;
            color: #a52a2a;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #0056b3;
            border: none;
        }

        .btn-ptimary:hover {
            background-color: #0056b3;
        }

        p.text-center {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>LOGIN</h1>
        <hr>
        <form action="<?= URL; ?>/login/proses" method="POST">
            <div class="mb-3">
                <label for="user_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="user_email" name="user_email" autofocus required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="user_password" name="user_password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>