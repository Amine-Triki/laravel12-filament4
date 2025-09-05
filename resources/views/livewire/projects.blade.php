<main>
    <section class="text-center py-5">
        <div class="container mx-auto">
            <div class="font-bold my-5 relative">
                <h2 class="text-4xl my-3">My Projects</h2>
                <p>What I build</p>
            </div>

            {{-- Switcher --}}
            <ul class="switcher my-10 bg-pink-500 text-white flex flex-wrap justify-center gap-2 p-3 rounded-lg">
                @foreach (['all', 'JavaScript', 'Wordpress', 'React'] as $category)
                    <li
                        class="cursor-pointer px-5 py-2 text-sm md:text-base lg:text-lg font-semibold transition
                               {{ $activeCategory === $category ? 'bg-pink-800 rounded-lg' : 'hover:bg-pink-700 rounded-lg' }}"
                        wire:click="setCategory('{{ $category }}')"
                    >
                        {{ $category === 'all' ? 'All works' : $category }}
                    </li>
                @endforeach
            </ul>

            {{-- Projects Gallery --}}
            <div class="gallery text-start">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 xl:grid-cols-4 ">
                    @forelse ($filteredProjects as $project)
                        <div class="post flex flex-col hover:scale-105 transition-transform duration-300">
                            <div class="flex flex-col h-full rounded-2xl p-3 overflow-hidden shadow-lg bg-white">
                                <img src="{{ asset($project['imageSrc']) }}" class="w-full"  alt="{{ $project['title'] }}" />
                                <div class="px-6 py-4 flex-grow flex flex-col">
                                    <h5 class="font-bold text-xl mb-2">{{ $project['title'] }}</h5>
                                    <p class="text-gray-700 text-base flex-grow">
                                        {{ $project['description'] }}
                                    </p>
                                    <div class="flex justify-around mt-4">
                                        @if ($project['category'] !== 'Wordpress' && $project['github'])
                                            <a href="{{ $project['github'] }}"
                                               class="bg-pink-500 text-white px-3 py-2 rounded-2xl hover:bg-pink-600"
                                               target="_blank" rel="noreferrer">
                                                Github
                                            </a>
                                        @endif
                                        @if ($project['link'])
                                            <a href="{{ $project['link'] }}"
                                               class="bg-cyan-500 text-white px-3 py-2 rounded-2xl hover:bg-cyan-600"
                                               target="_blank" rel="noreferrer">
                                                Preview
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No projects found in this category.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</main>
