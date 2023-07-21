@extends("layouts.main-layout")

@section('pageName')
CREATE NEW COMIC
@endsection

@section("content")
    <div class="container text-center py-5">

        <h1><strong>CREATE NEW COMIC</strong></h1>

        <div class="form-container">
            <div>
                <form method="POST" action="{{route('store')}}" class="text-center py-5">

                    @csrf

                    <div class="py-3">
                        {{-- <label for="title"><h3><strong>Title</strong></h3></label><br> --}}
                        <input type="text" placeholder="Insert TITLE" name="title">
                    </div>

                    <div class="py-3">
                        {{-- <label for="description"><h3><strong>Description</strong></h3></label><br> --}}
                        {{-- <input type="text" placeholder="Insert DESCRIPTION" name="description"> --}}
                        <textarea name="description" placeholder="Insert DESCRIPTION" cols="30" rows="5"></textarea>
                    </div>

                    <div class="py-3">
                        {{-- <label for="thumb"><h3><strong>Thumb</strong></h3></label><br> --}}
                        <input type="text" placeholder="Insert THUMB URL" name="thumb">
                    </div>

                    <div class="py-3">
                        {{-- <label for="price"><h3><strong>Price</strong></h3></label><br> --}}
                        <input type="text" placeholder="Insert PRICE" name="price">
                    </div>

                    <div class="py-3">
                        {{-- <label for="series"><h3><strong>Series</strong></h3></label><br> --}}
                        <input type="text" placeholder="Insert SERIES" name="series">
                    </div>

                    <div class="py-3">
                        {{-- <label for="sale_date"><h3><strong>Sale date</strong></h3></label><br> --}}
                        <input type="date" name="sale_date">
                    </div>

                    <div class="py-3">
                        {{-- <label for="type"><h3><strong>Type</strong></h3></label><br> --}}
                        <input type="text" placeholder="Insert type" name="type">
                    </div>

                    <input type="submit" value="CREATE" class="mt-3 my-submit">
                </form>
            </div>
        </div>

    </div>
@endsection
