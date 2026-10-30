@extends('layouts.app')
@section('title', 'Mario Ekadharma | Home')

@section('content')
    <section class="relative py-16 md:py-24">
        <div class="halftone pointer-events-none absolute right-0 top-0 z-0 h-72 w-72 text-ink-700" aria-hidden="true"></div>
        <div class="relative z-10">
            <p class="font-mono text-sm font-bold uppercase text-volt">// Software developer / Makassar</p>
            <h1 class="mt-4 font-display text-6xl uppercase leading-[0.95] md:text-9xl">
                Mario<br><span class="text-volt">Ekadharma</span>
            </h1>
            <p class="mt-6 max-w-prose text-lg text-mute">I build clean, robust web applications and I am currently seeking software engineering internships.</p>
            <div class="mt-8 flex flex-wrap gap-4">
                <x-button href="/blog">See my work</x-button>
                <x-button href="/contact" variant="ghost">Contact</x-button>
            </div>
        </div>
    </section>

    <x-marquee text="Open to internships" class="-mx-4" />

    <section class="py-16">
        <x-section-title index="01">Projects</x-section-title>
        <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <x-panel accent="volt">
                <x-tag>Laravel</x-tag>
                <h3 class="mt-4 font-display text-3xl uppercase">Feedback Showcase</h3>
                <p class="mt-2 text-mute">A system to aggregate and present feedback for the AFL 3 project.</p>
                <a href="#" class="mt-4 inline-block font-mono text-sm font-bold uppercase text-volt underline underline-offset-4 hocus:text-paper">View project</a>
            </x-panel>
        </div>
    </section>
@endsection