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
                        <img src="{{ asset('assets/logo.webp') }}" alt="logo amine triki" class="h-8 w-auto" />
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">

                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')"> home</x-nav-link>
                            <x-nav-link href="/blog" :active="request()->is('blog')">blog</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">contact</x-nav-link>
                            <x-nav-link href="/projects" :active="request()->is('projects')">projects</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


                    <!-- Profile  -->
                    <div class="relative ml-3">
                        @guest
                            <!-- إذا المستخدم غير مسجّل -->
                            <div class="flex space-x-4">
                                <x-nav-link href="{{ route('login') }}" :active="request()->is('login')">Login</x-nav-link>
                                <x-nav-link href="{{ route('register') }}" :active="request()->is('register')">Register</x-nav-link>
                            </div>
                        @endguest

                        @auth
                            <!-- إذا المستخدم مسجّل -->
                            <div class="flex items-center space-x-4">
                                <!-- رابط للـ Dashboard -->
                                <x-nav-link href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
                                    Profile
                                </x-nav-link>

                                <!-- Logout -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        @endauth
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

            </div>
        </div>
    </nav>
