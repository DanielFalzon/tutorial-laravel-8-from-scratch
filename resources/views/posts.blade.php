<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/post/{{$post->slug}}">
                <h1>{!! $post->title !!}</h1>
            </a>
            <div>
                <a href="/post/{{$post->slug}}">
                    <a href="#">{{ $post->category->name }}</a>
                </a>
            </div>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
