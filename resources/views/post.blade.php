<x-layout>
<article>
<h1> {{$post->title}}</h1>


    <div class="section">
     {!!$post->body!!}
    </div>
    <a href="/"><button>Go back</button></a>
</article>

</x-layout>
