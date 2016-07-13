@extends('layouts.blog')

@section('title')
    Blog posts | @parent
@stop
@section('content')
    <div>
        <div class="col-md-12 bg-white">
            <?php if (isset($posts)): ?>
            <ul>
                <?php foreach($posts as $post): ?>
                    <blockquote>
                        <h3><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></h3>
                        <code>Posted on {{ $post->created_at->format('d-m-Y') }} in
                        <?php echo DB::table('blog__category_translations')->where('id', $post->category_id)->first()->name; ?></span>
                        </code>
                    </blockquote>
                    <div class="clearfix"></div>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
@stop
