@extends("layouts.main-layout")

@section("content")
    <div class="container py-3">

        <div  class="create_comic">
            <a href="{{route('create')}}">
                <h3><strong>CREATE YOUR COMIC +</strong></h3>
            </a>
        </div>

        <h1><strong>COMICS AVAILABLE</strong></h1>

        <div class="row py-5">
            @foreach ($comics as $comic)
                <div class="col-2 my-3">
                    <a href="{{ route('show', $comic -> id)}}" class="title">
                        <img src="{{ $comic -> thumb }}" alt="">
                        {{ $comic -> title }}
                    </a>
                </div>
            @endforeach
        </div>

    </div>

@endsection
