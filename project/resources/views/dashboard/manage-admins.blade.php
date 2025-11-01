<x-BaseComponent tailwindcss="true" remixicon="true" title="Manage Admins">
    <div class="relative overflow-x-auto">
        <div class="flex justify-end items-end mb-3">
            <a href="{{ route('action', ['type' => 'add', 'userId' => Auth::id(), 'addType' => 'admin']) }}" wire:navigate class="py-2 px-4 bg-blue-700 text-white rounded">
                <i class="ri-add-circle-line me-1"></i>Add new
            </a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right bg-blue-300 border border-gray-200">
            <thead class="text-base font-medium text-blue-900 uppercase">
                <tr>
                    <th scope="col" class="px-6 py-2 border-r border-gray-200">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                        Email ID
                    </th>
                    <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                        Tenure
                    </th>
                    <th scope="col" class="px-6 py-2 text-center">
                        <span>Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($admins as $admin)
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-100 duration-300 transition dark:hover:bg-gray-100">
                    <th scope="row" class="px-6 py-3 text-sm font-medium text-black whitespace-nowrap border-r border-gray-200">
                        {{ $admin->first_name . ' ' . $admin->last_name }}
                    </th>
                    <td class="px-6 py-2 border-r border-gray-200 text-sm font-medium text-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <form method="post" action="{{ route('change-status', ['type' => 'admin', 'id' => $admin->id ]) }}">
                                @csrf
                                <input type="checkbox" onchange="this.form.submit()" {{ $admin->is_active ? 'checked' : '1' ?? '' }} value="1" class="sr-only peer">
                                <div class="relative w-7 h-4 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2.5px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-3 after:w-3 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600"></div>
                            </form>
                        </label>
                    </td>
                    <td class="px-6 py-2 border-r border-gray-200 text-center text-sm font-medium">
                        {{ $admin->email }}
                    </td>
                    <td class="px-6 py-2 text-sm border-r border-gray-200 font-medium">
                        x
                    </td>
                    <td class="px-6 py-2 flex flex-row items-center justify-center gap-2">
                        <a href="#" class="text-sm border rounded p-1 px-2 font-medium text-blue-600 dark:text-blue-500 hover:bg-blue-600 hover:text-white transition duration-300">
                            <i class="ri-edit-line"></i>
                        </a>
                        <a href="" class="text-sm border rounded p-1 px-2 font-medium text-yellow-600 dark:text-yellow-500 hover:bg-yellow-600 hover:text-white transition duration-300">
                            <i class="ri-error-warning-line"></i>
                        </a>
                        <a href="{{ route('action', ['type' => 'delete', 'userId' => $admin->id]) }}" class="text-sm border rounded p-1 px-2 font-medium text-red-600 dark:text-red-500 hover:bg-red-600 hover:text-white transition duration-300">
                            <i class="ri-delete-bin-5-line"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-200">
                    <td class="px-6 py-3 text-gray-700 text-center text-base" colspan="5">
                        Oops! No data found.
                    </td>
                </tr>
                @endforelse
                {{ $admins->links() }}
            </tbody>
        </table>
    </div>
</x-BaseComponent>