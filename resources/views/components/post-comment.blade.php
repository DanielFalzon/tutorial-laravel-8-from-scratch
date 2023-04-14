@props(['comment'])

<article class="flex bg-gray-100 p-6 rounded-xl border border-gray-200 space-x-4">
    <div class="flex-shrink-0">
        <img class="rounded-xl" src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="" width="60">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                <time>{{ $comment->created_at }}</time>
            </p>
            <p>
                {{ $comment->body }}
            </p>
        </header>
    </div>
</article>