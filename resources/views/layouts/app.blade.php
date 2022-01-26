<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI Skripsi</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            @auth
            <li>
                <a href="
                @if((auth()->user()->role) == 'mahasiswa')
                        {{route('dashboard.mahasiswa')}}
                    @elseif((auth()->user()->role) == 'pembimbing')
                        {{route('dashboard.pembimbing')}}
                    @elseif((auth()->user()->role) == 'koordinator')
                        {{route('dashboard.koordinator')}}
                    @endif
                " class="p-3">Dashboard</a>
            </li>
            @if((auth()->user()->role) == 'mahasiswa')
            <li>
                <a href="{{route('daftar.perusahaan')}}" class="p-3">Daftar</a>
            </li>
            <li>
                <a href="{{route('jurnal')}}" class="p-3">Jurnal</a>
            </li>
            <li>
                <a href="{{route('laporan')}}" class="p-3">Laporan</a>
            </li>
            @endif
            @endauth
        </ul>
        <ul class="flex items-center">
            @auth
            <li>
                {{auth()->user()->name}}
            </li>
            <li>
                <form action="{{route('logout')}}" method="post" class="inline p-3">
                    @csrf
                    <button>Logout</button>
                </form>  
            </li>
            @endauth
            @guest
            <li>
                <a href="{{route('login')}}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-3">Register</a>
            </li>
            @endguest
        </ul>
    </nav>
    
    @yield('content')
</body>
</html>