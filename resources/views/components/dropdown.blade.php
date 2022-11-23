@props(['trigger'])

<div x-data="{ open: false }" @click.away="open = false">
    {{--    Trigger--}}
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    {{--    Links--}}
    <div x-show="open" class="absolute rounded-b-xl py-2 bg-gray-100 w-full z-50" style="display: none;">
        {{ $slot }}
    </div>
</div>
