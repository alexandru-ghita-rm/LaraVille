<x-navbar></x-navbar>
<x-filter></x-filter>
<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
{{--        @if (count($ads) === 1)--}}
{{--            <x-featured-ad-card :ad="$ads[0]"/>--}}
        @if (count($ads) > 1)
            <x-ads-grid :ads='$ads'/>
        @else
            <p class="text-center">No listings to match your search :(</p>
        @endif
    </main>
</x-layout>
