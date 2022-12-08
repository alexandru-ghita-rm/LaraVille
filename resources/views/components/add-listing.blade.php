<x-navbar></x-navbar>

<x-layout>
    <div class="bg-gray-100 w-full lg:w-6/12 rounded-xl mx-auto my-5 px-4 py-6">
        <h1 class="text-xl text-bold mb-5">Add Listing</h1>
        <form actions="{{ route('add-listing') }}" method="post">
            @csrf
            <input type="number" value="{{ auth()->user()->id }}" name="user_id" class="hidden">
            <p class="text-xs mb-2">My listing belongs in: </p>
            <div class="lg:grid lg:grid-cols-12 gap-x-10 mb-4">
                @foreach($categories as $category)
                    <label for="category_id" class="col-span-4 p-3 bg-white">
                        <input type="radio" name="category_id" value="{{ $category->id }}">
                        {{ ucwords($category->name) }}
                    </label>
                @endforeach

            </div>
            <div class="lg:grid lg:grid-cols-12 gap-x-10">
                <div class="mb-4 col-span-6">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" placeholder="Title"
                           class="bg-gray-100 border-2 @error('title') border-red-700 @enderror p-4 rounded-lg w-full"
                           value="{{ old('title') }}">
                    @error('title')
                    <div class="text-sm text-red-700 mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4 col-span-6">
                    <label for="price" class="sr-only">Price</label>
                    <input type="number" name="price" placeholder="Price"
                           class="bg-gray-100 border-2 @error('price') border-red-700 @enderror p-4 rounded-lg w-full"
                           value="{{ old('price') }}">
                    @error('price')
                    <div class="text-sm text-red-700 mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="summary" class="sr-only">Summary</label>
                <input type="text" name="summary" placeholder="Summary"
                       class="bg-gray-100 border-2 @error('summary') border-red-700 @enderror p-4 rounded-lg w-full"
                       value="{{ old('summary') }}">
                @error('summary')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="sr-only">Description</label>
                <textarea name="description" placeholder="Describe your property"
                       class="bg-gray-100 border-2 @error('description') border-red-700 @enderror p-4 rounded-lg w-full"
                       value="{{ old('description') }}"></textarea>
                @error('description')
                <div class="text-sm text-red-700 mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit"
                        class="bg-gray-700 hover:bg-gray-800 focus:bg-gray-800 text-white px-4 py-4 rounded-lg font-medium w-full">
                    Add listing
                </button>
            </div>
        </form>
    </div>
</x-layout>
