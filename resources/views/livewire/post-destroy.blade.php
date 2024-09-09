<div x-data="{ open: false }">

    <button @click="open = true" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">
        Delete
    </button>

    <!-- Modal Background -->
    @teleport('body')
    <div x-show="open" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50">
        <!-- Modal -->
        <div @click.away="open = false" class="bg-white p-6 flex flex-col items-center rounded shadow-lg max-w-sm w-full">

            <p class="mb-4 text-md font-thin">Are sure delete post item: <span class="text-lg ml-2 font-semibold">{{$post->title}}</span> ?</p>
            <div class="flex gap-3">

                <button @click="open = false" class="px-3 py-1 bg-blue-500 text-white rounded">
                    Cancel
                </button>
                <button wire:click="destroy" class="px-3 py-1 bg-red-500 text-white rounded">
                    Delete
                </button>

            </div>
        </div>
    </div>
    @endteleport
</div>