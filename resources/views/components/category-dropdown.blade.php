<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 text-left text-sm font-semibold lg:w-32 flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-down-arrow class="absolute pointer-events-none" style="right: 12px;"></x-down-arrow>
        </button>
    </x-slot>


    <x-dropdown-item href="/">
        All
    </x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
                         :active="$category->is($currentCategory)"
        >{{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>