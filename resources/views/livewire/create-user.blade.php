<div class="max-w-lg mx-auto mt-10">
    <form wire:submit.prevent="register" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 border">
        <h2 class="text-2xl text-center font-bold mb-4">Register</h2>



        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" wire:model="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" wire:model="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="birthday" class="block text-gray-700 text-sm font-bold mb-2">Your Birthday</label>
            <input type="text" wire:model="birthday" id="datepicker" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autocomplete="off">
            @error('birthday') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4 ">
            @if ($avatar)
            <div class="mb-2">
                <img src="{{ $avatar->temporaryUrl() }}" alt="Image Preview" class="w-28 border border-blue-400  rounded-lg shadow-md">
            </div>
            @endif
            <label for="avatar" class="block text-gray-700 text-sm font-bold mb-1">Choose your avatar</label>
            <input type="file" id="avatar" wire:model="avatar" class="text-sm">

            @error('avatar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" wire:model="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" wire:model="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>



        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Sign In
            </button>
        </div>
        <div class="text-sm text-thin mt-4 space-x-2 ">
            <span>Have member ?</span> <a href="/login" class="text-blue-600">Login</a>
        </div>
    </form>
</div>

@script
<script>
    let picker = new Pikaday({
        field: document.getElementById('datepicker'),
        format: 'D MMM YYYY',
        toString(date, format) {
            // you should do formatting based on the passed format,
            // but we will just return 'D/M/YYYY' for simplicity
            const day = String(date.getDate()).padStart(2, 0);
            const month = String(date.getMonth() + 1).padStart(2, 0);
            const year = date.getFullYear();
            return `${day}/${month}/${year}`;
        },
        onSelect: function() {
            // console.log(moment(this.getDate()).format('D MMM YYYY'));
            $wire.set('birthday', moment(this.getDate()).format('D MMM YYYY'), false);
        }
    });
</script>
@endscript