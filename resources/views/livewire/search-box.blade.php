<div>
    <div class="flex">

        <div class="w-52 flex rounded-s-md bg-gray-100 py-2 px-2 mb-3 items-center border">

            <input wire:model="search"
                class="w-40 ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0 outline-none border-none text-xs text-gray-800 placeholder:text-gray-400"
                type="text" placeholder="Search...">
        </div>
        <button wire:click="update" class="bg-slate-300 px-3 h-[34px]  text-slate-700 hover:bg-blue-300 rounded-e-md shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>


        </button>
    </div>
</div>