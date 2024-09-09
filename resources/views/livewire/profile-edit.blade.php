<div>
    <x-modal-tes wire:model.live="modalProfileEdit">

        <form wire:submit.prevent="update" class="p-6">
            <h1 class="text-xl font-semibold my-3">Edit Profile</h1>
            <hr>

            <div>
                <div class="mb-4 mt-3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" wire:model.defer="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" wire:model.defer="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="birthday" class="block text-gray-700 text-sm font-bold mb-2">Your Birthday</label>
                    <input type="date" wire:model.defer="birthday" id="birthday" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4 ">
                    @if ($avatar)
                    <div>
                        <img src="{{ $avatar->temporaryUrl() }}" alt="Image Preview" class="w-28  rounded-lg shadow">
                    </div>
                    @endif

                    <label for="avatar" class="block text-gray-700 text-sm font-bold">Avatar</label>
                    <input type="file" id="avatar" wire:model.defer="avatar" class="text-sm">

                    @error('avatar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">New Password</label>
                    <input type="password" wire:model.defer="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" wire:model.defer="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>




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