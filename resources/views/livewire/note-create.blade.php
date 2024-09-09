<div class="w-[200px]">

    <x-button @click="$wire.set('modalNoteCreate', true)">Create Post</x-button>

    <x-modal-tes wire:model.live="modalNoteCreate" submit="store">
        <form wire:submit.prevent="store">
            <h1 class="text-xl font-semibold  p-4">Create a Note</h1>
            <hr>

            <div class="space-y-2 p-4">
                <x-label for="title" value="Title" />
                <x-input wire:model="title" id="title" type="text" class="p-2 border w-2/3" required />
                <x-input-error for="title" class="mt-1" />
            </div>
            <div class="flex flex-col gap-1 p-4">
                <label for="body" class="">Body</label>
                <input id="x1" type="hidden" name="body" wire:init="body" value="{{$body}}">
                <trix-editor input="x1" class="bg-white rounded-md"></trix-editor>


                @error('body')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-end gap-3">

                <x-secondary-button @click="$wire.set('modalNoteCreate', false)" wire:loading.attr="disabled">
                    Batal
                </x-secondary-button>

                <x-button class="ms-3" wire:loading.attr="disabled">
                    Simpan
                </x-button>
            </div>

        </form>


    </x-modal-tes>
</div>


@script
<script>
    let trixEditor = document.getElementById("x1")
    addEventListener("trix-blur", function(event) {
        @this.set('body', trixEditor.getAttribute('value'))
    })
</script>
@endscript