<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
        <div>
            Written By <a href="#">{{ $post->user->name }}</a> in <a href="/post/{{$post->slug}}">
                <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
            </a>

        </div>
        <br/>
        <div><p>{!! $post->body !!}</p></div>
    </article>

    <a href="/">back home</a>
</x-layout>
