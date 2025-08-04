<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Freight Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font: Poppins & Oswald --}}
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- FontAwesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            background-color: #f5f5f5;
        }

        .login-wrapper {
            display: flex;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .left-panel {
            flex: 1;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
            box-shadow: inset -1px 0 0 rgba(0,0,0,0.1);
            border-right: 4px solid #5A2738;
            box-shadow: 4px 0 10px rgba(90, 39, 56, 0.1);
        }

        .left-panel img.logo {
            width: 140px;
            margin-bottom: 40px;
            border-left: 4px solid #5A2738;
            padding-left: 12px;
        }

        .left-panel h2 {
            font-weight: bold;
            text-align: center;
        }

        .left-panel p {
            text-align: center;
        }

        .left-panel form {
            border: 2px solid #5A2738;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(90, 39, 56, 0.1);
        }

        .left-panel input.form-control {
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 1rem;
            border: 2px solid #ccc;
            transition: border-color 0.3s ease;
        }

        .left-panel input.form-control:focus {
            border-color: #5A2738;
            box-shadow: 0 0 5px rgba(90, 39, 56, 0.4);
        }

        .left-panel label {
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
        }

        .left-panel .btn-login {
            background-color: #f15b5b;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
        }

        .right-panel {
            flex: 1;
            background: url('/images/gambar-login.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            position: relative;
        }

        .right-panel::after {
            content: "";
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .right-panel::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(90, 39, 56, 0.63);
            z-index: 1;
        }

        .right-panel-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: left;
            padding: 35px;
            line-height: 1.2;
            margin-top: -125px;
        }

        .right-panel h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 2.9rem;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 1.5;
            letter-spacing: 8px;
            margin: 0 0 20px 0;
        }

        .footer-credit {
            position: absolute;
            bottom: 10px;
            right: 20px;
            color: #ccc;
            font-size: 12px;
            z-index: 2;
        }

        .forgot-link {
            color: #5A2738;
            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="left-panel">
            <img src="{{ asset('images/keysoftware-logo.png') }}" class="logo" alt="KeySoft Logo">
            <h2>SIGN IN</h2>
            <p>Welcome back! Please enter your details.</p>

            <form method="GET" action="{{ route('dashboard') }}">

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="**********" required>
                </div>

                <div class="mb-3 text-end">
                    <small>Forgot password? <a href="#" class="forgot-link">Click here</a></small>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-login text-white">Sign in</button>
                </div>
            </form>
        </div>


        


        <div class="right-panel">
            <div class="right-panel-content">
                <h1>Freight<br>Management<br>System</h1>
            </div>
            <div class="footer-credit">
                Keysoft ERP Online © {{ date('Y') }}
            </div>
        </div>
    </div>
</body>
</html>
