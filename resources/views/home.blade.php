@extends("layouts.main-layout")

@section("pageName")
Laravel DC Comics
@endsection

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
                    <div class="comic-buttons">
                        <a class="edit" href="{{route('edit', $comic -> id)}}">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>EDIT</span>
                        </a>

                        <a class="delete" href="">
                            <span>DELETE</span>
                            <i class="fa-solid fa-delete-left"></i>
                        </a>
                    </div>
                    <a href="{{ route('show', $comic -> id)}}" class="title">
                        <img src="{{ $comic -> thumb }}" alt="">
                        {{ $comic -> title }}
                    </a>
                </div>
            @endforeach
        </div>

    </div>

@endsection
