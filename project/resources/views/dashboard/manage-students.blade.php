<x-BaseComponent tailwindcss="true" remixicon="true" title="Manage Students">
    <div class="relative overflow-x-auto">
        <div class="flex justify-end items-end mb-3">
            <a href="" class="py-2 px-4 bg-blue-700 text-white rounded">
                <i class="ri-add-circle-line me-1"></i>Add new
            </a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right bg-blue-300 border border-gray-200">
            <thead class="text-base font-medium text-blue-900 uppercase">
                <tr>
                    <th scope="col" class="px-6 py-3 border-r border-gray-200">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 border-r border-gray-200 text-center">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 border-r border-gray-200 text-center">
                        Email ID
                    </th>
                    <th scope="col" class="px-6 py-3 border-r border-gray-200 text-center">
                        Tenure
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        <span>Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                <tr class="bg-white dark:border-gray-700 border-gray-200 hover:bg-gray-100 duration-300 transition dark:hover:bg-gray-100">
                    <th scope="row" class="px-6 py-3 text-base font-medium text-black whitespace-nowrap border-r border-gray-400">
                        {{ $student->first_name . ' ' . $student->last_name }}
                    </th>
                    <td class="px-6 py-4 border-r border-gray-400 text-sm font-medium text-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" {{ $student->status ? 'checked' : '1' ?? '' }} value="1" class="sr-only peer">
                            <div class="relative w-10 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2.5px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4.5 after:w-4.5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></div>
                        </label>
                    </td>
                    <td class="px-6 py-3 border-r border-gray-400 text-center text-base font-medium">
                        {{ $student->email }}
                    </td>
                    <td class="px-6 py-3 text-base border-r border-gray-400 font-medium">
                        {{ $student->tenure }}
                    </td>
                    <td class="px-6 py-3 flex flex-row items-center justify-center gap-2">
                        <a href="#" class="text-base border rounded p-1 px-2 font-medium text-blue-600 dark:text-blue-500 hover:bg-blue-600 hover:text-white transition duration-300">
                            <i class="ri-edit-line"></i>
                        </a>
                        <a href="#" class="text-base border rounded p-1 px-2 font-medium text-yellow-600 dark:text-yellow-500 hover:bg-yellow-600 hover:text-white transition duration-300">
                            <i class="ri-error-warning-line"></i>
                        </a>
                        <a href="#" class="text-base border rounded p-1 px-2 font-medium text-red-600 dark:text-red-500 hover:bg-red-600 hover:text-white transition duration-300">
                            <i class="ri-delete-bin-5-line"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr class="bg-white dark:border-gray-700 border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-200">
                    <td class="px-6 py-3 text-gray-700 text-center text-base" colspan="5">
                        Oops! No data found.
                    </td>
                </tr>
                @endforelse
                {{ $students->links() }}
            </tbody>
        </table>
    </div>
</x-BaseComponent>