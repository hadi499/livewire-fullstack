<div>
    <div class="bg-white rounded-lg shadow-md p-4 sm:w-[600px] ">
        <div class="my-4">
            <livewire:note-create />

        </div>
        <div>

            <table class="w-full bg-white border border-gray-300 mt-6  ">
                <thead class="bg-blue-50 ">
                    <tr>
                        <th class="px-4 py-2 border">Title</th>
                        <th class="px-4 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notes as $note)
                    <tr class="bg-slate-50 " wire:key="note-{{$note->id}}">
                        <td class="px-4 py-2 border">{{ $note->title}}</td>
                        <td class="px-4 py-2 border   flex flex-col gap-1 sm:flex-row sm:justify-center sm:gap-3  items-center">
                            <x-button class="bg-green-700 hover:bg-green-600" @click="$dispatch('dispatch-note-table-detail', { slug: '{{$note->slug}}' })">Show</x-button>
                            <x-button type="button" @click="$dispatch('dispatch-note-table-edit', {id: '{{$note->id}}' })">Edit</x-button>
                            <x-danger-button @click="$dispatch('dispatch-note-table-delete', {id: '{{$note->id}}', title: '{{$note->title}}' })">Delete</x-danger-button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

            <livewire:note-show />
            <livewire:note-edit />
            <livewire:note-destroy />


        </div>
    </div>

</div>