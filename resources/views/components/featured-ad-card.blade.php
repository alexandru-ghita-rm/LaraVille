<article
    class="transition-colors duration-300 bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="lg:flex">
        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0 px-5">
                <div class="space-x-2 pt-5">
                    <span class="px-3 py-1 border bg-green-500 border-green-500 rounded-full text-white text-xs uppercase font-semibold"
                          style="font-size: 10px">SINGLE AD</span>
                    <a href="/categories/{{ $ad->category->slug }}"
                       class="px-3 py-1 border border-green-500 rounded-full text-green-500 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $ad->category->name }}</a>


                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        {{ $ad->title }}
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Posted <time>{{ $ad->created_at->diffForHumans() }}</time>
                                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 px-5">
                <p>
                    {{ $ad->summary }}
                </p>

            </div>

            <footer class="flex justify-between items-center mt-8 px-5 pb-5">
                <div class="flex items-center text-sm">
                    <img src="{{ URL::to('/') }}/images/avatar.png" class="rounded-full w-16" alt="avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">{{ $ad->seller->name }}</h5>
                        <h6>Realtor at Larra Ville</h6>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/ads/{{ $ad->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >See More Details + Photos</a>
                </div>
            </footer>
        </div>
        <div class="flex-1 lg:ml-8">
            <p class="absolute bg-green-500 text-white mt-5 ml-5 py-2 px-5 rounded-xl">Price: {{ $ad->price }} €</p>

            <img src="{{ URL::to('/') }}/images/no-image.png" alt="" class="rounded-r-xl">
        </div>
    </div>
</article>
