@extends('blog_theme.main')
@section('content')

    <div class="col-lg-8">
            <div class="col-md-12">
                <h2>{{$post->title}}</h2>


                <p>{{$post->post}}</p>
            </div>
    </div>

@endsection