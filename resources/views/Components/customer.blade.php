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
    <title>@yield('title')</title>

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

        /* Navbar Styles */
        .custom-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin: 20px auto;
            padding: 15px 25px;
            transition: all 0.3s ease;
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

        .nav-link {
            color: #4a5568 !important;
            font-weight: 500;
            padding: 10px 20px !important;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            color: #667eea !important;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.2);
        }

        /* Search Bar Styles */
        .search-container {
            position: relative;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid rgba(102, 126, 234, 0.2);
            border-radius: 25px;
            padding: 12px 20px;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 1);
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25), 0 8px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(-1px);
        }

        /* Dropdown Styles */
        .dropdown-toggle {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white !important;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .dropdown-toggle:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            background: linear-gradient(135deg, #5a67d8, #6b46c1);
        }

        .dropdown-menu {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-top: 10px;
        }

        .dropdown-item {
            border-radius: 10px;
            padding: 10px 15px;
            transition: all 0.3s ease;
            color: #4a5568;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            color: #667eea;
            transform: translateX(5px);
        }

        /* Content Area */
        .content-wrapper {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 30px;
            margin: 30px auto;
            transition: all 0.3s ease;
        }

        .content-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        /* Footer */
        .custom-footer {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 15px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
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

            .form-control {
                width: 100% !important;
                margin: 10px 0;
            }

            .content-wrapper {
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
        .content-wrapper,
        .custom-footer {
            animation: fadeInUp 0.6s ease-out;
        }

        .content-wrapper {
            animation-delay: 0.2s;
        }

        .custom-footer {
            animation-delay: 0.4s;
        }
    </style>
</head>

<body>
    {{-- Header/Navbar --}}
    <div class="container">
        <nav class="custom-navbar d-flex flex-wrap align-items-center justify-content-between">
            <a class="navbar-brand" href="{{ route('home_guest') }}">
                <img src="{{ asset('storage/images/gamestore_logo.jpeg') }}" width="60" height="60"
                    alt="Gamestore">
            </a>



            {{-- <a href="{{ route('profile_customer', ['id' => Auth::user()->id]) }}">
                <i class="bi bi-person me-2"></i>Profile
            </a> --}}

            <div class="d-flex flex-wrap align-items-center gap-3">
                <div class="search-container">
                    <form action="{{ route('search_guest') }}" role="search">
                        @csrf
                        <input type="search" class="form-control" name="search_game_name" style="width: 300px;"
                            placeholder="🔍 Search Game..." aria-label="Search">
                    </form>
                </div>

                <a href="{{ route('cart_view') }}" class="nav-link">
                    <i class="bi bi-cart2 me-2"></i>Cart
                </a>

                <a href= "{{ route('history_index') }}" class="nav-link">
                    <i class="bi bi-clock-history me-2"></i>History
                </a>

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-decoration-none" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle me-2"></i>{{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="{{ route('history_index') }}">
                                <i class="bi bi-clock-history me-2"></i>History
                            </a></li>
                        <li><a class="dropdown-item" href="{{ route('profile_customer', ['id' => Auth::user()->id]) }}">
                                <i class="bi bi-person me-2"></i>Profile
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> --}}
                        <li><a class="dropdown-item" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-left me-2"></i>Sign out
                            </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    {{-- Web Content --}}
    <div class="container">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <div class="container">
        <footer class="custom-footer d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-md-4 d-flex align-items-center">
                <span>© 2023 Gamestore - Customer View</span>
            </div>
            <div class="col-md-4 text-end">
                <span>Made with ❤️ for better gaming experience</span>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
