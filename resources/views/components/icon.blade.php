@props(['name', 'size' => 20, 'class' => ''])

<svg {{ $attributes->merge(['class' => trim('icon ' . $class)]) }} width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <use href="#icon-{{ $name }}"></use>
</svg>
