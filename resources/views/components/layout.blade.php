<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center ">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">

                        <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</button>

                    </x-slot>
                    <div class="flex flex-col m-2 text-center text-white">
                        @can('admin')
                        <a  class="bg-blue-500 hover:bg-red-400 rounded-xl p-2 mt-3 " href="/admin/posts
                        "> Dashboard</a>
                        <a  class="bg-blue-500 hover:bg-red-400 rounded-xl mt-3 p-2 " href="/admin/posts/create"> Create a New Post</a>
                        @endcan
                    
                        <form method="POST" action="/logout"
                        class="bg-blue-500 hover:bg-red-400 rounded-xl mt-3 p-2 ">
                        @csrf    
                        <button type="submit">Log Out</button>   
                    </form>
                    </div>
                </x-dropdown>
                
                @else

                <a href="/register" class="text-xs font-bold uppercase">
                    <div class=" bg-blue-500 rounded hover:bg-red-500 p-3 text-s font-semibold text-white ml-3 hover">
                        Register
                    </div>
                </a>
                <a href="/login" class="text-xs font-bold uppercase">
                    <div class=" bg-blue-500 rounded hover:bg-red-500 p-3 text-s font-semibold text-white ml-3 hover">
                        Log In
                    </div>
                </a>
                @endauth

                <a href="#newsletter"
                    class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        {{{$slot}}}

        <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                           <div>
                            <input 
                            id="email"
                            name="email" 
                            type="text" 
                            placeholder="Your email address"
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none"
                            required>

                            @error('email')
                                <span class="text-xs text-red-500">{{ $message}}</span>
                            @enderror
                           </div>
                            </div>

                        <x-submit-button>Subscribe</x-submit-button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    <x-flash />
</body>