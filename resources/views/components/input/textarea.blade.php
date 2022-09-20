<div>
    <label for="description" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1">
        <textarea id="{{ $name }}" name="{{ $name }}" rows="3"
            {{ $attributes->class([
                'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md',
            ]) }}
            placeholder="{{ $placeholder }}"></textarea>
    </div>
    @if ($description)
        <p class="mt-2 text-sm text-gray-500">
            {{ $description }}
        </p>
    @endif
</div>