<div>

    <x-dialog-modal wire:model.live="modalNoteShow">
        <x-slot name="title">
            Detail Note
        </x-slot>

        <x-slot name="content">
            <div class="border p-4 rounded-lg shadow">

                <div class="text-lg font-semibold">{{$title}}</div>
                <div class="mt-6">{!! $body !!}</div>

            </div>



        </x-slot>

        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalNoteShow', false)" wire:loading.attr="disabled">
                Close
            </x-secondary-button>


        </x-slot>
    </x-dialog-modal>

</div>