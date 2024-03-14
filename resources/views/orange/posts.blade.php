@extends('layouts.orange')

@section('main_content')
    {{-- <div class="container">
        @for ($i = 1; $i <= 4; $i++)
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endfor
    </div> --}}

    <style>
        .row-with-margin {
            margin: 40px;
            /* Ajusta este valor según tu preferencia */
        }
    </style>

    <div class="row">
        @php $count = 0; @endphp
        @foreach ($posts as $post)
            @if ($count % 4 == 0)
    </div>
    <div class="row">
        @endif
        <div class="col-md-3">

            <div class="card row-with-margin">
                <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>

                    <a href="{{ route('detail', ['id' => $post->post_nmb]) }}" class="btn btn-primary">Ver Post</a>
                    {{-- <a href="#" class="btn btn-primary">Ver Post</a> --}}


                    {{-- <a href="{{ route('detail', ['id' => $products->id]) }}">{{ $products->name }}</a> --}}
                </div>

            </div>
        </div>
        @php $count++; @endphp
        @endforeach
    </div>
@endsection
