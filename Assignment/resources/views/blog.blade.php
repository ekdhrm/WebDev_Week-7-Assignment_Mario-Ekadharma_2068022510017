@extends('layouts.app')
@section('title', 'Mario Ekadharma | Blog')

@section('content')
    <section class="py-16 md:py-24">
        <x-section-title index="01">Writing</x-section-title>
        <div class="mt-10 flex flex-col gap-6 max-w-3xl">
            <x-panel accent="teal">
                <div class="flex items-center gap-4">
                    <x-tag tone="teal">Update</x-tag>
                    <time class="font-mono text-sm text-mute">2026-10-26</time>
                </div>
                <h3 class="mt-4 font-display text-3xl uppercase text-paper">Building a ZZZ-Inspired Portfolio</h3>
                <p class="mt-2 text-mute">How graphic design principles and strict constraints shaped this interface.</p>
            </x-panel>
        </div>
    </section>
@endsection