<!-- Page Content -->

@extends('blog_theme.main')
@section('content')
        <!-- Post Content Column -->
        <div class="col-lg-8">
            @foreach($posts as $post)
                <div class="col-md-12">
                    <h2>{{$post->title}}</h2>


                    <p>{{str_limit($post->post, 200)}}</p>
                    <p><a href="/post/{{$post->id}}" class="btn btn-primary">Read More</a></p>
                </div>
            @endforeach
                <div class="pager my-5">
                {{$posts->links()}}
                </div>
        </div>


@endsection
