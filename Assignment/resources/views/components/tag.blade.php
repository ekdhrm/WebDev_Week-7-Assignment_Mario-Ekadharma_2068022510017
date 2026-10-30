@props(['tone' => 'volt'])
@php
    $tones = [
        'volt' => 'bg-volt text-ink-950',
        'gold' => 'bg-gold text-ink-950',
        'hot' => 'bg-hot text-ink-950',
        'teal' => 'bg-teal text-ink-950',
        'ghost' => 'bg-ink-700 text-paper',
    ];
@endphp
<span {{ $attributes->class(['clip-slant inline-block py-1 pl-3 pr-5 font-mono text-xs font-bold uppercase tracking-wider', $tones[$tone] ?? $tones['volt']]) }}>{{ $slot }}</span>