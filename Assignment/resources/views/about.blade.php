@extends('layouts.app')
@section('title', 'Mario Ekadharma | About')

@section('content')
    <section class="py-16 md:py-24">
        <x-section-title index="01">About</x-section-title>
        <div class="mt-10 max-w-3xl">
            <x-panel accent="volt">
                <h3 class="font-display text-3xl uppercase text-paper">Story & Skills</h3>
                <p class="mt-4 text-mute text-lg leading-relaxed">
                    I am a software developer based in Makassar, specializing in building web applications with clean code and distinctive interfaces. I enjoy bridging the gap between solid backend logic and bold, accessible frontend design.
                </p>
                <div class="mt-8 flex flex-wrap gap-2">
                    <x-tag tone="volt">Laravel</x-tag>
                    <x-tag tone="ghost">Tailwind CSS</x-tag>
                    <x-tag tone="ghost">PHP</x-tag>
                    <x-tag tone="ghost">Figma</x-tag>
                    <x-tag tone="ghost">Java</x-tag>
                </div>
            </x-panel>
        </div>
    </section>
@endsection