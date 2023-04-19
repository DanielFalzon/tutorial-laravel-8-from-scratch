<x-layout>
    <x-panel class="max-w-sm mx-auto">
    <section class="max-w-sm mx-auto">
        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <form action="/admin/posts/create" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body"/>

            <x-form.field>
                <x-form.label name="category"></x-form.label>
                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('$category')==$category->id ? 'selected':'' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="category"></x-form.error>
            </x-form.field>

            <x-submit-button>Publish</x-submit-button>
        </form>
    </section>
    </x-panel>
</x-layout>




