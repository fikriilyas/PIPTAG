@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 mb-6 bg-white p-6 rounded-lg">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
          <h3 class="font-semibold text-lg"><h1>{{$mhs->name}}</h1><span>{{$mhs->nim}}</span></h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto mb-6">
      <table class="items-center w-full bg-transparent border-collapse">
        <tr>
            <td class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200">email</th>
            <td class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200">{{$mhs->email}}</th>
        </tr>
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">Progress</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">{{$mhs->state}}</td>
        </tr>
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">Perusahaan</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                @if(count($perusahaan)==0)
                    Belum daftar
                @elseif (count($perusahaan)==1)
                    {{$perusahaan[0]->perusahaan->nama}}
                @endif
            </td>
        </tr>
        <tr>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">Laporan</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4"><a href="{{$mhs->laporan_url}}">
            @if(($mhs->laporan_url)==null)
                Belum Tersedia
            @elseif ($mhs->laporan_url)
                Download
            @endif
            </a></td>
        </tr>
      </table>
    </div>
</div>
<h1 class="px-6 align-middle border border-solid py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-gray-200 border-gray-200 mb-5">Jurnal</h1>
            <div>
            @if ($jurnals->count())
                @foreach ($jurnals as $jurnal)
                    <div class='mb-4'>
                        <a href="" class="font-bold">{{$jurnal->user->name}}</a> <span class="text-gray-600 text-sm">Hari ke: {{$jurnal->day}}</span>
                        <p class="mb-2">{{$jurnal->jurnal}}</p>
                        <div>

                        </div>
                    </div>
                    
                @endforeach
            @endif
        </div>
    </div>
@endsection