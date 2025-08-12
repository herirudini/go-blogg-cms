<x-app-layout>
    <main class="container mx-auto mt-6 flex justify-center">
        <!-- Blog Article Section -->
        <section class="w-3/5">
            <x-card>
                <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
                <img src="{{ asset('assets/images/landscape-placeholder-svgrepo-com.svg') }}" alt="Post Image"
                    class="w-full object-cover rounded mb-4">
                <p class="text-gray-600 mb-4">Published on <span class="font-semibold">{{ $post->created_at->format('j F, Y') }}</span></p>
                <div class="text-gray-800 space-y-4">
                    <p>{{ $post->content }}</p>
                </div>
            </x-card>
        </section>
    </main>
</x-app-layout>