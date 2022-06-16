
<x-layout>
    <article>
        <h1> {{ $post->title }}  </h1>
        <p><a href="{{ $post->user->name}}">jeff bezoz</a> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <div>
            {!! $post->body !!}     
        </div>
    </article>
    <a href="/">go back</a>
</x-layout>
