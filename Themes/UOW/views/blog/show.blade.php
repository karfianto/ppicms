@extends('layouts.blog')

@section('title')
    {{ $post->title }} | @parent
@stop

@section('content')
    <div>
        <div class="col-lg-12 bg-white">
        <span class="linkBack row clearfix">
            <a href="{{ URL::route($currentLocale . '.blog') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back to post list</a>
        </span>
        <h1>{{ $post->title }}</h1>

            <code>Posted on {{ $post->created_at->format('d-m-Y') }} in
		{{ DB::table('blog__category_translations')->where('id', $post->category_id)->first()->name }}
            </code>
            <p>
        {!! $post->content !!}
            </p>
            <p>
                <?php if ($previous = $post->present()->previous): ?>
                    <a href="{{ route(locale() . '.blog.slug', [$previous->slug]) }}">Previous</a>
                <?php endif; ?>
                <?php if ($next = $post->present()->next): ?>
                    <span class="pull-right">
                    <a href="{{ route(locale() . '.blog.slug', [$next->slug]) }}">Next</a></span>
                <?php endif; ?>
				<div class="fb-comments" data-href="{{ route(locale() . '.blog.slug', [$post->slug]) }}" data-numposts="10"></div>
            </p>
        </div>
    </div>
@stop
