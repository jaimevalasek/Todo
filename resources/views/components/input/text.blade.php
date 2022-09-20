@props([
    'prefix' => null,
    'name'   => null,
    'label'  => null
])

<label for="{{ $name }}" class="block text-sm font-medium text-gray-700 font-bold">{{ $label }}</label>

<div class="mt-1 flex rounded-md shadow-sm">
    @if ($prefix)
        <span
            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
            {{ $prefix }}
        </span>        
    @endif

    <input type="text" name="{{ $name }}" id="{{ $name }}"
    {{ $attributes->class([
        'focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full sm:text-sm border-gray-300',
        'rounded-none rounded-r-md' => $prefix,
        'rounded-md ' => !$prefix,
    ]) }}
        class=""
        placeholder="Name">
</div>
