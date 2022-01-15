@auth
<form method="POST" action="/posts/{{$post->slug}}/comments" class="border border-gray-200 p-6 rounded-xl">
    @csrf
    <header class="flex items-center">
        <img src="https://i.pravatar.cc/40?u={{ auth()->user()->id}}" alt="" width="40" height="40"
            class=" mr-5 rounded-full">
        <h2>Want to participate?</h2>
    </header>
    <div class="mt-8">
        <textarea name="body" placeholder="Leave Comment !" class="w-full text-s focus:outline-none focus:ring "
            rows="10" required></textarea>
        @error('body')
        <span> {{$message}} </span>
        @enderror
    </div>
    <x-submit-button>Post</x-submit-button>

</form>
@else
<p>
    <a class="font-smibold hover:bg-blue-500 p-2  rounded-xl hover:text-white" href="/register">Register</a> or <a
        class="font-smibold hover:bg-blue-500 p-2  rounded-xl hover:text-white" href="/login">Log In</a> for a leave a
    comment!
</p>

@endauth