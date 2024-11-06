@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="w-9/12">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div
                    class="m-6 mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="/posts/{{ $post->id }}">
                        <img class="rounded-lg"
                            src="https://media.istockphoto.com/id/825383494/photo/business-man-pushing-large-stone-up-to-hill-business-heavy-tasks-and-problems-concept.jpg?s=2048x2048&w=is&k=20&c=fPRHYXio7FOCBEXMG6uxiiwxZMxc86aUVs5mUNPHKw4="
                            alt="" />
                    </a>
                    <div class="p-6">
                        <div class="p-5">
                            <a href="/posts/{{ $post->id }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->title }}
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->body }}</p>
                            <small>Written on {{ $post->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Pagination --}}
            {{ $posts->links() }}
        @else
            <p>No posts found.</p>
        @endif
    </div>

@endsection
