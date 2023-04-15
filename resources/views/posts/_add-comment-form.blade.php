

@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf
            <header class="flex items-center">
                <img class="rounded-full" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40">
                <h2 class="ml-4">Want to Participate?</h2>
            </header>
            <div class="mt-8">
                            <textarea
                                    name="body"
                                    id="body"
                                    rows="5"
                                    class="w-full text-sm focus:outline-none focus:ring"
                                    placeholder="Quick, think of something to say!"
                                    required></textarea>
                @error('body')
                <span class="text-xs text-red-300">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>

@else
    <a href="/register" class="hover:underline text-blue-500">Register</a> or <a href="/login" class="hover:underline text-blue-500">Log in </a> to leave a comment.
@endauth