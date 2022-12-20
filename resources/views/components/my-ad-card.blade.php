<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 bg-white border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="bg-white-100 rounded-xl">
        <div class="flex bg-gray-300 rounded-t-xl h-40 items-center justify-center">
            @if ($ad->image)
                <img src="{{ URL::to('/') }}/storage/app/public/{{ $ad->image }}" class="rounded-xl">
            @else
                <img src="{{ URL::to('/') }}/images/no-image.png" alt="Blog Post illustration" class="object-cover h-40 w-full rounded-t-xl">
            @endif
        </div>

        <div class="flex flex-col justify-between">
            <div class="flex justify-between items-center p-5">
                <x-category-button :category="$ad->category"/>
                <p class="text-gray-400">Price: <span class="font-bold text-gray-800">{{ $ad->price }} €</span></p>
            </div>
        </div>
        <div class="px-5">
            <h1 class="text-2xl">
                {{ $ad->title }}
            </h1>
            <span class="mt-2 block text-gray-400 text-xs">Published <time>{{ $ad->created_at->diffForHumans() }}</time></span>
        </div>
        <footer class="flex justify-between items-center p-5">
            <div class="text-sm">
                <p>
                    {{ $ad->summary }}
                </p>
            </div>

            <div>
                <a href="#"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >Delete</a>
            </div>
        </footer>
    </div>
</article>

