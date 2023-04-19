@props(['name'])
@error('category_id')
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
@enderror