@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
          <h3 class="font-semibold text-lg">Dashboard Pembimbing</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200">Nama</th>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200">NIM</th>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200">Progres</th>
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200">Perusahaan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($mahasiswa as $mhs)
        <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 flex items-center">
              <a href="
              @if(isset($mhs->nim))
              {{route('detail.mahasiswa',$mhs->nim)}}
          @endif
              
              "><span class="ml-3 font-bold "> {{$mhs->name}}</span></a></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$mhs->nim}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$mhs->state}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4"><a href="">
          @if(isset($mhs->pendaftaran->perusahaan))
            {{$mhs->pendaftaran->perusahaan->nama}}
          @endif
            </a></td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
        </div>
    </div>
@endsection