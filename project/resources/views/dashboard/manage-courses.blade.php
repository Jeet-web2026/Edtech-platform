<x-BaseComponent tailwindcss="true" remixicon="true" title="Manage Courses">
    <a href="{{ route('manage.index') }}" wire:navigate class="float-right bg-blue-600 px-3 py-2 mb-3 rounded text-white"><i class="ri-add-circle-line mr-1"></i>Add course</a>
    <table class="w-full text-sm text-left rtl:text-right bg-blue-300 border border-gray-200">
        <thead class="text-base font-medium text-blue-900 uppercase">
            <tr>
                <th scope="col" class="px-1 py-2 border-r border-gray-200 text-center">
                    Status
                </th>
                <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                    Picture
                </th>
                <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                    Course Name
                </th>
                <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                    Duration
                </th>
                <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                    Owner
                </th>
                <th scope="col" class="px-6 py-2 text-center">
                    <span>Action</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b border-gray-200 hover:bg-gray-100 duration-300 transition dark:hover:bg-gray-100">
                <th scope="row" class="px-6 py-3 text-sm font-medium text-black whitespace-nowrap border-r border-gray-200 text-center">

                </th>
                <td class="px-6 py-2 border-r border-gray-200 text-sm font-medium text-center">
                    <img src="" alt="" class="h-12 w-25 rounded mx-auto">
                </td>
                <th scope="row" class="px-6 py-3 text-sm font-medium text-black whitespace-nowrap border-r border-gray-200">

                </th>
                <td class="px-6 py-2 border-r border-gray-200 text-center text-sm font-medium">

                </td>
                <td class="px-6 py-2 text-sm border-r border-gray-200 font-medium text-center">

                </td>
                <td class="px-6 pt-4 flex flex-row items-center justify-center gap-2">
                    <a wire:navigate href="{{ route('manage.edit', 1) }}" class="text-sm border rounded p-1 px-2 font-medium text-blue-600 dark:text-blue-500 hover:bg-blue-600 hover:text-white transition duration-300">
                        <i class="ri-edit-line"></i>
                    </a>
                    <form method="post" action="">
                        @csrf
                        <button type="submit" class="text-sm border rounded p-1 px-2 font-medium text-yellow-600 dark:text-yellow-500 hover:bg-yellow-600 hover:text-white transition duration-300 cursor-pointer">
                            <i class="ri-error-warning-line"></i>
                        </button>
                    </form>
                    <a wire:navigate href="{{ route('manage.destroy', 1) }}" class="text-sm border rounded p-1 px-2 font-medium text-red-600 dark:text-red-500 hover:bg-red-600 hover:text-white transition duration-300">
                        <i class="ri-delete-bin-5-line"></i>
                    </a>
                    <a wire:navigate href="" class="text-sm border rounded p-1 px-2 font-medium text-green-600 dark:text-green-500 hover:bg-green-600 hover:text-white transition duration-300">
                        <i class="ri-sticky-note-add-line"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</x-BaseComponent>