@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <div class="w-9/12">
        <div
            class="m-6 mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-lg"
                src="https://media.istockphoto.com/id/825383494/photo/business-man-pushing-large-stone-up-to-hill-business-heavy-tasks-and-problems-concept.jpg?s=2048x2048&w=is&k=20&c=fPRHYXio7FOCBEXMG6uxiiwxZMxc86aUVs5mUNPHKw4="
                alt="" />
            <div class="p-6">
                <div class="p-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->body }}</p>
                    <small>Written on {{ $post->created_at }}</small>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="w-full flex flex-row">
        <a href="/posts"><button type="button"
                class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Back
            </button></a>
        <hr>
        <a href="/posts/{{ $post->id }}/edit"><button type="button"
                class="ml-3 text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
            </button></a>
        <hr>
        {{ html()->form($method = 'DELETE')->route('post.delete', $post->id)->class('flex flex-col mx-auto max-w-l')->open() }}

        {{ html()->submit($text = 'Delete')->class('ml-3 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800') }}

        {{ html()->form()->close() }}
    </div>
@endsection
