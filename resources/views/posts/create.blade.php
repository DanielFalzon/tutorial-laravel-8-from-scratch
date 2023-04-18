<x-layout>
    <x-panel class="max-w-sm mx-auto">
    <section class="max-w-sm mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <form action="/admin/posts/create" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Title
                </label>

                <input class="border border-gray-400 p-2 w-full rounded"
                       type="text"
                       name="title"
                       id="title"
                       value="{{ old('title') }}"
                       required
                >

                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Excerpt
                </label>
                <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        required
                > {{ old('excerpt') }}
                </textarea>
                @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Excerpt
                </label>
                <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        required
                >{{ old('body') }}
                </textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Excerpt
                </label>

                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    <select name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('$category')==$category->id ? 'selected':'' }}>
                                {{ $category->name }}
                            </option>

                        @endforeach

                    </select>

                @error('category_id')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Thumbnail
                </label>
                <input class="border border-gray-400 p-2 w-full rounded"
                       type="file"
                       name="thumbnail"
                       id="thumbnail"
                       required
                >
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-submit-button>Publish</x-submit-button>
        </form>
    </section>
    </x-panel>
</x-layout>




