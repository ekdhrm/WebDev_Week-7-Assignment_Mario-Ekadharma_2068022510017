@props(['href' => '#', 'variant' => 'primary'])
@php
    $variants = [
        'primary' => 'bg-volt text-ink-950 hocus:bg-paper focus-visible:ring-4 focus-visible:ring-inset focus-visible:ring-ink-950',
        'ghost' => 'bg-ink-700 text-paper hocus:bg-paper hocus:text-ink-950 focus-visible:ring-4 focus-visible:ring-inset focus-visible:ring-volt',
    ];
@endphp
<a href="{{ $href }}" {{ $attributes->class(['clip-cut inline-flex items-center gap-2 px-6 py-3 font-display text-lg uppercase tracking-wide outline-hidden transition-colors', $variants[$variant] ?? $variants['primary']]) }}>{{ $slot }}</a>