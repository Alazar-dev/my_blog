@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blogs" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ucfirst($post->title)}}</h1>
                <p>{!! $post->body !!}</p>
                <hr>
                <a href="/blog/{{$post->id}}/edit" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete POST</button>
                </form>
            </div>
        </div>
    </div>
