<div>
    <div class="bg-white rounded-lg shadow-md p-4 w-full md:w-[500px]">
        <div class="my-4">
            <livewire:dashboard-category-create />

        </div>
        <div>

            <table class="min-w-full bg-white border border-gray-300 mt-6 ">
                <thead class="bg-blue-50 ">
                    <tr>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr class="bg-slate-50 " wire:key="category-{{$category->id}}">
                        <td class="px-4 py-2 border">{{ $category->name }}</td>
                        <td class="px-4 py-2 border">
                            <div class="flex flex-row items-center gap-2 justify-center">
                                <button class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-800 ring-1 ring-inset ring-blue-800/10" @click="$dispatch('dispatch-category-table-edit', {id: '{{$category->id}}' })">Edit</button>
                                <button class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20" @click="$dispatch('dispatch-category-table-detail', { id: '{{$category->id}}' })">Show</button>
                                <button class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-500/10" @click="$dispatch('dispatch-category-table-delete', {id: '{{$category->id}}', name: '{{$category->name}}' })">Delete</button>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

            <livewire:dashboard-category-destroy />
            <livewire:dashboard-category-edit />
            <livewire:dashboard-category-show />


        </div>
    </div>

</div>