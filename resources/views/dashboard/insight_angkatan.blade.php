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
            <th class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200">Progress</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($angkatan as $akt)
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$akt->name}}</th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$akt->state}}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
        </div>
    </div>
@endsection