@extends('layouts.blog')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    <div>
        <div class="col-md-12 bg-white">
        <h1>{{ $page->title }}</h1>
        {!! $page->body !!}
        </div>
    </div>
@stop
