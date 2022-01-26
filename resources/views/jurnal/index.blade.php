@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 mb-6 bg-white p-6 rounded-lg">
            @auth
                <form action="{{ route('jurnal.submit') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="hari" class="sr-only">Hari</label>
                        <input type="text" class="bg-gray-100 border-3 w-full p-4 rounded-lg" placeholder="Hari Ke" id="hari" name="day" value="{{old('day')}}">
                        @error('hari')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="jurnal" class="sr-only">Jurnal</label>
                        <textarea name="jurnal" id="jurnal" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Jurnal Harian"></textarea>

                        @error('jurnal')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>
            @endauth

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