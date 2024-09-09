<div>

    <x-modal-tes wire:model.live="modalNoteDestroy" maxWidth="md">
        <p class="text-center text-slate-600 p-3">Apakah anda ingin menghapus item note ? </p>
        <hr>

        <div class="p-2">

            <p class="text-center"><strong>{{$title}}</strong></p>

        </div>



        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-end gap-3">
            <button class="border border-gray-500 hover:bg-gray-700 hover:text-white px-2 py-1 text-sm text-gray-700 rounded-md " @click.prevent="$wire.set('modalNoteDestroy', false)" wire:loading.attr="disabled">
                Batal
            </button>

            <button class="border border-red-500 hover:bg-red-700 hover:text-white px-2 py-1 text-sm text-red-700 rounded-md " @click="$wire.del()" wire:loading.class="opacity-50">
                Delete
            </button>

        </div>

    </x-modal-tes>

</div>