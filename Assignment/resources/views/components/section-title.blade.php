@props(['index' => '01'])
<div {{ $attributes->class(['flex items-end gap-4']) }}>
    <span class="font-mono text-sm font-bold text-volt">{{ $index }}</span>
    <h2 class="font-display text-5xl uppercase leading-none tracking-wide text-paper md:text-7xl">{{ $slot }}</h2>
    <span class="mb-2 hidden h-px grow bg-ink-700 md:block" aria-hidden="true"></span>
</div>