<div tabindex="0"
    class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0 w-full">
    <el-dialog-panel
        class="relative transform overflow-hidden rounded-lg bg-gray-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
        <div class="bg-gray-800 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start w-full">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <h3 id="dialog-title" class="text-base font-semibold text-white mb-4 mt-4">Create Client</h3>
                    <div class="mt-4 w-full">
                        <form wire:submit.prevent="create">
                            <div class="mb-4 w-full">
                                <label for="name" class="block text-sm font-medium text-gray-300" style="text-align: left;">Name</label>
                                <input type="text" id="name" wire:model.defer="name"
                                    class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-300" style="text-align: left;">Email</label>
                                <input type="email" id="email" wire:model.defer="email"
                                    class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-sm font-medium text-gray-300" style="text-align: left;">Phone</label>
                                <input type="text" id="phone" wire:model.defer="phone"
                                    class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-300" style="text-align: left;">Address</label>
                                <input type="text" id="address" wire:model.defer="address"
                                    class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                                @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-700/25 p-4 mt-4 sm:flex sm:flex-row-reverse sm:px-6">
            <button type="button" x-on:click="showCreateClientModal = false"
                class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Cancel</button>
            <button type="button" x-on:click="showCreateClientModal = false"
                class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 sm:ml-3 sm:w-auto">Submit</button>
        </div>
    </el-dialog-panel>
</div>