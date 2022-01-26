@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
          <h3 class="font-semibold text-lg">Dashboard Koordinator</h3>
        </div>
      </div>
    </div>
    </div>
    <div class="m-2">
      <form action="{{route('insight.angkatan')}}">
        <p>Pilih berdasarkan angkatan</p>
        <select name="angkatan" id="angkatan" class="bg-gray-100 border-2 p-4 rounded-lg">
          <option value="">Angkatan</option>
          @foreach ($angkatan as $akt)
              <option value="{{$akt}}">{{$akt}}</option>
          @endforeach
        </select> 
        <button type="submit">Cari</button>
      </form>
    </div>

    <div>
    <div class="block w-full overflow-x-auto">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-centre bg-gray-200 border-gray-200">Terdaftar</th>
            <th class="px-6 align-middle border border-solid py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-centre bg-gray-200 border-gray-200">Diterima Perusahaan</th>
            <th class="px-6 align-middle border border-solid py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-centre bg-gray-200 border-gray-200">Selesai Melaksanakan PI</th>
            <th class="px-6 align-middle border border-solid py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-centre bg-gray-200 border-gray-200">Selesai Praktik Industri</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-center">
              <a href="
              @if(isset($mhs->nim))
                {{route('detail.mahasiswa',$mhs->nim)}}
              @endif">{{$total_mahasiswa}}</a></td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-center">{{$mahasiswa_terdaftar}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-center">{{$mahasiswa_melaksanakan_pi}}</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-center">{{$mahasiswa_selesai_laporan}}</td>
        </tr>
        </tbody>
      </table>
    </div>
        </div>
    </div>
@endsection