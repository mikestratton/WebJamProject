<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
{{--                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />--}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="48px" viewBox="195.421875 36.2 109.15625 77.6" style="background: rgba(0, 0, 0, 0);" preserveAspectRatio="xMidYMid"><defs><linearGradient id="editing-shiny-gradient" x1="0.04322727117869957" x2="0.9567727288213004" y1="0.2966316784620999" y2="0.7033683215379001" gradientUnits="objectBoundingBox"><stop offset="0.0" stop-color="#ffb200"/><stop offset="0.5" stop-color="#e10057"/><stop offset="1.0" stop-color="#5A1A80"/></linearGradient><linearGradient id="editing-shiny-gradient2" x1="0" x2="0" y1="0" y2="1"><stop offset="0.2" stop-color="#fff" stop-opacity="0.8"/><stop offset="0.8" stop-color="#fff" stop-opacity="0"/></linearGradient><filter id="editing-shiny2" x="-100%" y="-100%" width="300%" height="300%"><feMorphology operator="erode" radius="2"/></filter><filter id="editing-shiny" x="-100%" y="-100%" width="300%" height="300%"><feFlood flood-color="#fff" result="flood"/><feConvolveMatrix in="SourceGraphic" result="conv" order="8,8" divisor="1" kernelMatrix="0 0 0 0 0 0 0 0 0 0 0 1 1 0 0 0 0 0 0 1 1 0 0 0 0 0 1 0 0 1 0 0 0 0 1 0 0 1 0 0 0 1 0 0 0 0 1 0 0 1 1 0 0 1 1 0 0 0 0 1 1 0 0 0 "/><feOffset dx="0" dy="4" in="conv" result="offset"/><feComposite operator="in" in="flood" in2="offset" result="comp"/><feGaussianBlur in="offset" stdDeviation="3" result="shadow"/><feColorMatrix in="shadow" type="matrix" values="0.7 0 0 0 0  0 0.7 0 0 0  0 0 0.7 0 0  0 0 0 0.3 0" result="dark-shadow"/><feOffset dx="0" dy="4" in="dark-shadow" result="offset-shadow"/><feOffset dx="0" dy="2" in="conv" result="offset-2"/><feComposite operator="out" in="offset" in2="offset-2" result="edge-diff"/><feGaussianBlur in="edge-diff" stdDeviation="1" result="edge-blur"/><feColorMatrix in="edge-blur" result="edge-shadow" type="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 0.5 0"/><feComposite operator="in" in="edge-shadow" in2="offset" result="edge-shadow-in"/><feOffset dx="0" dy="1" in="edge-shadow-in" result="edge-shadow-final"/><feMerge result="out"><feMergeNode in="offset-shadow"/><feMergeNode in="comp"/><feMergeNode in="edge-shadow-final"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs><g filter="url(#editing-shiny)"><g transform="translate(217.61501717567444, 91.7400016784668)"><path d="M27.47-6.01L27.47-6.01Q25.09-2.74 22.81-1.01L22.81-1.01L22.81-1.01Q20.52 0.72 18.16 0.72L18.16 0.72L18.16 0.72Q15.80 0.72 14.98 0.25L14.98 0.25L14.98-7.67L14.98-7.67Q12.92-2.20 9.25-0.07L9.25-0.07L9.25-0.07Q7.92 0.72 6.66 0.72L6.66 0.72L6.66 0.72Q4.25 0.72 3.20 0.25L3.20 0.25L3.20 0.25Q2.95-7.99 2.74-10.28L2.74-10.28L2.74-10.28Q2.52-12.56 2.34-13.97L2.34-13.97L2.34-13.97Q1.98-16.78 0.76-17.93L0.76-17.93L0.76-17.93Q2.30-19.08 4.46-19.08L4.46-19.08L4.46-19.08Q8.64-19.08 9.22-13.90L9.22-13.90L9.22-13.90Q9.36-12.67 9.36-11.38L9.36-11.38L9.36-11.38Q9.36-9.43 8.93-2.66L8.93-2.66L8.93-2.66Q9.79-3.06 10.71-4.48L10.71-4.48L10.71-4.48Q11.63-5.90 12.38-7.85L12.38-7.85L12.38-7.85Q14.08-12.35 14.08-16.24L14.08-16.24L14.08-16.24Q14.08-16.85 13.91-17.50L13.91-17.50L13.91-17.50Q13.75-18.14 13.57-18.32L13.57-18.32L13.57-18.32Q14.83-19.08 16.76-19.08L16.76-19.08L16.76-19.08Q18.68-19.08 19.60-17.77L19.60-17.77L19.60-17.77Q20.52-16.45 20.77-14.04L20.77-14.04L20.77-14.04Q21.06-10.98 21.06-9.14L21.06-9.14L21.06-9.14Q21.06-6.59 20.81-2.81L20.81-2.81L20.81-2.81Q22.61-4.10 24.08-8.35L24.08-8.35L24.08-8.35Q25.56-12.60 25.56-15.62L25.56-15.62L25.56-15.62Q25.56-16.96 25.34-17.75L25.34-17.75L25.34-17.75Q26.53-19.08 28.58-19.08L28.58-19.08L28.58-19.08Q29.84-19.08 30.76-18.40L30.76-18.40L30.76-18.40Q31.68-17.71 31.68-16.43L31.68-16.43L31.68-16.43Q31.68-15.16 31.30-13.79L31.30-13.79L31.30-13.79Q30.92-12.42 30.31-11.02L30.31-11.02L30.31-11.02Q29.12-8.21 27.47-6.01L27.47-6.01ZM27.65 4.28L27.65 4.28L27.65 4.28Q29.52 4.14 30.89 1.80L30.89 1.80L30.89 1.80Q31.93 0 32.62-3.31L32.62-3.31L35.53-18.36L42.77-19.08L39.71-3.31L39.71-3.31Q38.52 2.70 36.68 4.68L36.68 4.68L36.68 4.68Q35.71 5.76 34.45 6.12L34.45 6.12L34.45 6.12Q33.19 6.48 31.75 6.48L31.75 6.48L31.75 6.48Q28.73 6.48 27.65 4.28ZM36.11-23.36L36.11-23.36L36.11-23.36Q36.11-24.77 37.28-25.52L37.28-25.52L37.28-25.52Q38.45-26.28 40.14-26.28L40.14-26.28L40.14-26.28Q41.83-26.28 42.86-25.52L42.86-25.52L42.86-25.52Q43.88-24.77 43.88-23.36L43.88-23.36L43.88-23.36Q43.88-21.96 42.75-21.24L42.75-21.24L42.75-21.24Q41.62-20.52 39.92-20.52L39.92-20.52L39.92-20.52Q38.23-20.52 37.17-21.24L37.17-21.24L37.17-21.24Q36.11-21.96 36.11-23.36ZM60.84-2.47L60.84-2.47L60.84-2.47Q59.33-0.94 57.26-0.11L57.26-0.11L57.26-0.11Q55.19 0.72 53.14 0.72L53.14 0.72L53.14 0.72Q51.08 0.72 50.36 0.36L50.36 0.36L49.25 6.48L41.94 7.20L46.91-18.36L52.78-18.97L52.31-16.49L52.31-16.49Q53.82-19.04 56.95-19.04L56.95-19.04L56.95-19.04Q60.48-19.04 62.35-16.78L62.35-16.78L62.35-16.78Q64.01-14.72 64.01-11.59L64.01-11.59L64.01-11.59Q64.01-8.46 63.18-6.23L63.18-6.23L63.18-6.23Q62.35-4.00 60.84-2.47ZM52.70-12.56L50.80-2.02L50.80-2.02Q51.55-1.37 52.49-1.37L52.49-1.37L52.49-1.37Q53.42-1.37 53.96-1.73L53.96-1.73L53.96-1.73Q54.50-2.09 54.90-2.81L54.90-2.81L54.90-2.81Q55.98-4.75 56.84-10.66L56.84-10.66L56.84-10.66Q57.10-12.38 57.10-14.08L57.10-14.08L57.10-14.08Q57.10-15.77 56.72-16.31L56.72-16.31L56.72-16.31Q56.34-16.85 55.62-16.85L55.62-16.85L55.62-16.85Q53.42-16.85 52.70-12.56L52.70-12.56Z" fill="url(#editing-shiny-gradient)"/></g></g><g filter="url(#editing-shiny2)"><g transform="translate(217.61502861976624, 91.74000358581543)"><path d="M27.47-6.01L27.47-6.01Q25.09-2.74 22.81-1.01L22.81-1.01L22.81-1.01Q20.52 0.72 18.16 0.72L18.16 0.72L18.16 0.72Q15.80 0.72 14.98 0.25L14.98 0.25L14.98-7.67L14.98-7.67Q12.92-2.20 9.25-0.07L9.25-0.07L9.25-0.07Q7.92 0.72 6.66 0.72L6.66 0.72L6.66 0.72Q4.25 0.72 3.20 0.25L3.20 0.25L3.20 0.25Q2.95-7.99 2.74-10.28L2.74-10.28L2.74-10.28Q2.52-12.56 2.34-13.97L2.34-13.97L2.34-13.97Q1.98-16.78 0.76-17.93L0.76-17.93L0.76-17.93Q2.30-19.08 4.46-19.08L4.46-19.08L4.46-19.08Q8.64-19.08 9.22-13.90L9.22-13.90L9.22-13.90Q9.36-12.67 9.36-11.38L9.36-11.38L9.36-11.38Q9.36-9.43 8.93-2.66L8.93-2.66L8.93-2.66Q9.79-3.06 10.71-4.48L10.71-4.48L10.71-4.48Q11.63-5.90 12.38-7.85L12.38-7.85L12.38-7.85Q14.08-12.35 14.08-16.24L14.08-16.24L14.08-16.24Q14.08-16.85 13.91-17.50L13.91-17.50L13.91-17.50Q13.75-18.14 13.57-18.32L13.57-18.32L13.57-18.32Q14.83-19.08 16.76-19.08L16.76-19.08L16.76-19.08Q18.68-19.08 19.60-17.77L19.60-17.77L19.60-17.77Q20.52-16.45 20.77-14.04L20.77-14.04L20.77-14.04Q21.06-10.98 21.06-9.14L21.06-9.14L21.06-9.14Q21.06-6.59 20.81-2.81L20.81-2.81L20.81-2.81Q22.61-4.10 24.08-8.35L24.08-8.35L24.08-8.35Q25.56-12.60 25.56-15.62L25.56-15.62L25.56-15.62Q25.56-16.96 25.34-17.75L25.34-17.75L25.34-17.75Q26.53-19.08 28.58-19.08L28.58-19.08L28.58-19.08Q29.84-19.08 30.76-18.40L30.76-18.40L30.76-18.40Q31.68-17.71 31.68-16.43L31.68-16.43L31.68-16.43Q31.68-15.16 31.30-13.79L31.30-13.79L31.30-13.79Q30.92-12.42 30.31-11.02L30.31-11.02L30.31-11.02Q29.12-8.21 27.47-6.01L27.47-6.01ZM27.65 4.28L27.65 4.28L27.65 4.28Q29.52 4.14 30.89 1.80L30.89 1.80L30.89 1.80Q31.93 0 32.62-3.31L32.62-3.31L35.53-18.36L42.77-19.08L39.71-3.31L39.71-3.31Q38.52 2.70 36.68 4.68L36.68 4.68L36.68 4.68Q35.71 5.76 34.45 6.12L34.45 6.12L34.45 6.12Q33.19 6.48 31.75 6.48L31.75 6.48L31.75 6.48Q28.73 6.48 27.65 4.28ZM36.11-23.36L36.11-23.36L36.11-23.36Q36.11-24.77 37.28-25.52L37.28-25.52L37.28-25.52Q38.45-26.28 40.14-26.28L40.14-26.28L40.14-26.28Q41.83-26.28 42.86-25.52L42.86-25.52L42.86-25.52Q43.88-24.77 43.88-23.36L43.88-23.36L43.88-23.36Q43.88-21.96 42.75-21.24L42.75-21.24L42.75-21.24Q41.62-20.52 39.92-20.52L39.92-20.52L39.92-20.52Q38.23-20.52 37.17-21.24L37.17-21.24L37.17-21.24Q36.11-21.96 36.11-23.36ZM60.84-2.47L60.84-2.47L60.84-2.47Q59.33-0.94 57.26-0.11L57.26-0.11L57.26-0.11Q55.19 0.72 53.14 0.72L53.14 0.72L53.14 0.72Q51.08 0.72 50.36 0.36L50.36 0.36L49.25 6.48L41.94 7.20L46.91-18.36L52.78-18.97L52.31-16.49L52.31-16.49Q53.82-19.04 56.95-19.04L56.95-19.04L56.95-19.04Q60.48-19.04 62.35-16.78L62.35-16.78L62.35-16.78Q64.01-14.72 64.01-11.59L64.01-11.59L64.01-11.59Q64.01-8.46 63.18-6.23L63.18-6.23L63.18-6.23Q62.35-4.00 60.84-2.47ZM52.70-12.56L50.80-2.02L50.80-2.02Q51.55-1.37 52.49-1.37L52.49-1.37L52.49-1.37Q53.42-1.37 53.96-1.73L53.96-1.73L53.96-1.73Q54.50-2.09 54.90-2.81L54.90-2.81L54.90-2.81Q55.98-4.75 56.84-10.66L56.84-10.66L56.84-10.66Q57.10-12.38 57.10-14.08L57.10-14.08L57.10-14.08Q57.10-15.77 56.72-16.31L56.72-16.31L56.72-16.31Q56.34-16.85 55.62-16.85L55.62-16.85L55.62-16.85Q53.42-16.85 52.70-12.56L52.70-12.56Z" fill="url(#editing-shiny-gradient2)"/></g></g><style>text {
                                    font-size: 64px;
                                    font-family: Arial Black;
                                    dominant-baseline: central;
                                    text-anchor: middle;
                                }</style></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('keys.index')" :active="request()->routeIs('keys.index')">
                        {{ __('Encryption') }}
                    </x-nav-link>
                    <x-nav-link :href="route('todos.index')" :active="request()->routeIs('todos.index')">
                        {{ __('Todos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('notes.index')" :active="request()->routeIs('notes.index')">
                        {{ __('Notes') }}
                    </x-nav-link>
                    <x-nav-link :href="route('images.index')" :active="request()->routeIs('images.index')">
                        {{ __('Images') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('keys.index')" :active="request()->routeIs('keys.index')">
                {{ __('Encryption') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('todos.index')" :active="request()->routeIs('todos.index')">
                {{ __('Todos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('notes.index')" :active="request()->routeIs('notes.index')">
                {{ __('Notes') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('images.index')" :active="request()->routeIs('uploads.index')">
                {{ __('Images') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
