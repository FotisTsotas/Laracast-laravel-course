<x-layout>
@foreach ($posts as $post)
    
        <article>
            <h1>
                <a href="/posts/{{ $post->slug}}">
            <h1>  {{$post->title}}</h1>            
            </a>
            <div>
                <p>
                {{$post->excerpt}}
                </p>
            </div>
        </article>
    
    
    @endforeach

</x-layout>