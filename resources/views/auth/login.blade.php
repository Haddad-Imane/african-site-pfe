<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #5a3e1b;
        }
        .navbar {
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-dark .navbar-nav{
            color: #5a3e1b;
            font-weight: bold;
            font-size: 16px;
            margin-right: 20px;
        }
        .navbar-brand img {
            height: 70px;
        }
        .header-item {
            list-style: none;
            display: inline;
            margin-right: 10px;
        }
        .header-item a {
            text-decoration: none;
            color: #5a3e1b;
            font-weight: bold;
            font-size: 14px;
        }



        .login-container {
            max-width: 400px;
            margin-top: 50px;
        }
        .login-title {
            font-weight: bold;
            font-size: 1.5rem;
            color: #c3803b;
            border-bottom: 2px solid #c3803b;
            padding-bottom: 5px;
            display: inline-block;
        }
        .btn-custom {
            background-color: #c3803b;
            color: white;
            font-weight: bold;
            width: 50%;
        }
        .btn-custom:hover {
            background-color: #a0672e;
        }
        .forgot-password {
            color: #1a1a1a;
            padding: 15px;
            font-size: 0.9rem;
        }
        .signup-link {
            color: #f4731f;
            font-weight: bold;
            text-decoration: none;
        }
        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}">
        </a>
        <div class="d-flex align-items-center">
            <ul class="navbar-nav ms-auto">
                <li class="header-item">
                    <select>
                        <option>USD</option>
                        <option>MAD</option>
                    </select>
                </li>
                <li class="header-item">
                    <a href="#"><i class="fas fa-search"></i> Search</a>
                </li>
                <li class="header-item">
                    <a href="#"><i class="fas fa-cart-shopping"></i> Items</a>
                </li>
                <li class="header-item">
                    <a href="login"><i class="fas fa-user"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="textiles">TEXTILES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BEADS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">RARE FINDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WORLD KITCHEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BLOCKS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <!-- Login Form Positioned on the Left -->
        <div class="col-md-4 login-container">
            <h2 class="login-title">Customer Login</h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Your@email.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <button type="submit" class="btn btn-custom">SUBMIT</button>
                    <a href="register" class="forgot-password">Forgot your password?</a>
                </div>
            </form>

            <hr>

            <p>
                New customer? <a href="register" class="signup-link">Sign up for an account</a>
            </p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
