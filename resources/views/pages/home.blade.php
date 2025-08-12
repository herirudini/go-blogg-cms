<x-app-layout>
    <div class="flex flex-col md:flex-row gap-8">
        <div class="w-full md:w-3/4 lg:w-3/4">
            <x-card>
                <h3 class="mb-8 text-2xl text-left font-semibold">Latest Articles</h3>
                <ul class="mt-4 space-y-4">
                    @foreach($posts as $post)
                        <li class="flex border-b pb-2 items-start">
                            <img src="{{ asset('assets/images/landscape-placeholder-svgrepo-com.svg') }}" alt="Post Image 1"
                                class="w-16 h-16 mr-4 rounded">
                            <div class="text-left">
                                <h4 class="font-bold">{{ $post->title }}</h4>
                                <p class="text-gray-400">{{$post->category->name}}</p>
                                <p class="text-gray-600">{{ substr($post->content, 0, 50) }}...</p>
                                <a href="{{ route('post', ['data' => $post]) }}" class="text-blue-500 hover:underline">
                                    Read more
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </x-card>
        </div>

        <div class="w-full md:w-1/4 lg:w-1/4 mt-8 md:mt-0">
            <x-card>
                <h3 class="text-xl text-left font-semibold mb-4">Categories</h3>
                <ul class="space-y-2 text-left">
                    @foreach($categories as $category)
                        <li><a href="/?category_id={{ $category->id }}"
                                class="text-blue-500 hover:underline">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </x-card>
        </div>
    </div>
</x-app-layout>