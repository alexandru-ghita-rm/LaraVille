@props(['ad'])
<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 bg-stone-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
        <div class="py-6 px-5">
            <div>
                <img src="{{ URL::to('/') }}/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="flex justify-between">
                        <div class="space-x-2">
                            <x-category-button :category="$ad->category"/>
                        </div>
                        <p class="text-gray-400">Price: <span class="font-bold text-gray-800">{{ $ad->price }} €</span></p>
                    </div>
                    <div class="mt-4">
                        <h1 class="text-3xl">
                            {{ $ad->title }}
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $ad->created_at->diffForHumans() }}</time>
                                    </span>
                    </div>
                </header>

                <div class="text-sm mt-4">
                    <p>
                        {{ $ad->summary }}
                    </p>
                </div>

                <footer class="flex justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                        <img src="{{ URL::to('/') }}/images/avatar.png" class="rounded-full w-10" alt="avatar">
                        <div class="ml-3">
                            <h5 class="font-bold">{{ $ad->seller->name }}</h5>
                            <h6>Realtor</h6>
                        </div>
                    </div>

                    <div>
                        <a href="/ads/{{ $ad->slug }}"
                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                        >More Details</a>
                    </div>
                </footer>
            </div>
        </div>
</article>

