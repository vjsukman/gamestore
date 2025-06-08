<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Gamestore | Register</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
            z-index: -1;
        }

        /* Navbar Styles (simplified for auth pages) */
        .custom-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin: 20px auto;
            padding: 15px 25px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1000;
        }

        .custom-navbar:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand img {
            transition: transform 0.3s ease;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img:hover {
            transform: scale(1.05) rotate(5deg);
        }

        /* Form Container Styles */
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 30px;
            margin: 30px auto;
            transition: all 0.3s ease;
            position: relative;
            z-index: 100;
            max-width: 450px;
            /* Limit form width */
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .form-floating .form-control {
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(102, 126, 234, 0.2);
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .form-floating .form-control:focus {
            background: rgba(255, 255, 255, 1);
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .form-floating label {
            color: #4a5568;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a67d8, #6b46c1);
        }

        .btn-secondary {
            background: rgba(108, 117, 125, 0.8);
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.3);
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(108, 117, 125, 0.4);
            background: rgba(87, 96, 105, 0.9);
        }

        /* Footer */
        .custom-footer {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 15px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 100;
        }

        .custom-footer span {
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .custom-navbar {
                margin: 10px;
                padding: 15px;
            }

            .form-container {
                margin: 20px 10px;
                padding: 20px;
            }
        }

        /* Animation for page load */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .custom-navbar,
        .form-container,
        .custom-footer {
            animation: fadeInUp 0.6s ease-out;
        }

        .form-container {
            animation-delay: 0.2s;
        }

        .custom-footer {
            animation-delay: 0.4s;
        }
    </style>
</head>

<body>
    {{-- Header/Navbar (simplified) --}}
    <div class="container">
        <nav class="custom-navbar d-flex flex-wrap align-items-center justify-content-center">
            <a class="navbar-brand" href="{{ route('landing_page') }}">
                <img src="{{ asset('storage/images/gamestore_logo.jpeg') }}" width="60" height="60"
                    alt="Gamestore">
            </a>
        </nav>
    </div>

    {{-- Registration form --}}
    <div class="container d-flex justify-content-center">
        <div class="form-container">
            <main class="form-signin w-100 m-auto">
                <form action="{{ route('register_logic') }}" method="POST" class="flex-wrap">
                    @csrf

                    <h1 class="h3 mb-3 fw-normal text-center">Register A New Account</h1>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="text"
                            value="{{ old('name') }}" placeholder="Your Name" name="name">
                        <label for="floatingInput">Full name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" id="email" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Input Your Password" name="password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror"
                            id="confirmPassword" placeholder="Confirm Your Password" name="confirmPassword">
                        <label for="floatingPassword">Confirm Password</label>
                        @error('confirmPassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"
                                value="Male" name="gender" id="genderMale">
                            <label class="form-check-label" for="genderMale">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"
                                value="Female" name="gender" id="genderFemale">
                            <label class="form-check-label" for="genderFemale">
                                Female
                            </label>
                        </div>
                        @error('gender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            name="date_of_birth" value="{{ old('date_of_birth') }}" id="">
                        @error('date_of_birth')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn btn-lg btn-primary mt-3" type="submit" style="width: 100%;">Register
                        Account</button>

                    <a href="{{ route('landing_page') }}" class="btn btn-lg btn-secondary mt-3"
                        style="width: 100%;">Back
                        to Landing Page</a>

                    <p class="mt-3 mb-1 text-muted text-center">Already have an account?</p>
                    <a href="{{ route('login_page') }}" class="text-center d-block">Login Here</a>
                </form>
            </main>
        </div>
    </div>

    {{-- Footer --}}
    <div class="container">
        <footer class="custom-footer d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-md-4 d-flex align-items-center">
                <span>© 2023 Gamestore</span>
            </div>
            <div class="col-md-4 text-end">
                <span>Made with ❤️ for better gaming experience</span>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
