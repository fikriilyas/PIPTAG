@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="bg-gray-100 border-3 w-full p-4 rounded-lg" placeholder="Your name" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Email" id="email" name="email" value="{{old('email')}}">
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nim" class="sr-only">NIM</label>
                <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="NIM" id="nim" name="nim" value="{{old('nim')}}">
                @error('nim')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="angkatan" class="sr-only">angkatan</label>
                <input type="text" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Angkatan (Contoh: 2018)" id="angkatan" name="angkatan" value="{{old('angkatan')}}">
                @error('angkatan')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="role" class="sr-only">Role</label>
                <select name="role" id="role" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                    <option value="">Role</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="pembimbing">Pembimbing PI</option>
                    <option value="koordinator">Koordinator PI</option>
                </select>
                @error('role')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="pembimbing" class="sr-only">Pembimbing</label>
                <select name="pembimbing" id="role" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                    <option value="">Pembimbing</option>
                    @foreach ($pembimbings as $pembimbing)
                        <option value="{{$pembimbing->id}}">{{$pembimbing->name}}</option>
                    @endforeach
                </select>
                @error('pembimbing')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" placeholder="Password" id="password" name="password" value="">
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password</label>
                <input type="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" placeholder="Repeat your password" id="password_confirmation" name="password_confirmation" value="">
                @error('password_confirmation')
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