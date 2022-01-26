@extends('layouts.app')

@section('content')
<section class="relative bg-gray-200">
<div class="w-full mb-12 px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
          <h3 class="font-semibold text-lg">Daftar Perusahaan</h3>
        </div>
        <a type="submit" href="{{route('tambah.perusahaan')}}"class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Submit Perusahaan</a>
      </div>
    </div>
    <div class="block w-full overflow-x-auto">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200  border-gray-200">Perusahaan</th>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200  border-gray-200">Deskripsi</th>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200  border-gray-200">Alamat</th>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200  border-gray-200">Detail</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($perusahaans as $perusahaan)
        <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 flex items-center">
                <span class="ml-3 font-bold "> {{$perusahaan->nama}}</span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{ Str::words("$perusahaan->deskripsi", 8, ' ...')}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
            {{$perusahaan->alamat}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
             <a href="{{route('perusahaan.show',$perusahaan->id)}}">Daftar</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      
    </div>
    
  </div>
</div>
</section>
@endsection