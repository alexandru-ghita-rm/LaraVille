<x-navbar></x-navbar>

<x-layout>
    <div class="bg-gray-100 w-full lg:w-6/12 rounded-xl mx-auto my-5 px-4 py-6">
        <h1 class="text-xl text-bold mb-5">My Account</h1>
        <span class="mb-5 block">
        <?php

        $hour = date("G");
        $minute = date("i");
        $second = date("s");

        if ( (int)$hour == 0 && (int)$hour <= 9 ) {
            $greet = "Good morning,";
        } else if ( (int)$hour >= 10 && (int)$hour <= 11 ) {
            $greet = "Good day,";
        } else if ( (int)$hour >= 12 && (int)$hour <= 15 ) {
            $greet = "Good afternoon,";
        } else if ( (int)$hour >= 16 && (int)$hour <= 23 ) {
            $greet = "Good evening,";
        } else {
            $greet = "Welcome,";
        }

        echo $greet;
        ?>
            {{ auth()->user()->name }}!
        </span>
        <a href="/add" class="bg-green-500 rounded-lg text-white text-xxl p-3 block text-center mb-3">Add a listing</a>
    <h2 class="text-xl text-bold mb-5">My listings</h2>
        @if (false)
            {{--            <x-featured-ad-card :ad="$ads[0]"/>--}}
        @else
            <p class="text-center">No listings added yet :(</p>
        @endif
    </div>
</x-layout>
