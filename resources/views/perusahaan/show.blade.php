@extends('layouts.app')

@section('content')
@auth
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1>{{$company->nama}}</h1>
            <p>{{$company->deskripsi}}</p>
            <form action="{{route('perusahaan.daftar',$company)}}" method="post" class="mt-6">
            @csrf
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Daftar PI</button>
            </form>
        </div>
    </div>
@endauth
@endsection