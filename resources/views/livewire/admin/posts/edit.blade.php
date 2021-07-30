<div class="shadow sm:rounded-md sm:overflow-hidden">
    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">
                Post Title:
            </label>
            <div class="mt-1">
                <input rows="3" wire:model="title" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Post Title">
            </div>
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">
                Description
            </label>
            <div class="mt-1">
                <textarea rows="6" wire:model="description" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-md border border-gray-300 rounded-md"></textarea>
            </div>
            <p class="mt-2 text-sm text-gray-500">
                Brief description for the Post.
            </p>
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">
                Post Content:
            </label>
            <div class="mt-1">
                <textarea id="post_body" wire:model="content" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-md border border-gray-300 rounded-md"></textarea>
            </div>
            <p class="mt-2 text-sm text-gray-500">
                Provide the detailed content for the post - This field' height adjusts automatically
            </p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">
                Cover photo
            </label>
            <img src="{{ asset('images/uploads/'. $image) }}" alt="">
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">

                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" wire:model="image" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <div wire:loading wire:target="image">Uploading...</div>
                    <p class="text-xs text-gray-500">
                        PNG, JPG of size up to 3MB
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button wire:click="newFUnc({{ $p_id }})" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Edit Post
        </button>
    </div>
</div>