@extends('layouts.app')
@section('title', 'Mario Ekadharma | Contact')

@section('content')
    <section class="py-16 md:py-24">
        <x-section-title index="01">Reach Out</x-section-title>
        <div class="mt-10 max-w-xl">
            <x-panel accent="hot">
                <form action="/contact" method="POST" class="flex flex-col gap-6">
                    @csrf
                    <div>
                        <label for="name" class="block font-mono text-sm font-bold uppercase text-paper">Name</label>
                        <input id="name" name="name" type="text" required
                            class="mt-2 w-full border-2 border-mute bg-ink-950 px-4 py-3 text-paper placeholder:text-mute focus:border-volt focus-visible:ring-4 focus-visible:ring-volt/40 outline-hidden">
                    </div>
                    <div>
                        <label for="email" class="block font-mono text-sm font-bold uppercase text-paper">Email</label>
                        <input id="email" name="email" type="email" required
                            class="mt-2 w-full border-2 border-mute bg-ink-950 px-4 py-3 text-paper placeholder:text-mute focus:border-volt focus-visible:ring-4 focus-visible:ring-volt/40 outline-hidden">
                        @error('email')
                            <p class="mt-2 font-mono text-sm font-bold text-hot">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="message" class="block font-mono text-sm font-bold uppercase text-paper">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="mt-2 w-full border-2 border-mute bg-ink-950 px-4 py-3 text-paper placeholder:text-mute focus:border-volt focus-visible:ring-4 focus-visible:ring-volt/40 outline-hidden"></textarea>
                    </div>
                    <div>
                        <x-button type="submit" variant="primary">Send Message</x-button>
                    </div>
                </form>
            </x-panel>
        </div>
    </section>
@endsection