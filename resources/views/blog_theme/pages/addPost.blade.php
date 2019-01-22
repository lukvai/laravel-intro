@extends('blog_theme.main')
@section('content')

<div class="col-md-8 mt-4">
    <form method="post" action="/store">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="ID" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <textarea name="post" id="post" cols="30" rows="10" class="form-control col-md-12" placeholder="Your Post Here"></textarea>
        </div>
            <button type="submit" class="btn btn primary">Post</button>
    </form>
</div>

@endsection