<h2 class="text-bold my-5 text-lg font-black text-gray-600">My Listings ({{ count($seller_ads_total) }}): </h2>
<div class="lg:grid lg:grid-cols-12 gap-10">
    @foreach( $seller_ads->sortByDesc('created_at') as $ad )
        <x-my-ad-card :ad="$ad" class="col-span-4"/>
    @endforeach
</div>
<div class="mt-5">
    {{ $seller_ads->links() }}
</div>
