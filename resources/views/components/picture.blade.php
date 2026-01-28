@php $basePath = asset($src); @endphp
<picture>
    <source srcset="{{ $basePath }}.webp" type="image/webp">
    <source srcset="{{ $basePath }}.png" type="image/png">
    <img
        src="{{ $basePath }}.png"
        width="{{ $width }}"
        height="{{ $height }}"
        {{ $attributes->merge([
            'alt' => $alt,
            'class' => $class ?? ''
        ]) }}
    >
</picture>