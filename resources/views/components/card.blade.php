@props([
    'footer' => null,
    'class' => null
])

<div class="shadow sm:rounded-md sm:overflow-hidden {{ $class }}">
    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
        {{ $slot }}
    </div>

    @if ($footer)
        <div class="px-4 py-3 bg-green-50 text-right sm:px-6">
            {{ $footer }}
        </div>
    @endif
</div>
