<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Mario Ekadharma | Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ink-900 font-sans text-paper antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[60] focus:bg-volt focus:px-4 focus:py-2 focus:text-ink-950">Skip to content</a>

    <nav class="sticky top-0 z-40 border-b-2 border-volt bg-ink-950" aria-label="Main">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between gap-2 p-4">
            <a href="/" class="flex items-center gap-3 font-display text-2xl uppercase tracking-wide text-volt">
                <img src="{{ asset('images/logo.jpg') }}" alt="" class="clip-cut h-9 w-9 object-cover" />
                My Portfolio
            </a>
            <ul class="flex flex-wrap gap-1 font-mono text-sm font-bold uppercase">
                @foreach (['/' => 'Home', '/about' => 'About', '/blog' => 'Blog', '/contact' => 'Contact'] as $path => $label)
                    <li>
                        <a href="{{ $path }}"
                            @if (request()->is(ltrim($path, '/') ?: '/')) aria-current="page" @endif
                            class="clip-slant block py-3 pl-3 pr-5 text-paper hocus:bg-volt hocus:text-ink-950 aria-[current=page]:bg-volt aria-[current=page]:text-ink-950">{{ $label }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>

    <main id="main" class="mx-auto max-w-screen-xl p-4">
        @yield('content')
    </main>

    <footer class="mt-16 border-t-2 border-ink-700">
        <div class="mx-auto max-w-screen-xl gap-6 px-4 py-8 md:flex md:items-center md:justify-between">
            <div>
                <p class="font-display text-2xl uppercase text-paper">Mario Ekadharma</p>
                <p class="font-mono text-sm text-mute">Software developer, Makassar</p>
            </div>
            <ul class="mt-4 flex flex-wrap gap-6 font-mono text-sm font-bold uppercase md:mt-0">
                <li><a href="https://github.com/" target="_blank" rel="noopener" class="text-paper underline decoration-2 underline-offset-4 hocus:text-volt">GitHub</a></li>
                <li><a href="https://linkedin.com/" target="_blank" rel="noopener" class="text-paper underline decoration-2 underline-offset-4 hocus:text-volt">LinkedIn</a></li>
                <li><a href="/contact" class="text-paper underline decoration-2 underline-offset-4 hocus:text-volt">Email</a></li>
            </ul>
        </div>
    </footer>

    <div class="scanlines pointer-events-none fixed inset-0 z-50 opacity-30 motion-reduce:hidden" aria-hidden="true"></div>
</body>
</html>