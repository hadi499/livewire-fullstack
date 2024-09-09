<div class="flex justify-center mt-8">
    <div class="flex flex-col gap-2 p-8">
        <div class="w-[600px] flex flex-col gap-3 border shadow p-4">
            <div class="text-2xl ml-4 font-semibold">
                {{$post->title}}
            </div>
            <hr>
            <img src="{{ $post->image_url }}" class="w-[400px]" alt="...">
            <div class="text-sm text-slate-700 mt-3">{{ \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('l, d F Y H:i') }}</div>
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




        </div>
        <div class="my-3 border p-4 rounded-md shadow-md">
            <livewire:post-comments :post="$post">
        </div>

        <div class="flex justify-end">
            <button wire:click="back" class="bg-slate-700 text-white hover:bg-slate-600 text-sm p-2 rounded-md">Back to All Posts</button>
        </div>
    </div>

</div>