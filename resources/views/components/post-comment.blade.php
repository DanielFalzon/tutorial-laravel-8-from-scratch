@props(['comment'])
<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
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
</x-panel>