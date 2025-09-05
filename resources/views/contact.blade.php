<x-layoutMe title="Contact">


    <section class="text-center py-5" id="Contact">
        <div class="container mx-auto px-4">

            <!-- Title -->
            <div class="font-bold my-5 relative">
                <h2 class="text-4xl my-3">Contact Me</h2>
                <p class="text-blue-600">Get in touch</p>
            </div>
            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded-lg my-3">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Flex Container -->
            <div id="flex" class="flex justify-center flex-wrap gap-6">

                <!-- Left: Info -->
                <div id="touch" class="flex-1 min-w-[300px]">
                    <div class="text-start mt-4">
                        <h3 class="text-3xl">Get in touch</h3>
                        <p class="mt-4 text-2xl">
                            If you have any questions or proposals, you can simply write to us.<br />
                            We will answer you as soon as possible.
                        </p>
                    </div>

                    <!-- Name -->
                    <div class="text-start flex items-center mt-4">
                        <!-- User Icon -->
                        <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2V19.2c0-3.2-6.4-4.8-9.6-4.8z" />
                        </svg>
                        <div class="text-2xl ml-2">
                            <b>Name :</b> Amine Triki
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="text-start flex items-center mt-4">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M12 21c-4.418 0-8-3.582-8-8 0-5.333 8-13 8-13s8 7.667 8 13c0 4.418-3.582 8-8 8z" />
                            <circle cx="12" cy="13" r="3" />
                        </svg>
                        <div class="text-2xl ml-2">
                            <b>Address :</b> Sakiet Ezzit, Sfax, Tunisia
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="text-start flex items-center mt-4">
                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M4 4h16v16H4z" />
                            <path d="M22,6 12,13 2,6" />
                        </svg>
                        <div class="text-2xl ml-2">
                            <b>Email :</b> amine.triki@live.com
                        </div>
                    </div>
                </div>

                <!-- Right: Form -->

                <form method="POST" action="{{ route('contact.send') }}" class="flex-1 min-w-[300px] mb-5 text-start mt-4">
                    @csrf
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <!-- First Name -->
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-900">First name</label>
                            <input id="first-name" name="first-name" type="text" autocomplete="given-name"
                                class="mt-2 block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-900 focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm" />
                        </div>

                        <!-- Last Name -->
                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-900">Last name</label>
                            <input id="last-name" name="last-name" type="text" autocomplete="family-name"
                                class="mt-2 block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-900 focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm" />
                        </div>

                        <!-- Email -->
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="mt-2 block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-900 focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm" />
                        </div>

                        <!-- Subject -->
                        <div class="col-span-full">
                            <label for="subject" class="block text-sm font-medium text-gray-900">Subject</label>
                            <input id="subject" name="subject" type="text"
                                class="mt-2 block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-900 focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm" />
                        </div>

                        <!-- Message (NEW) -->
                        <div class="col-span-full">
                            <label for="message" class="block text-sm font-medium text-gray-900">Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="mt-2 block w-full rounded-md border-gray-300 shadow-sm px-3 py-2 text-gray-900 focus:border-indigo-600 focus:ring-indigo-600 sm:text-sm"></textarea>
                        </div>

                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="bg-amber-950 my-4 text-white px-6 py-3 rounded-3xl hover:bg-amber-900 transition">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </section>



</x-layoutMe>
