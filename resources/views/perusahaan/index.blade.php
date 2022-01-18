@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{route('tambah.perusahaan')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nama" class="sr-only">Nama Perusahaan</label>
                <input type="text" class="bg-gray-100 border-3 w-full p-4 rounded-lg" placeholder="Nama Perusahaan" id="nama" name="nama" value="{{old('name')}}">
                @error('nama')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="sr-only">Deskripsi Perusahaan</label>
                <input type="text" class="bg-gray-100 border-3 w-full p-4 rounded-lg" placeholder="Deskripsi" id="deskripsi" name="deskripsi" value="{{old('deskripsi')}}">
                @error('deskripsi')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="alamat" class="sr-only">Alamat Perusahaan</label>
                <input type="text" class="bg-gray-100 border-3 w-full p-4 rounded-lg" placeholder="Alamat" id="alamat" name="alamat" value="{{old('alamat')}}">
                @error('deskripsi')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </form>
        </div>
    </div>
@endsection