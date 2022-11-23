@extends('layouts')
@section('content')
    @include('_navigation')
    @include('_filters')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($ads->count())
            <x-featured-ad-card :ad="$ads[0]"/>
            <x-ads-grid :ads='$ads'/>
        @else
            <p class="text-center">No posts :(</p>
        @endif

    </main>
@endsection

