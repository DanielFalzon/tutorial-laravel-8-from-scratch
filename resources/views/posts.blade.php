<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/post/{{$post->slug}}">
                <h1>{!! $post->title !!}</h1>
            </a>
            <div>
                Written By <a href="/authors/{{$post->author->username}}">{{ $post->author->name }}</a> in
                <a href="/categories/{{$post->category->slug}}">
                    {{$post->category->name }}
                </a>
            </div>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
