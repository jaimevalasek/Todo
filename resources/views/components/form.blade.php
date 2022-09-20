<form action="{{ $action }}" method="POST">
    @csrf

    @if ($method != 'POST')
        @method($method)
    @endif

    {{ $slot }}
</form>