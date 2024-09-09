<div>
    <x-modal-tes wire:model.live="modalCategoryEdit" maxWidth="sm">

        <form wire:submit.prevent="edit">
            <h1 class="text-xl font-semibold  p-4">Edit Category</h1>
            <hr>


            <div class="space-y-2 p-4">
                <x-label for="name" value="Name" />
                <x-input wire:model="name" id="name" type="text" class="p-2 border w-full " autocomplete="off" required />
                <x-input-error for="name" class="mt-1" />
            </div>


            <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-end gap-3">

                <button class="border border-gray-500 hover:bg-gray-700 hover:text-white px-2 py-1 text-sm text-gray-700 rounded-md " @click.prevent="$wire.set('modalCategoryEdit', false)" wire:loading.attr="disabled">
                    Batal
                </button>

                <button class="border border-blue-500 hover:bg-blue-700 hover:text-white px-2 py-1 text-sm text-blue-700 rounded-md " wire:loading.class="opacity-50">
                    Edit
                </button>
            </div>

        </form>
    </x-modal-tes>
</div>