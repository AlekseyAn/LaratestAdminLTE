@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div clas="row">
        <h1 class="text-center">{!! $post->title !!}</h1>
        <p>{!! $post->content !!}</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row justify-content-center">
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success" role="button">Edit</a>&nbsp;
                    <form id="deleteform" action="{{ route('post.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" data-toggle="confirmation">Delete</button>
                    </form>
                </div>
        </div>
    </div>
@endsection
