<x-BaseComponent tailwindcss="true" remixicon="true" title="Manage Enrollments">
    <table class="w-full text-sm text-left rtl:text-right bg-blue-300 border border-gray-200">
        <thead class="text-base font-medium text-blue-900 uppercase">
            <tr>
                <th scope="col" class="px-2 text-center py-3 border-r border-gray-200">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 border-r border-gray-200 text-center">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 border-r border-gray-200 text-center">
                    Email ID
                </th>
                <th scope="col" class="px-6 py-3 border-r border-gray-200 text-center">
                    Contact number
                </th>
                <th scope="col" class="px-6 py-3 border-r border-gray-200 text-center">
                    Organisation name
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
                    {!! $student->is_active == 0 ? '<i class="ri-error-warning-line text-red-600 text-2xl"></i>' : '<i class="ri-checkbox-circle-line text-green-600 text-2xl"></i>' !!}
                </th>
                <td class="px-6 py-4 border-r border-gray-400 text-sm font-medium text-center">
                    {{ $student->first_name . ' ' . $student->last_name }}
                </td>
                <td class="px-6 py-3 border-r border-gray-400 text-center text-base font-medium">
                    {{ $student->email }}
                </td>
                <td class="px-6 py-3 text-base border-r border-gray-400 font-medium text-center">
                    {{ $student->studentDetails->contact_number }}
                </td>
                <td class="px-6 py-3 text-base border-r border-gray-400 font-medium">

                </td>
                <td class="px-6 py-3 flex flex-row items-center justify-center gap-2">
                    <a href="#" class="text-base border rounded p-1 px-2 font-medium text-green-600 dark:text-green-500 hover:bg-green-600 hover:text-white transition duration-300">
                        <i class="ri-eye-line"></i>
                    </a>
                    <a href="#" class="text-base border rounded p-1 px-2 font-medium text-blue-600 dark:text-blue-500 hover:bg-blue-600 hover:text-white transition duration-300">
                        <i class="ri-edit-line"></i>
                    </a>
                    <a href="{{ route('action', ['type' => 'delete', 'userId' => $student->id]) }}" class="text-base border rounded p-1 px-2 font-medium text-red-600 dark:text-red-500 hover:bg-red-600 hover:text-white transition duration-300">
                        <i class="ri-delete-bin-5-line"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr class="bg-white dark:border-gray-700 border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-200">
                <td class="px-6 py-3 text-gray-700 text-center text-base" colspan="7">
                    Oops! No data found.
                </td>
            </tr>
            @endforelse
            {{ $students->links() }}
        </tbody>
    </table>
</x-BaseComponent>