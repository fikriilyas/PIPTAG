@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1>{{$company->nama}}</h1>
            <p>{{$company->deskripsi}}</p>
        </div>

        @auth
            <form action="{{route('perusahaan.daftar',$company)}}" method="post" class="mr-1">
                @csrf
                <button type="submit" class="text-blue-500">Daftar</button>
            </form>
         @endauth
        <form action="" method="post">Daftar</form>
    </div>
@endsection