@props(['category'])

<a href="/categories/{{ $category->slug }}"
   class="px-3 py-1 border border-green-500 rounded-full text-green-500 text-xs uppercase font-semibold"
   style="font-size: 10px">{{ $category->name }}</a>
