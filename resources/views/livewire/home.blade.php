<div class="max-w-7xl mt-16 mx-auto">
    <div class="mb-4 flex justify-end">
        <livewire:search-box />
    </div>
    <div class="mb-4">

        @if ( $search)
        <button class="mr-2 py-1 px-2 bg-blue-200 rounded-full font-semibold text-xs gray-500" wire:click="clearFilters()">X</button>
        @endif
        @if ($search)
        <span class="ml-2">
            {{ __('blog.containing') }} : <strong>{{ $search }}</strong>
        </span>

    </div>
    @endif
    @if ($this->posts->isEmpty())
    <div class="text-center text-gray-700">
        <p>No post found.</p>
        <div class="mt-6">
            <a wire:navigate href="/" class="bg-blue-100 py-1 px-2 rounded-md hover:bg-blue-700 hover:text-white">back</a>

        </div>
    </div>
    @else
    <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($this->posts as $post)
        <div class="bg-white overflow-hidden border shadow-md rounded-lg">
            <div class="flex items-center text-sm bg-gray-100 p-2">
                <img class="rounded-full mr-2 w-8 h-8"
                    src="{{$post->author->avatar_url}}"
                    alt="">
                <div class="">
                    <span class="font-semibold">{{$post->author->name}}</span>
                    <span class="text-xs  text-slate-700">{{$post->created_at->diffForHumans()}}</span>

                </div>
            </div>

            <a wire:navigate href="{{ route('home.show', $post->slug) }}">
                <img src="{{ $post->image_url }}" class="w-full h-48 object-fill rounded-md " alt="{{ $post->title }}">

            </a>
            <div class="bg-gray-100 p-3">


                <div>
                    @foreach ($post->categories as $category)
                    <span class="rounded-sm p-1 text-sm text-blue-600">
                        #{{$category->name}}

                    </span>
                    @endforeach
                </div>
                <div class="space-y-1">
                    <h2 class="text-xl font-semibold ">{{ $post->title }}</h2>
                    <p>{{ $post->getExcerpt() }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="my-6">

        {{$this->posts->links()}}

    </div>
    @endif
</div>