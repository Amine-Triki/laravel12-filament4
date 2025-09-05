<x-layout title="Home">

    <head>
        <style>
            @keyframes icon-bounce-scale {

                0%,
                100% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.2);
                }
            }

            .animate-bounce-scale {
                animation: icon-bounce-scale 1.5s infinite;
            }
        </style>
    </head>

    <article class="flex flex-col lg:flex-row items-center justify-center gap-10 p-6  ">
        <!-- Text Section -->
        <section class="max-w-md sm:max-w-lg space-y-4 my-10">
            <p class="text-base">Hello, I am</p>
            <h1 class="text-4xl font-bold">Amine Triki</h1>
            <h2 class="text-2xl font-semibold">I am Junior full stack developer</h2>
            <x-typing-effect />

            <p class="text-lg">
                Tunisian web developer specializing in modern, responsive websites and apps. Experienced with React,
                Next.js, Express, Laravel, and WordPress design
            </p>


            <!-- Download Resume Button -->
            <a href="https://mega.nz/file/WIciFbZK#giPo5Q3uIrClf12Truz60TxZoW6vnC6sTZyXNA9QbKk" target="_blank"
                rel="noopener noreferrer"
                class="inline-block bg-blue-400 text-white font-bold px-5 py-3 rounded-xl shadow hover:underline">
                Download Resume
            </a>

            <!-- Social Icons -->
            <div class="flex gap-4 mt-4 flex-wrap">
                <!-- GitHub -->
                <a href="https://github.com/Amine-Triki" target="_blank" class="animate-bounce-scale">
                    <svg class="w-10 h-10 text-gray-800 hover:text-yellow-500 transition-colors" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.26.82-.578 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.333-1.753-1.333-1.753-1.09-.745.082-.73.082-.73 1.205.085 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.998.108-.776.418-1.305.762-1.605-2.665-.305-5.467-1.335-5.467-5.932 0-1.31.467-2.382 1.235-3.222-.123-.304-.535-1.527.117-3.176 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 0 1 3.003-.404c1.018.005 2.045.138 3.003.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.65.24 2.872.118 3.176.77.84 1.235 1.912 1.235 3.222 0 4.61-2.807 5.624-5.48 5.92.43.37.823 1.1.823 2.215 0 1.6-.015 2.885-.015 3.277 0 .32.217.694.825.576C20.565 21.797 24 17.297 24 12c0-6.63-5.373-12-12-12z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/amine-triki-tn/" target="_blank" class="animate-bounce-scale">
                    <svg class="w-10 h-10 text-blue-600 hover:text-yellow-500 transition-colors" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M20.452 20.452H16.9v-5.356c0-1.277-.023-2.918-1.78-2.918-1.782 0-2.055 1.39-2.055 2.827v5.447H9.514V9h3.4v1.561h.047c.474-.9 1.633-1.848 3.362-1.848 3.594 0 4.26 2.366 4.26 5.444v6.295zM5.337 7.433a1.987 1.987 0 1 1 0-3.973 1.987 1.987 0 0 1 0 3.973zM6.904 20.452H3.771V9h3.133v11.452z" />
                    </svg>
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/amine.triki.1998" target="_blank" class="animate-bounce-scale">
                    <svg class="w-10 h-10 text-blue-700 hover:text-yellow-500 transition-colors" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24h11.5v-9.294H9.692V11.41h3.133V8.692c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.794.143v3.24h-1.918c-1.505 0-1.797.716-1.797 1.763v2.31h3.594l-.468 3.296h-3.126V24h6.127C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                    </svg>
                </a>

                <!-- YouTube -->
                <a href="https://www.youtube.com/@aminetrikitv" target="_blank" class="animate-bounce-scale">
                    <svg class="w-10 h-10 text-red-600 hover:text-yellow-500 transition-colors" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M23.498 6.186a2.974 2.974 0 0 0-2.09-2.104C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.408.582a2.974 2.974 0 0 0-2.09 2.104A31.533 31.533 0 0 0 0 12a31.53 31.53 0 0 0 .502 5.814 2.974 2.974 0 0 0 2.09 2.104C4.495 20.5 12 20.5 12 20.5s7.505 0 9.408-.582a2.974 2.974 0 0 0 2.09-2.104A31.53 31.53 0 0 0 24 12a31.533 31.533 0 0 0-.502-5.814zM9.75 15.5v-7l6.5 3.5-6.5 3.5z" />
                    </svg>
                </a>

                <!-- X (Twitter) -->
                <a href="https://x.com/Mr_Amine_Triki" target="_blank" class="animate-bounce-scale">
                    <svg class="w-10 h-10 text-gray-800 hover:text-yellow-500 transition-colors" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26L22 21.75h-6.687l-5.243-6.832-6.002 6.832H.758l7.73-8.79L2 2.25h6.828l4.713 6.231 4.703-6.231z" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="https://www.instagram.com/mr_amine_triki/" target="_blank" class="animate-bounce-scale">
                    <svg class="w-10 h-10 text-pink-600 hover:text-yellow-500 transition-colors" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.24 2.427.403a4.92 4.92 0 0 1 1.75 1.145 4.92 4.92 0 0 1 1.145 1.75c.163.457.347 1.257.403 2.427.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.403 2.427a4.92 4.92 0 0 1-1.145 1.75 4.92 4.92 0 0 1-1.75 1.145c-.457.163-1.257.347-2.427.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.427-.403a4.92 4.92 0 0 1-1.75-1.145 4.92 4.92 0 0 1-1.145-1.75c-.163-.457-.347-1.257-.403-2.427C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.97.403-2.427a4.92 4.92 0 0 1 1.145-1.75 4.92 4.92 0 0 1 1.75-1.145c.457-.163 1.257-.347 2.427-.403C8.416 2.175 8.796 2.163 12 2.163zm0 1.837c-3.17 0-3.548.012-4.796.07-1.013.046-1.562.216-1.926.36-.485.188-.83.413-1.195.778a3.09 3.09 0 0 0-.778 1.195c-.144.364-.314.913-.36 1.926-.058 1.248-.07 1.626-.07 4.796s.012 3.548.07 4.796c.046 1.013.216 1.562.36 1.926.188.485.413.83.778 1.195.365.365.71.59 1.195.778.364.144.913.314 1.926.36 1.248.058 1.626.07 4.796.07s3.548-.012 4.796-.07c1.013-.046 1.562-.216 1.926-.36.485-.188.83-.413.778-1.195.365-.365.59-.71.778-1.195.144-.364.314-.913.36-1.926.058-1.248.07-1.626.07-4.796s-.012-3.548-.07-4.796c-.046-1.013-.216-1.562-.36-1.926a3.09 3.09 0 0 0-.778-1.195 3.09 3.09 0 0 0-1.195-.778c-.364-.144-.913-.314-1.926-.36-1.248-.058-1.626-.07-4.796-.07zm0 3.89a5.946 5.946 0 1 1 0 11.892 5.946 5.946 0 0 1 0-11.892zm0 1.837a4.109 4.109 0 1 0 0 8.218 4.109 4.109 0 0 0 0-8.218zm6.406-2.963a1.44 1.44 0 1 1 0 2.88 1.44 1.44 0 0 1 0-2.88z" />
                    </svg>
                </a>
            </div>
            <a href="https://www.freelancer.com/u/Mramis?sb=t&frm=Mramis" target="_blank" rel="noopener noreferrer"
                class="mt-6 inline-block animate-bounce bg-gradient-to-r from-blue-500 via-indigo-500 to-indigo-600 text-white font-bold px-5 py-3 rounded-xl shadow-lg hover:from-pink-700 hover:via-red-700 hover:to-yellow-600 transition-colors">
                Hire Me
                <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </section>

        <!-- Image Section -->
        <section class="my-10">
            <img src="/amine triki.webp" alt="Amine Triki image"
                class="w-72 sm:w-80 md:w-96 lg:w-[430px] rounded-2xl shadow-lg object-cover object-top">
        </section>
    </article>
</x-layout>
