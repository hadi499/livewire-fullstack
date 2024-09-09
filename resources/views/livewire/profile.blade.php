<div class="flex  justify-center mt-10">
    <div class="flex w-[400px] flex-col gap-2 bg-slate-100 border-slate-500 shadow-lg p-4 rounded-md">
        <div class="flex gap-2 items-center">
            <img src="{{ Auth::user()->avatar_url }}" alt="" class="w-12 h-12 rounded-full object-cover">
            <span class="text-xl font-semibold">
                {{ Auth::user()->name }}
            </span>
        </div>
        <p>Email: {{ Auth::user()->email }}</p>
        <p>Birthday: {{ Auth::user()->birthday }}</p>
        <div class="mt-4">
            <x-button type="button" @click="$dispatch('dispatch-profile-table-edit', {id: '{{Auth::user()->id}}' })">Edit</x-button>

        </div>

    </div>

    <livewire:profile-edit />



</div>