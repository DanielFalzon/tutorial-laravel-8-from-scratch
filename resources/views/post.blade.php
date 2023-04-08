<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
        <div>{!! $post->body !!}</div>
        <div>
            <a href="/post/{{$post->slug}}">
                <a href="#">{{ $post->category->name }}</a>
            </a>
        </div>
    </article>

    <a href="/">back home</a>
</x-layout>
