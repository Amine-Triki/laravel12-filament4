@php use Illuminate\Support\Str; @endphp

<x-layout :title="'Category: ' . $category->name">
    <section class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Category: {{ $category->name }}</h1>

        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($category->posts as $post)
                <div class="bg-white rounded-2xl shadow p-4 flex flex-col">
                    @if($post->image_url)
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="rounded-xl mb-3 w-full h-48 object-cover">
                    @endif

                    <h2 class="text-lg font-bold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 text-sm mb-3">
                        {{ Str::limit($post->content, 100) }}
                    </p>

                    <a href="{{ route('post.show', $post->slug) }}"
                       class="mt-auto text-indigo-600 hover:underline text-sm">
                        Read More →
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
