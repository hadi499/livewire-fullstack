<div class="w-[200px]">

    <x-button @click="$wire.set('modalCategoryCreate', true)">Create Post</x-button>

    <x-modal-tes wire:model.live="modalCategoryCreate" maxWidth="sm">

        <form wire:submit.prevent="store">
            <h1 class="text-xl font-semibold  p-4">Create Category</h1>
            <hr>

            <div class="space-y-2 p-4">
                <x-label for="name" value="Name" />
                <x-input wire:model="name" id="name" type="text" class="p-2 border w-full" autocomplete="off" required />
                <x-input-error for="name" class="mt-1" />
            </div>


            <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-end gap-3">

                <x-secondary-button @click="$wire.set('modalCategoryCreate', false)" wire:loading.attr="disabled">
                    Batal
                </x-secondary-button>

                <x-button class="ms-3" wire:loading.attr="disabled">
                    Simpan
                </x-button>
            </div>

        </form>
    </x-modal-tes>
</div>