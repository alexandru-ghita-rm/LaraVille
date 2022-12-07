<nav class="flex justify-between items-center bg-gray-700 py-3 px-5">
    <div>
        <a href="/">
            <img src="/images/logo-gray.jpg" alt="Larra Ville Logo" width="165" height="16">
        </a>
    </div>
    <div class="flex items-center text-white">
        <div class="hidden lg:block mt-8 mr-6 md:mt-0">
            <a href="/" class="text-xs font-bold uppercase">Home</a>
        </div>

        @foreach($categories as $category)
            <div class="hidden lg:block mr-6 md:mt-0">
                <a href="/categories/{{ $category->slug }}"
                   class="text-xs font-bold uppercase">{{ $category->name }}</a>
            </div>
        @endforeach

        <div class="mr-6 md:mt-0">
            <a href="/about" class="text-xs font-bold uppercase">About Larra Ville</a>
        </div>

        @auth
            <div class="mr-6 md:mt-0">
                <a href="{{ route('my-account') }}"
                   class="text-xs font-bold uppercase">{{ auth()->user()->name }}</a>
            </div>
            <div class="mr-6 md:mt-0">
                <a href="board" class="text-xs font-bold uppercase">[+ Add]</a>
            </div>
            <div class="mr-6 md:mt-0">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="text-xs font-bold uppercase">Logout</button>
                </form>
            </div>
        @endauth
        @guest
            <div class="mr-6 md:mt-0">
                <a href="{{ route('register') }}" class="text-xs font-bold uppercase">Sign Up</a>
            </div>
            <div class="md:mt-0">
                <a href="{{ route('login') }}" class="text-xs font-bold uppercase">Login</a>
            </div>
        @endguest
    </div>
</nav>
