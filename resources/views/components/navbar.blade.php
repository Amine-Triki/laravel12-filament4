    <nav class="bg-gray-800" x-data="{ open: false }">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" @click="open = !open" :aria-expanded="open"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset">
                        <span class="sr-only">Open main menu</span>

                        <!-- Menu Closed Icon -->
                        <svg class="size-6" :class="{ 'hidden': open, 'block': !open }" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <!-- Menu Open Icon -->
                        <svg class="size-6" :class="{ 'block': open, 'hidden': !open }" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img src="{{ asset('assets/logo.webp') }}"
                            alt="logo amine triki" class="h-8 w-auto" />
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">

                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')"> home</x-nav-link>
                            <x-nav-link href="/blog" :active="request()->is('blog')">blog</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">contact</x-nav-link>
                            <x-nav-link href="/projects" :active="request()->is('projects')">projects</x-nav-link>
                            <x-nav-link href="/login" :active="request()->is('login')">logIn</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')">register</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button id="user-menu-button" type="button" aria-expanded="false" aria-haspopup="true"
                                class="relative flex rounded-full bg-gray-800 text-sm focus:outline-hidden focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="size-8 rounded-full" />
                            </button>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div id="mobile-menu" class="sm:hidden"x-show="open" x-transition>
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-nav-link href="/" :active="request()->is('/')" class="block text-base">home</x-nav-link>
                <x-nav-link href="/blog" :active="request()->is('blog')" class="block text-base">blog</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')" class="block text-base">contact</x-nav-link>
                <x-nav-link href="/projects" :active="request()->is('projects')" class="block text-base">projects</x-nav-link>
                <x-nav-link href="/login" :active="request()->is('login')" class="block text-base">logIn</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')" class="block text-base">register</x-nav-link>

            </div>
        </div>
    </nav>
