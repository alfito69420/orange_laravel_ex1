@extends('layouts.orange')

@section('main_content')
    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h1>Post #{{ $post->post_nmb }}</h1>

                    <div class="col-sm-6">
                        <div class="slider-zoom">
                            <a href="assets/img/meats.jpg" class="cloud-zoom"
                                rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10"
                                id="cloudZoom">
                                <img alt="Detail Zoom thumbs image" src="{{ $post->image }}" style="width: 100%;">
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6">

                    <h1>{{ $post->title }}</h1>
                    <h2>{{ $post->category }}</h2>
                    <h3>{{ $post->author }}</h3>
                    <p>
                        <strong>Resumen</strong><br>
                        {{ $post->content }}
                    </p>


                </div>
            </div>
        </div>
    </div>
@endsection
