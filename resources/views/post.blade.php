<x-layoutMe :title="$post->title">
    <section class="container mx-auto px-4 py-8">
        <article class="bg-white rounded-2xl shadow p-6 mb-8">
            @if($post->image_url)
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="rounded-xl mb-4 w-full h-64 object-cover">
            @endif

            <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
            <div class="text-sm text-gray-500 mb-6">
                <span>{{ $post->category->name ?? 'Uncategorized' }}</span> •
                <span>{{ $post->created_at->format('M d, Y') }}</span>
            </div>

            <div class="prose max-w-none">
                {!! nl2br(e($post->content)) !!}
            </div>
        </article>

        <section class="mb-6">
            <h2 class="text-xl font-semibold mb-4">Comments ({{ $post->comments->count() }})</h2>

            @forelse ($post->comments as $comment)
                <div class="bg-gray-50 rounded-xl p-4 mb-3">
                    <div class="text-sm text-gray-600 mb-1">
                        {{ $comment->user->name ?? 'User' }} • {{ $comment->created_at->diffForHumans() }}
                    </div>
                    <h3 class="font-bold">{{ $comment->subject }}</h3>
                    <p>{{ $comment->message }}</p>
                </div>
            @empty
                <p class="text-gray-500">No comments yet.</p>
            @endforelse
        </section>

        @auth
            <form action="{{ route('comment.store', $post->id) }}" method="POST" class="bg-white shadow rounded-2xl p-4">
                @csrf
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 p-3 rounded-lg mb-3">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-3">
                    <label class="block text-sm font-medium">Subject</label>
                    <input type="text" name="subject" class="w-full border rounded-lg p-2" required>
                    @error('subject') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium">Message</label>
                    <textarea name="message" rows="4" class="w-full border rounded-lg p-2" required></textarea>
                    @error('message') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                    Submit
                </button>
            </form>
        @else
            <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 p-4 rounded-xl">
                Please <a href="{{ route('login') }}" class="underline">login</a> to add a comment.
            </div>
        @endauth
    </section>
</x-layoutMe>
