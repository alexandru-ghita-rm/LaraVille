<header class="text-center relative overflow-hidden">
    <img src="https://www.imobiliare.ro/imagini/rebranding/homepage/1-xl.jpg" class="object-cover w-full h-100">
    <div class="absolute w-full h-full top-0 flex flex-col justify-center inset-x-0">
        <h1 class="text-5xl font-black text-gray-600">
            <span class="text-green-500">Larra Ville</span> Properties
        </h1>

        <h2 class="mt-2 text-white font-black">Laravel Real Estate Marketplace</h2>

        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
            <!--  Category -->
            <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button
                            class="rounded-xl py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-40 inline-flex text-left">
                            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Select Category' }}
                            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;"
                                 width="22"
                                 height="22" viewBox="0 0 22 22">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5"
                                          d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path fill="#222"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                            </svg>
                        </button>
                    </x-slot>

                    <x-dropdown-item href="/">All</x-dropdown-item>
                    @foreach($categories as $category)
                        <x-dropdown-item
                            href="/categories/{{ $category->slug }}"
                            active="{{ isset($currentCategory) && $currentCategory->id == $category->id }}">
                            {{ ucwords($category->name) }}
                        </x-dropdown-item>
                    @endforeach
                </x-dropdown>
            </div>

            <!-- Search -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="#" class="mb-0">
                    <input type="text"
                           name="search"
                           placeholder="Search..."
                           class="bg-transparent placeholder-black font-semibold text-sm"
                           value="{{ request('search') }}">
                </form>
            </div>
        </div>
    </div>
</header>
