<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="pt-20 bg-gray-50">
    <!-- pt-20 pushes content down so the fixed navbar doesn't cover it -->
    <nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-default">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-8 rounded-full" />
                <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">My Portfolio</span>
            </a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary">
                    <li><a href="/" class="block py-2 px-3 text-heading hover:text-fg-brand">Home</a></li>
                    <li><a href="/about" class="block py-2 px-3 text-heading hover:text-fg-brand">About</a></li>
                    <li><a href="/blog" class="block py-2 px-3 text-heading hover:text-fg-brand">Blog</a></li>
                    <li><a href="/contact" class="block py-2 px-3 text-heading hover:text-fg-brand">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content Goes Here -->
    <main class="max-w-screen-xl mx-auto p-4">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-200 mt-16">
        <div class="max-w-screen-xl mx-auto px-4 py-8 md:flex md:items-center md:justify-between">

            <!-- Identity & Location -->
            <div class="text-center md:text-left mb-6 md:mb-0">
                <span class="block text-lg font-semibold text-gray-900">Mario Ekadharma</span>
                <span class="block text-sm text-gray-500 mt-1">Software Developer based in Makassar</span>
            </div>

            <!-- Professional Links -->
            <ul class="flex flex-wrap justify-center md:justify-end gap-6 text-sm font-medium text-gray-600">
                <li>
                    <a href="https://github.com/" target="_blank"
                        class="hover:text-blue-600 transition-colors">GitHub</a>
                </li>
                <li>
                    <a href="https://linkedin.com/" target="_blank"
                        class="hover:text-blue-600 transition-colors">LinkedIn</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-blue-600 transition-colors">Email</a>
                </li>
            </ul>

        </div>

        <!-- Legal & Tech Stack -->
        <div class="max-w-screen-xl mx-auto px-4 pb-8 text-center md:text-left text-xs text-gray-400">
            &copy; {{ date('Y') }} Mario Ekadharma P. Ladjo. Built with Laravel & Tailwind.
        </div>
    </footer>
</body>

</html>