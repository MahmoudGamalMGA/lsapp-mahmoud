@extends('layouts.app')

@section('content')
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
        <div class="pt-3 sm:pt-5">
            <h2 class="text-xl font-semibold text-black dark:text-white">I am</h2>

            <p class="mt-4 text-sm/relaxed">
                Mahmoud Gamal
            </p>

            <p class="mt-4 text-sm/relaxed">{{ $title }} {{ $text }}</p>
        </div>

        {{-- @include('inc.login') --}}

    </div>
@endsection
