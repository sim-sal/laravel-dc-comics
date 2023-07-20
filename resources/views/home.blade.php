@extends("layouts.main-layout")

@section("pageName")
Laravel DC Comics
@endsection

@section("content")
    <div class="container py-3">

        <h1><strong>COMICS AVAILABLE</strong></h1>

        <div class="row py-5">
            @foreach ($comics as $comic)
                <div class="col-2 my-3">
                    <div class="comic-buttons">

                        <a class="edit" href="{{route('edit', $comic -> id)}}">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <span>EDIT</span>
                        </a>

                        <form action="{{route('delete', $comic -> id)}}" method="POST" onclick="return window.confirm('Do you really want to delete this Comic?')">

                            @csrf
                            @method("DELETE")

                            <span class="icon-input-btn">
                                <input type="submit" class="btn btn-danger btn-sm my-1" value="DELETE">
                            </span>

                        </form>

                    </div>

                    <a href="{{ route('show', $comic -> id)}}" class="title">
                        <img src="{{ $comic -> thumb }}" alt="">
                        {{ $comic -> title }}
                    </a>

                </div>
            @endforeach

            <div  class="create_comic">
                <a href="{{route('create')}}">
                    <h3><strong><i class="fa-solid fa-circle-plus"></i> CREATE YOUR COMIC BOOK</strong></h3>
                </a>
            </div>
        </div>

    </div>

@endsection
