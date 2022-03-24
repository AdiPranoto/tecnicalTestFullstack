
@extends('layout.main')
@section('container')
    @foreach ($post as $pos)
        <article class="mb-5">
            <h2><a href="/phost/{{ $pos->id }}">{{ $pos->title }}</a></h2>
            <p>{{ $pos->exerpt }}</p>
        </article>   
    @endforeach  
@endsection

