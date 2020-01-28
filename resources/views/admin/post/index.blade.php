@extends('layouts.adminmenu')

@section('content')
    <div class="container">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <a href="{{ route('post.create') }}" class="btn btn-primary">Create</a>
        <b>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Keywords</th>
{{--                <th scope="col">Content</th>--}}
                <th scope="col" colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->keywords }}</td>
{{--                    <td>{{ Illuminate\Support\Str::limit($post->content, 100) }}</td>--}}
                    <td><a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">View</a></td>
                    <td><a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Edit</a></td>
                    <td><form id="deleteform" action="{{ route('post.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" data-toggle="confirmation">Delete</button>
                        </form>
                    </td>
                </tr>
                </tbody>
            @empty
                    <p>No any posts</p>
            @endforelse
        </table>
    </div>
@endsection
