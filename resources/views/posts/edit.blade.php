@extends('layouts.app')

@section('content')
    <div class="m-6 w-full">
        <h1 class="w-full">Edit Post</h1>

        <div class="w-3/6 m-5">
            {{ html()->form($method = 'PUT')->route('post.edit', $post->id)->class('flex flex-col mx-auto max-w-l')->open() }}

            {{ html()->label($contents = 'Title', $for = 'title') }}
            {{ html()->text($name = 'title', $value = $post->title)->placeholder($placeholder = 'title')->class('text-black p-3') }}

            {{ html()->label($contents = 'Body', $for = 'body') }}
            {{ html()->textarea($name = 'body', $value = $post->body)->placeholder($placeholder = 'body text')->class('text-black p-3') }}

            {{ html()->submit($text = 'Submit')->class('bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mt-5 w-fit') }}

            {{ html()->form()->close() }}
        </div>

        <a href="/posts"><button type="button"
                class="text-white bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Back
            </button></a>
    </div>
@endsection
