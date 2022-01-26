@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 mb-6 bg-white p-6 rounded-lg">
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
                <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received {{ $user->receivedLikes->count() }} likes</p>
            </div>
            @if ($jurnals->count())
                @foreach ($jurnals as $jurnal)
                    <div class='mb-4'>
                        <a href="" class="font-bold">{{$jurnal->user->name}}</a> <span class="text-gray-600 text-sm">Hari ke: {{$jurnal->day}}</span>
                        <p class="mb-2">{{$jurnal->jurnal}}</p>
                        <div>

                        </div>
                    </div>
                    
                @endforeach
                {{$jurnals->links()}}
            @else
            <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection