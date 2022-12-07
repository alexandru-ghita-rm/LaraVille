@props(['ads'])

@if ($ads->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach( $ads->skip(1) as $ad )
            <x-ad-card :ad="$ad"
                       class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>
        @endforeach
    </div>
@endif
