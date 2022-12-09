@props(['ads'])

@if ($ads->count() > 1)
    <div class="lg:grid lg:grid-cols-12 gap-10">
        @foreach( $ads->skip(1) as $ad )
            <x-ad-card :ad="$ad"
                       class="{{ $loop->iteration < 3 ? 'col-span-6' : 'col-span-4' }}"/>
        @endforeach
    </div>
@endif
