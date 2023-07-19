@extends("layouts.main-layout")

@section("content")
    <div class="container py-3">
        <h1><strong>{{ $comic -> title }}</strong></h1>

        <div class="row py-5">

            <div class="col-3 my-3">
                <img src="{{ $comic -> thumb }}" alt="">
            </div>

            <div class="col-9">
                <h4 class="text-dark"><strong>Price:</strong> <span class="text-light">{{ $comic -> price }}</span></h4>
                <h4 class="text-dark"><strong>Series:</strong> <span class="text-light">{{ $comic -> series }}</span></h4>
                <h4 class="text-dark"><strong>Type:</strong> <span class="text-light">{{ $comic -> type }}</span></h4>
                <h4 class="text-dark"><strong>Description:</strong> <span class="text-light">{{ $comic -> description }}</span></h4>
                <h4 class="text-dark"><strong>Sale Date:</strong> <span class="text-light">{{ $comic -> sale_date }}</span></h4>
            </div>

        </div>

    </div>

@endsection
