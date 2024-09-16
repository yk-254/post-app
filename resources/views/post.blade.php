<x-layout>
    <x-slot name='content'>
        <article>
            <h1> <?= $post->title ?> </h1>
            {{-- <p>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            </p> --}}
            <div> <?= $post->body ?> </div>
        </article>
    </x-slot>

</x-layout>
