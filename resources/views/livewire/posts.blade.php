<div class=" mx-auto w-3/4 mt-2">
    <div class="flex content-center m-2 p-2">
        <x-jet-button wire:click="showCreatePostModal"> Create Post</x-jet-button>
    </div>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Image</th>
                        <th scope="col" class="relative px-6 py-3">Edit</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr></tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">id</td>
                        <td class="px-6 py-4 whitespace-nowrap">title</td>
                        <td class="px-6 py-4 whitespace-nowrap">Active</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img class="w-8 h-8 rounded-full" src="https://picsum.photos/200" />
                        </td>
                        <td class="px-6 py-4 text-right text-sm">Edit Delete</td>
                    </tr>
                    <!-- More items... -->
                    </tbody>
                </table>
                <div class="m-2 p-2">Pagination</div>
            </div>
        </div>
    </div>
    <x-jet-dialog-modal wire:model="showModalForm">
        <x-slot name="title"> Create Post </x-slot>
        <x-slot name="content"> Content </x-slot>
        <x-slot name="footer"> Footer </x-slot>
    </x-jet-dialog-modal>
</div>
