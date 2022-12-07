@extends('layout')

@section('content')
    @include('navigation')
    <div class="bg-gray-100 w-full lg:w-6/12 rounded-xl mx-auto my-5 px-4 py-6">
        <h1 class="text-center text-xl text-bold mb-5">Login</h1>
        @if (session('status'))
            <div class="py-3 bg-red-300 rounded-lg mb-6 text-white text-center">
                {{ session('status') }}
            </div>
        @endif
        <form actions="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" placeholder="Your email"
                       class="bg-gray-100 border-2 @error('email') border-red-700 @enderror p-4 rounded-lg w-full" value="{{ old('email') }}">
                @error('email')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" placeholder="Choose a password"
                       class="bg-gray-100 border-2 @error('password') border-red-700 @enderror p-4 rounded-lg w-full" value="">
                @error('password')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember me</label>
            </div>
            <div class="mb-4">
                <button type="submit"
                        class="bg-gray-700 hover:bg-gray-800 focus:bg-gray-800 text-white px-4 py-4 rounded-lg font-medium w-full">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection
