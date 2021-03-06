@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br />
        @endif
        <form method="POST" action="{{ route('post.update', $post->id) }}">
            @method('PATCH')
            {{ csrf_field() }}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="usr">Title:</label>
                        <input type="text" class="form-control" name="title" required value="{{ $post->title }}">
                    </div>

                    <div class="form-group">
                        <label for="usr">Description:</label>
                        <input type="text" class="form-control" name="description" value="{{ $post->description }}">
                    </div>
                    <div class="form-group">
                        <label for="usr">Keywords:</label>
                        <input type="text" class="form-control" name="keywords" value="{{ $post->keywords }}">
                    </div>
                    <div class="form-group">
                        <label for="usr">Content:</label>
                        <textarea id="summernote" class="form-control" name="content">{{ $post->content }}</textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="clear">Clear</button>
                </div>
        </form>
    </div>
@endsection
