<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hanz Restaurant</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="mt-2">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a href="/"><img style="width: 100px" src="{{ asset('gambar/HanzLG.png') }}" alt=""></a>
                    <ul class="navbar-nav gap-5">

                        @if (session()->has('cart'))
                            <li class="nav-item"> <a href="{{ url('cart') }}" style="text-decoration: none;">Cart (
                                    @php
                                        $count = count(session('cart'));
                                        echo $count;
                                    @endphp
                                ) </a></li>
                        @else
                            <li class="nav-item">Cart</li>
                        @endif

                        

                        @if (session()->missing('idpelanggan'))
                            <li class="nav-item"><a href="{{ url('register') }}" style="text-decoration: none;">Register</a></li>
                            <li class="nav-item"><a href="{{ url('login') }}" style="text-decoration: none;">Login</a></li>
                        @endif

                        
                        @if (session()->has('idpelanggan'))
                            <li class="nav-item"> 
                                {{ session('idpelanggan')['email'] }} 
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('logout') }}" style="text-decoration: none;">Logout</a>
                            </li>
                        @endif
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <ul class="list-group">
                    @foreach ($kategoris as $kategori )
                        <li class="list-group-item"><a href="{{ url('show/'.$kategori->idkategori) }}">{{ $kategori -> kategori }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-10">
                @yield('content')
            </div>

        </div>
        <div class="bg-ligth mt-5">
            <p class="text-center">@HanzRestaurant.com</p>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>