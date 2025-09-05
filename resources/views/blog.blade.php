<x-layoutMe title="blog">
    <article class="flex flex-col items-center justify-center gap-10 p-6">
        <p class="text-2xl"> Welcome to blog Amine Triki. With My Best Wishes That You Take Advantage Of It </p>
    </article>

    <section class="container mx-auto px-4 py-8">
        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($posts as $post)
                <div class="bg-white rounded-2xl shadow p-4 flex flex-col">
                    {{-- صورة المقال --}}
                    @if($post->image_url)
                        <img src="{{ asset('storage/'.$post->image_url) }}" alt="{{ $post->title }}" class="rounded-xl mb-3 w-full h-48 object-cover">
                    @endif

                    {{-- العنوان --}}
                    <h2 class="text-lg font-bold mb-2">{{ $post->title }}</h2>

                    {{-- المحتوى المختصر --}}
                    <p class="text-gray-600 text-sm mb-3">
                        {{ Str::limit($post->content, 100) }}
                    </p>

                    {{-- معلومات إضافية --}}
                    <div class="text-xs text-gray-500 flex justify-between items-center mt-auto">
                        <span>{{ $post->category->name ?? 'Uncategorized' }}</span>
                        <span>{{ $post->created_at->format('M d, Y') }}</span>
                    </div>

                    {{-- زر اقرأ المزيد --}}
                    <a href="{{ url('/post/'.$post->slug) }}"
                       class="mt-3 text-indigo-600 hover:underline font-medium text-sm">
                       Read More →
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-layoutMe>
