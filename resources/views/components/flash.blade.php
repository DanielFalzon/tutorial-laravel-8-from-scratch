@if(session()->has('success'))
    <div x-data="{ show: true}"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bottom-3 rounded-xl right-3 bg-blue-500 text-white py-2 px-4 text-sm">
        <p>
            {{ session()->get('success') }}
        </p>
    </div>
@endif