@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'alert alert-danger']) }}>
        @foreach ((array) $messages as $message)
            <div class="d-flex">
                <span>{{ $message }}</span>
            </div>
            </div>
        @endforeach
    </ul>
@endif
