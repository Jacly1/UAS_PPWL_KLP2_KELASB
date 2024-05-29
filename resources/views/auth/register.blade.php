<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login Form</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
        /* Your custom styles here */
        body {
            background-color: #40A2E3;
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
        }

        .background {
            width: 430px;
            height: 520px;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad, #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        input {
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
            color: #ffffff;
        }

        input::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 30px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
            margin-right: 10px;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social i {
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h3>Register Here</h3>

        <label for="name">Name</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="email">Email Address</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        <button type="submit">Register</button>
    </form>

    <!-- JavaScript -->
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>