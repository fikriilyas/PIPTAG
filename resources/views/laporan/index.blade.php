@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{route('store.laporan')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="laporan" class="sr-only">Email</label>
                <input type="file" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" id="Laporan" name="laporan" value="{{old('laporan')}}">
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Upload</button>
            </form>
        </div>
    </div>
@endsection