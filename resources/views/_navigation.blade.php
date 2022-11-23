<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/larra-logo.png" alt="Larra Ville Logo" width="165" height="16">
        </a>
    </div>
    <div class="flex">
        <div class="mt-8 mr-6 md:mt-0">
            <a href="/" class="text-xs font-bold uppercase">Home</a>
        </div>

        @foreach($categories as $category)
            <div class="mt-8 mr-6 md:mt-0">
                <a href="/categories/{{ $category->slug }}" class="text-xs font-bold uppercase">{{ $category->name }}</a>
            </div>
        @endforeach

        <div class="mt-8 mr-6 md:mt-0">
            <a href="/about" class="text-xs font-bold uppercase">About Larra Ville</a>
        </div>
        <div class="mt-8 md:mt-0">
            <a href="{{ route('register') }}" class="text-xs font-bold uppercase">Sign Up</a>
        </div>
    </div>
</nav>
