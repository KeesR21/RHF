<div class="p-4">
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="updateUser" enctype="multipart/form-data">

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

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" wire:model="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('name') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                    <input type="text" wire:model="email" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('email') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="#" class="block text-sm font-medium text-gray-700">Password</label>
                                    <input type="password" wire:model="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('password') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-span-6">
                                    <label for="#" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                    <input type="password" wire:model="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('password_confirmation') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="updateUser" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Edit User
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Provide Member' correct Information
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>