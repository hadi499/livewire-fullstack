<div class="flex justify-center mt-8">
    <div class="flex flex-col gap-2 p-8">
        <div class="w-[600px] flex flex-col gap-3 border shadow p-4">
            <div class="text-2xl font-semibold">
                {{$post->title}}
            </div>
            <img src="{{ $post->image_url }}" class="w-[400px] " alt="...">
            <div>{{$post->created_at}}</div>
            <div class="flex gap-1">
                @foreach ($post->categories as $category)
                <div class="bg-blue-200 px-1 text-sm rounded-md">
                    {{$category->name}}
                </div>
                @endforeach

            </div>
            <div>
                {!! $post->body !!}

            </div>
            <livewire:like-button :key="'like-' . $post->id" :$post />




        </div>
        <div class="my-3 border p-4 rounded-md shadow-md">
            <livewire:post-comments :post="$post">
        </div>

        <div class="flex justify-end">
            <button wire:click="back" class="bg-slate-700 text-white hover:bg-slate-600 text-sm p-2 rounded-md">Back to All Posts</button>
        </div>
    </div>

</div>