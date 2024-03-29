@props(['comment'])
<article class="flex border rounded-xl border-gray-200 bg-gray-100 p-7 space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->user_id}}" alt="" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">
                {{ $comment->author->username}}
            </h3>
            <p class="text-xs">
                <time>{{ $comment-> created_at->diffForHumans()}}</time>
            </p>
        </header>
        <p>
        {{ $comment->body }}
        </p>
    </div>
</article>