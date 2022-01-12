<x-layout>
<article>
<h1> {{$post->title}}</h1>
<p>
<a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a>

            </p>

    <div class="section">
     {!!$post->body!!}
    </div>
    <a href="/"><button>Go back</button></a>
</article>

</x-layout>
