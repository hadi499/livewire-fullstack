<div>

    <x-dialog-modal wire:model.live="modalCategoryShow" maxWidth="md">
        <x-slot name="title">
            Detail Category
        </x-slot>

        <x-slot name="content">

            <table class="min-w-full bg-white border border-gray-300 mt-6 ">
                <thead class="bg-blue-50 ">
                    <tr>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Slug</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-slate-50 ">
                        <td class="px-4 py-2 border">{{ $name }}</td>
                        <td class="px-4 py-2 border">{{ $slug }}</td>
                    </tr>
                </tbody>
            </table>


        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCategoryShow', false)" wire:loading.attr="disabled">
                Close
            </x-secondary-button>


        </x-slot>
    </x-dialog-modal>

</div>