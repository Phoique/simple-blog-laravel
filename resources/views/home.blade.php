@extends('layouts.layout')
@section('title', 'Anasayfa')
@section('content')
@section('headerTitle', 'Laravel Blog')
@section('headerSub', 'Laravel ile kodlanmıştır.')
<div class="row">
    @foreach($posts as $post)
        <div class="col-md-12 col-lg-6">
            <div class="post-preview">
                <a href="/post/{{ $post -> slug }}">
                    <h2 class="post-title">{{ $post -> title }}</h2>
                    <h3 class="post-subtitle">{{ $post -> sub_title }}</h3>
                </a>
                <p class="post-meta">Yazar: &nbsp;{{ $post -> getUser -> username }}</p>
            </div>
            <hr>
        </div>
    @endforeach
</div>
@endsection