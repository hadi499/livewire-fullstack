<div class="w-[200px]">
    <x-modal-tes wire:model.live="modalNoteEdit">
        <form wire:submit.prevent="edit" class="p-6">
            <h1 class="text-xl font-semibold my-3">Edit Form</h1>
            <hr>

            <div class="mb-3 mt-3 space-y-2">
                <x-label for="title" value="Name" />
                <x-input wire:model="title" id="title" type="text" class="p-2 border w-2/3" required />
                <x-input-error for="title" class="mt-1" />
            </div>


            <div class="flex flex-col gap-1">
                <label for="body" class="">Body</label>
                <input id="x2" type="hidden" name="body" wire:init="body" value="{{$body}}">
                <trix-editor input="x2" class="bg-white rounded-md"></trix-editor>


                @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div class="my-3 flex justify-end gap-5">

                <button class="border border-gray-500 hover:bg-gray-700 hover:text-white px-2 py-1 text-sm text-gray-700 rounded-md " @click.prevent="$wire.set('modalNoteEdit', false)" wire:loading.attr="disabled">
                    Batal
                </button>

                <button class="border border-blue-500 hover:bg-blue-700 hover:text-white px-2 py-1 text-sm text-blue-700 rounded-md " wire:loading.class="opacity-50">
                    Edit
                </button>
            </div>


        </form>

    </x-modal-tes>
</div>

@script
<script>
    let trixEditor = document.getElementById("x2")
    addEventListener("trix-blur", function(event) {
        @this.set('body', trixEditor.getAttribute('value'))
    })
</script>
@endscript