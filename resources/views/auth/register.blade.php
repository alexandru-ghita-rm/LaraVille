<x-navbar></x-navbar>
<x-layout>
    <div class="bg-gray-100 w-full lg:w-6/12 rounded-xl mx-auto my-5 px-4 py-6">
        <h1 class="text-center text-xl text-bold mb-5">Sign up</h1>
        <form actions="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" placeholder="Your name"
                       class="bg-gray-100 border-2 @error('name') border-red-700 @enderror p-4 rounded-lg w-full"
                       value="{{ old('name') }}">
                @error('name')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" placeholder="Your username"
                       class="bg-gray-100 border-2 @error('username') border-red-700 @enderror p-4 rounded-lg w-full"
                       value="{{ old('username') }}">
                @error('username')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" placeholder="Your email"
                       class="bg-gray-100 border-2 @error('email') border-red-700 @enderror p-4 rounded-lg w-full"
                       value="{{ old('email') }}">
                @error('email')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" placeholder="Choose a password"
                       class="bg-gray-100 border-2 @error('password') border-red-700 @enderror p-4 rounded-lg w-full"
                       value="">
                @error('password')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input type="password" name="password_confirmation" placeholder="Type password again"
                       class="bg-gray-100 border-2 @error('password') border-red-700 @enderror p-4 rounded-lg w-full"
                       value="">
                @error('password')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit"
                        class="bg-gray-700 hover:bg-gray-800 focus:bg-gray-800 text-white px-4 py-4 rounded-lg font-medium w-full">
                    Register
                </button>
            </div>
        </form>
    </div>
    @endsection
</x-layout>
