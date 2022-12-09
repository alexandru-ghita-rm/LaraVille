<div class="lg:grid lg:grid-cols-12">
    @foreach( $seller_ads as $ad )
        <x-ad-card :ad="$ad"
                   class="col-span-4"/>
    @endforeach
</div>
