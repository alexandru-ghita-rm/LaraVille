<x-navbar></x-navbar>
<x-layout>
    <section class="px-6 py-0">
        <main class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between my-5">
                <div class="col-span-6">
                    <a href="{{ route('home') }}"
                       class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-green-500">
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
                </div>
                <div class="col-span-6">
                    <h1 class="font-bold text-xl lg:text-2xl">
                        {{ $ad->title }}
                    </h1>
                </div>
            </div>
            <article class="max-w-6xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-8">
                    <img src="/images/illustration-1.png" alt="" class="rounded-lg object-cover" height="200">
                </div>
                <div class="col-span-4 flex flex-col items-center rounded-lg bg-gray-200 p-20 text-center">
                    <img src="/images/avatar.png" alt="avatar" class="w-32 rounded-full">
                    <div>
                        <h5 class="font-bold mt-3 text-lg">{{ $ad->seller->name }}</h5>
                        <div x-data="{ text: '' }">
                            <button @click="text = '{{ $ad->seller->telephone }}'"
                                    class="block bg-green-500 text-white w-full rounded py-2 px-5">Call now
                            </button>
                            <strong x-text="text" class="block"></strong>
                        </div>
                        <a href="mailto:{{ $ad->seller->email }}">Email me</a>
                        <div x-data="{}" class="mb-3">
                            <button class="btn btn-primary scroll-lock" @click="$dispatch('modal-ex')">Email me</button>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between my-5">
                        <div class="space-x-2">
                            <x-category-button :category="$ad->category"/>
                        </div>
                    </div>

                    <div class="space-y-4 lg:text-lg leading-loose mb-4 font-bold text-gray-500">
                        {{ $ad->summary }}
                    </div>

                    <div class="space-y-4 lg:text-lg leading-loose mb-4 font-bold text-gray-500">
                        Price: {{ $ad->price }} €
                    </div>
                    <h3 class="mb-2 font-bold text-gray-700">Description</h3>
                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p>{{ $ad->body }}</p>

                    </div>
                </div>
                <div class="col-span-4">
                    <p class="mt-4 block text-gray-400 text-xs text-right">
                        Published
                        <time>{{ $ad->created_at->diffForHumans() }}</time>
                    </p>
                </div>
            </article>
        </main>
    </section>
</x-layout>
<!-- The modal component (without button) -->
<div x-data="{ modal: false }">
    <div
        class="modal-wrapper"
        :class="{ 'active': modal }"
        x-on:modal-ex.window="modal = !modal"
    >
        <div class="backdrop backdrop-shaded scroll-unlock" x-show.transition.opacity.duration.600ms="modal" @click="modal = false"></div>
        <div class="modal-panel container-sm p-3 b-thin rounded bg-color-background" :class="{ 'active': modal }">
            <p>{{ $ad->seller->email }}</p>
            <button class="float-right scroll-unlock" @click="modal = false">Close</button>
        </div>
    </div>
</div>
