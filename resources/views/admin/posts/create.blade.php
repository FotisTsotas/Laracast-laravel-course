<x-layout>
    <section class="max-w-md mx-auto py-8">
        <h1  class="text-lg font-bold mb-4 mt-6 ">
            Publish New Post
        </h1>
        <x-panel>
            <form method="POST" 
            action="/admin/posts" 
            enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                        for="title">
                        Title
                    </label>

                    <input 
                        class="border border-gray-400 p-2 w-full" 
                        type="text" 
                        name="title" 
                        id="title"
                        value="{{ old('title') }}"
                        >
                    @error('title')
                    <p class='text-red-500 text-xs mt-1'>{{ $message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="slug">
                        Slug
                    </label>

                    <input 
                        class="border border-gray-400 p-2 w-full" 
                        type="text" 
                        name="slug" 
                        id="slug"
                        value="{{ old('slug') }}"
                        >
                    @error('slug')
                    <p class='text-red-500 text-xs mt-1'>{{ $message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="thumbnail">
                    Thumbnail
                    </label>

                    <input 
                        class="border border-gray-400 p-2 w-full" 
                        type="file"                          
                        id="thumbnail"
                        name="thumbnail"                    
                        >
                    @error('thumbnail')
                    <p class='text-red-500 text-xs mt-1'>{{ $message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label 
                        class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                        for="excerpt">
                        Excerpt
                    </label>
                    <textarea 
                        name="excerpt" 
                        id="excerpt"
                        class="w-full border border-gray-400 text-s focus:outline-none focus:ring " 
                        rows="5"
                        >
                       {{ old('excerpt') }}                     
                    </textarea>

                    @error('excerpt')
                    <span class="text-red-500 text-xs mt-2"> {{$message}} </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label 
                    class="block   mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="body">
                        Body
                    </label>
                    <textarea 
                        name="body" 
                        id="body"
                        class="w-full border border-gray-400 text-s focus:outline-none focus:ring " 
                        rows="5"                       
                        >
                        {{ old('body') }}
                    </textarea>

                    @error('body')
                    <span class="text-red-500 text-xs mt-2"> {{$message}} </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                        Category
                    </label>
                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                        <option  
                            value="{{ $category->id }}" 
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                            > {{ ucwords($category->name) }}
                        </option>
                        @endforeach
                    </select>

                    @error('category')
                    <span class="text-red-500 text-xs mt-2"> {{$message}} </span>
                    @enderror
                </div>
                <x-submit-button>Publish</x-submit-button>

            </form>
        </x-panel>

    </section>
</x-layout>