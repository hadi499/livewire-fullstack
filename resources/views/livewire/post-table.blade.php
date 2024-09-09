<div>


    <div class="mb-4 flex justify-end">
        <livewire:search-box />
    </div>
    @if($search)
    <div>home</div>
    @endif
    <div class="mb-4 flex gap-2 ">

        <button class="bg-blue-200 py-1 px-2 text-sm text-slate-800 rounded-sm" wire:click="allPosts">All</button>
        @foreach ($categories as $category)
        <a wire:navigate href="{{ route('posts', ['category' => $category->slug]) }}" class="bg-blue-200 p-1 text-sm text-slate-800 rounded-sm">
            {{ $category->name }}
        </a>
        @endforeach
    </div>


    <div class="p-4 border shadow-md rounded-lg">
        <a wire:navigate href="/posts/create" class=" p-2 text-sm bg-blue-600 text-white rounded-lg">Create Post</a>

        <table class="bg-white border border-gray-300 mt-6 ">
            <thead class="bg-blue-50">
                <tr>
                    <th class="px-4 py-2 border">Title</th>
                    <th class="px-4 py-2 border">Image</th>
                    <th class="px-4 py-2 border">Excerpt</th>
                    <th class="px-4 py-2 border">Category</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($this->posts as $post)
                <tr class="bg-slate-50" wire:key="post-{{ $post->id }}">
                    <td class="px-4 py-2 border">{{$post->title}}</td>
                    <td class="px-4 py-2 border">
                        <img src="{{ $post->image_url }}" class="w-10" alt="...">
                    </td>
                    <td class="px-4 py-2 border">{!! $post->getExcerpt() !!}</td>
                    <td class="px-4 py-2 border">
                        <div class="flex flex-row divide-y items-center gap-2 divide-gray-200">
                            @foreach ($post->categories as $category)
                            <span class="bg-blue-100 rounded-lg p-1 text-sm">
                                {{$category->name}}
                            </span>
                            @endforeach
                        </div>
                    </td>
                    <td class="px-4 py-2 border">
                        <div class="flex flex-row items-center gap-3">
                            <a wire:navigate href="{{ route('posts.edit', $post->slug) }}" class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Edit</a>
                            <a wire:navigate href="{{ route('posts.show', $post->slug) }}" class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Detail</a>
                            <livewire:post-destroy :post="$post" wire:key="post-destroy-{{ $post->id }}" />
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-6">
            {{$this->posts->links()}}
        </div>

    </div>



</div>