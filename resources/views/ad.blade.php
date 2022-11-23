<x-layout>
    @include('_navigation')
    <section class="px-6 py-4">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <a href="/"
               class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-pink-500">
                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path class="fill-current"
                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                        </path>
                    </g>
                </svg>
                Back to Home
            </a>
            <article class="max-w-6xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-12 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl" height="300">
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <div class="space-x-2">
                            <x-category-button :category="$ad->category" />
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-4">
                        {{ $ad->title }}
                    </h1>
                    <div class="space-y-4 lg:text-lg leading-loose mb-4 font-bold text-gray-500">
                        {{ $ad->summary }}
                    </div>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p>{{ $ad->body }}</p>

                    </div>
                </div>
                <div class="col-span-4">
                    <p class="mt-4 block text-gray-400 text-xs">
                        Published
                        <time>{{ $ad->created_at->diffForHumans() }}</time>
                        by:
                    </p>

                    <div class="flex text-sm mt-4">
                        <img src="/images/seba.png" alt="avatar" class="w-12 rounded-xl">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{ $ad->seller->name }}</h5>
                            <span class="font-bold">Tel: 0723 ...</span>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </section>
</x-layout>
