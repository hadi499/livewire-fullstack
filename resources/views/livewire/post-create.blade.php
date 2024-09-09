<!-- resources/views/livewire/register-form.blade.php -->
<div class="bg-blue-50 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-xl bg-white rounded-lg shadow-lg p-8 ">
        <h2 class="text-2xl font-bold text-center text-slate-800 mb-6">Create a Post</h2>

        <!-- Form Start -->
        <form wire:submit.prevent="store">
            <!-- Name -->
            <div class="mb-4">
                <label for="title" class="block text-slate-800  mb-2">Title</label>
                <input type="text" id="title" wire:model="title" class="w-full px-4 py-2 border border-blue-400 shadow-md rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 ">
                @if ($image)
                <div class="mb-2">
                    <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" class="w-28 border border-blue-400  rounded-lg shadow-md">
                </div>
                @endif
                <label for="image" class="block text-slate-800">Image</label>
                <input type="file" id="image" wire:model="image" class="text-sm">

                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4 border border-blue-400 shadow-md p-4 rounded-md">
                <label for="category" class="block text-slate-800 ">Choose Category:</label>
                @foreach ($categories as $category)
                <div>
                    <label class="text-sm text-slate-800">
                        <input
                            type="checkbox"
                            wire:model="selectedCategories"
                            value="{{ $category->id }}" />
                        {{ $category->name }}
                    </label>
                </div>
                @endforeach
                @error('selectedCategories') <span class="error">{{ $message }}</span> @enderror

            </div>


            <div class="mb-4">
                <label for="body" class="block text-slate-800  mb-2">Content</label>
                <input type="hidden" id="x" value={{$body}}>
                <trix-editor input="x" class="bg-white rounded-md px-4 border-blue-400 shadow-md"></trix-editor>
                @error('body') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>



            <!-- Submit Button -->
            <div class="flex gap-4 justify-end text-sm">
                <button wire:click="cancel" class=" px-4 py-2 rounded-lg hover:bg-gray-500 hover:text-white focus:outline-none">
                    Cancel
                </button>
                <button type="submit" class="bg-blue-700 text-white  px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save
                </button>
            </div>
        </form>
        <!-- Form End -->
    </div>
</div>



@script
<script>
    let trixEditor = document.getElementById("x")
    addEventListener("trix-blur", function(event) {
        @this.set('body', trixEditor.getAttribute('value'))
    })
</script>

@endscript