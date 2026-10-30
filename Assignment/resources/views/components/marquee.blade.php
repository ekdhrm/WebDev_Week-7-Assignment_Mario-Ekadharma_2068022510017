@props(['text' => 'Open to internships', 'repeat' => 8])
<div {{ $attributes->class(['overflow-hidden bg-volt py-2 text-ink-950']) }} aria-hidden="true">
    <div class="flex w-max motion-safe:animate-marquee">
        @for ($copy = 0; $copy < 2; $copy++)
            <div class="flex shrink-0">
                @for ($i = 0; $i < $repeat; $i++)
                    <span class="px-6 font-display text-2xl uppercase tracking-wider">{{ $text }} //</span>
                @endfor
            </div>
        @endfor
    </div>
</div>