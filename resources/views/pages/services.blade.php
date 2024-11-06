@extends('layouts.app')

@section('content')
    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">Services</h2>

        @if (count($services) > 0)
            <p class="mt-4 text-sm/relaxed">
                This is the services page.
            </p>

            <ul>
                @foreach ($services as $service)
                    <li class="service">{{ $service }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
