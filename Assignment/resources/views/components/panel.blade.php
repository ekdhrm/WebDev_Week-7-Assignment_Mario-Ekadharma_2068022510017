@props(['accent' => 'volt'])
@php
    $edge = ['volt' => 'bg-volt', 'hot' => 'bg-hot', 'gold' => 'bg-gold', 'teal' => 'bg-teal'][$accent] ?? 'bg-volt';
@endphp
<div {{ $attributes->class(['drop-shadow-[5px_5px_0_var(--color-ink-700)]']) }}>
    <div class="clip-cut p-[2px] {{ $edge }}">
        <div class="clip-cut bg-ink-800 p-5 md:p-6">
            {{ $slot }}
        </div>
    </div>
</div>