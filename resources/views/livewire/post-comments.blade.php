<div class="px-3">
    <div>
        <h5>
            <span class="mb-3 text-md font-semibold text-slate-600">{{$total_comment}} </span>
            <span class="mb-3 text-sm  text-slate-600">Comments</span>
        </h5>
    </div>
    <div class="my-3">
        @auth
        <form wire:submit.prevent="store">
            <div class="mb-1">
                <textarea wire:model.defer="body" rows="2"
                    class="w-full outline-blue-400 p-4 shadow text-sm text-slate-600 border rounded-lg @error('body') border-red-500 @enderror"
                    placeholder="Tulis komentar..."></textarea>
                @error('body')
                <div class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="flex justify-end mr-2">
                <button type="submit" class=" p-1 border border-blue-400 text-blue-500 hover:bg-blue-500 hover:text-white rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 14l11 -11" />
                        <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                    </svg>
                </button>
            </div>
        </form>
        @else
        <div class="px-2" wire:click="redirectToLogin">
            <div class="mb-3">
                <textarea wire:model.defer="body" rows="2"
                    class="w-full p-2 border rounded-lg @error('body') border-red-500 @enderror"
                    placeholder="Tulis komentar..."></textarea>
                @error('body')
                <div class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 14l11 -11" />
                        <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" />
                    </svg>
                </button>
            </div>
        </div>

        @endauth

    </div>

    @foreach ($comments as $comment)
    <div class="mb-3 w-full" wire:key="{{$comment->id}}">
        <div class="flex items-start">
            <img class="rounded-full mr-2 w-8 h-8"
                src="{{$comment->user->avatar_url}}"
                alt="">
            <div>
                <div class="">
                    <span class="text-md text-slate-600 font-semibold">{{$comment->user->name}}</span>
                    <span class="text-xs  text-slate-600">{{$comment->created_at->diffForHumans()}}</span>
                </div>
                <div class=" mb-2 text-gray-600 text-sm">
                    {{$comment->body}}
                </div>


            </div>
        </div>
    </div>


    @endforeach

</div>