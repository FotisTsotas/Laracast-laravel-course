<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold inline-flex">
            <x-dropdown-arrow class="absolute pointer-events-none" style="right: 12px;">

            </x-dropdown-arrow>
            {{isset($currentCategory) ? $currentCategory->name : 'Categories' }}
        </button>
    </x-slot>
    <x-dropdown-item 
        href="/?{{ http_build_query(request()->except('category', 'page')) }}" 
        :active="request()->routeIs('home')">All</x-dropdown-item>

    @foreach ($categories as $category)

    <x-dropdown-item 
        href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" 
        :active="isset($currentCategory) && $currentCategory->is($category)">
        {{ucwords($category->name)}}</x-dropdown-item>

    @endforeach

</x-dropdown>