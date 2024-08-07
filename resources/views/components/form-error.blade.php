@props(['name'])

@error($name)
    <p class="text-xs text-red-500 font-semibold at-1"> {{ $message }} </p>
@enderror