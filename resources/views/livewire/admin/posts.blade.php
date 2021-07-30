<div class="pt-12">
    <div class="justify-content-center px-4">
        <h1>POSTS & UPDATES</h1>
        <hr>
    </div>
    <div class="px-10 pt-12">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">

                <div class="mt-5 md:mt-0 md:col-span-2">

                    <form enctype="multipart/form-data">

                        <div>
                            @if(session()->has('message'))
                            <div class="bg-indigo-900 text-center py-4 lg:px-4 p-4">
                                <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                                    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Saved</span>
                                    <span class="font-semibold mr-2 text-left flex-auto">{{ session('message') }}</span>
                                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                    </svg>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700">
                                        Post Title:
                                    </label>
                                    <div class="mt-1">
                                        <input rows="3" wire:model="title" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Post Title">
                                        @error('title') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Description
                                    </label>
                                    <div class="mt-1">
                                        <textarea rows="6" wire:model="description" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-md border border-gray-300 rounded-md"></textarea>
                                        @error('description') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Brief description for the Post.
                                    </p>
                                </div>

                                <div wire:ignore>
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Post Content:
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="main_content" data-content="@this" wire:model="content" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-md border border-gray-300 rounded-md"></textarea>
                                        @error('content') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Provide the detailed content for the post - This field' height adjusts automatically
                                    </p>
                                </div>
                                
                                @if($viewMode)
                                <img src="{{ asset('images/uploads/'. $image) }}" alt="">
                                @else
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
                                @error('image') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                @endif
                            </div>
                            @if(!$viewMode)
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button id="submit" wire:click.prevent="savePost" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save Post
                                </button>
                            </div>
                            @endif
                        </div>

                    </form>
                </div>

                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Add Post | News | Updates</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Fill this form to add new Post.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="px-4 py-24 md:px-6 mx-auto w-full -m-24">
        <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">

                    @if(session()->has('delete'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">{{ session('delete') }}</strong>
                        <span class="block sm:inline">Success</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                    @endif

                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-lg text-blueGray-700">
                                    ALL Posts & Updates
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto">

                        <!-- Projects table -->
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        Post
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        Title
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        Description
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                        ACTIONS
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                                        <img src="{{ asset('images/uploads/'.$post->image) }}" class="h-12 w-12 bg-white rounded-full border" alt="..." />
                                        <span class="ml-3 font-bold text-blueGray-600">

                                        </span>
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{ $post->title }}
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{ $post->description }}
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <button wire:click="loadPostInfoToForm({{ $post }})" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            View
                                        </button>
                                        <button wire:click="deletePost({{ $post }})" class="bg-red-600 hover:bg-red-900 text-gray-50 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                            Delete
                                        </button>
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                                        <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-light-1-dropdown')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-light-1-dropdown">
                                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                                action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                                else here</a>
                                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                            <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                                link</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>