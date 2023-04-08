<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
        <div>
            Written By <a href="/authors/{{$post->author->username}}">{{ $post->author->name }}</a> in
            <a href="/categories/{{$post->category->slug}}">
                {{$post->category->name }}
            </a>
        </div>
        <br/>
        <div><p>{!! $post->body !!}</p></div>
    </article>

    <a href="/">back home</a>
</x-layout>
