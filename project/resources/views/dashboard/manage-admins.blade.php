<x-BaseComponent tailwindcss="true" remixicon="true" title="Manage Admins">
    <div class="relative overflow-x-auto">
        <div class="flex justify-between items-end mb-3">
            <div class="border px-2 py-1 rounded bg-white border-gray-300">
                {{ $admins->links() }}
            </div>
            <a href="{{ route('action', ['type' => 'add', 'userId' => Auth::id(), 'addType' => 'admin']) }}" wire:navigate class="py-2 px-4 bg-blue-700 text-white rounded">
                <i class="ri-add-circle-line me-1"></i>Add new
            </a>
        </div>
        <table class="w-full text-sm text-left rtl:text-right bg-blue-300 border border-gray-200">
            <thead class="text-base font-medium text-blue-900 uppercase">
                <tr>
                    <th scope="col" class="px-1 py-2 border-r border-gray-200 text-center">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                        Profile
                    </th>
                    <th scope="col" class="px-6 py-2 border-r border-gray-200 text-center">
                        Name
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
                    <th scope="row" class="px-6 py-3 text-sm font-medium text-black whitespace-nowrap border-r border-gray-200 text-center">
                        {!! $admin->is_active == 0 ? '<i class="ri-error-warning-line text-red-600 text-2xl"></i>' : '<i class="ri-checkbox-circle-line text-green-600 text-2xl"></i>' !!}
                    </th>
                    <td class="px-6 py-2 border-r border-gray-200 text-sm font-medium text-center">
                        <img src="{{ asset( 'storage/' . $admin->adminDetails->profile ?? '' ) }}" alt="{{ $admin->first_name . '-' . $admin->last_name }}" class="h-15 w-25 rounded mx-auto">
                    </td>
                    <th scope="row" class="px-6 py-3 text-sm font-medium text-black whitespace-nowrap border-r border-gray-200">
                        {{ $admin->first_name . ' ' . $admin->last_name }}
                    </th>
                    <td class="px-6 py-2 border-r border-gray-200 text-center text-sm font-medium">
                        {{ $admin->email }}
                    </td>
                    <td class="px-6 py-2 text-sm border-r border-gray-200 font-medium text-center">
                        {{ date('d-m-Y', strtotime($admin->adminDetails->valid_from)) }} to {{ date('d-m-Y', strtotime($admin->adminDetails->valid_to)) }}
                    </td>
                    <td class="px-6 pt-5 flex flex-row items-center justify-center gap-2">
                        <a wire:navigate href="{{ route('edit-admin', $admin->id) }}" class="text-sm border rounded p-1 px-2 font-medium text-blue-600 dark:text-blue-500 hover:bg-blue-600 hover:text-white transition duration-300">
                            <i class="ri-edit-line"></i>
                        </a>
                        <form method="post" action="{{ route('change-status', ['type' => $admin->role, 'id' => $admin->id ]) }}">
                            @csrf
                            <button type="submit" class="text-sm border rounded p-1 px-2 font-medium text-yellow-600 dark:text-yellow-500 hover:bg-yellow-600 hover:text-white transition duration-300 cursor-pointer">
                                <i class="ri-error-warning-line"></i>
                            </button>
                        </form>
                        <a wire:navigate href="{{ route('action', ['type' => 'delete', 'userId' => $admin->id]) }}" class="text-sm border rounded p-1 px-2 font-medium text-red-600 dark:text-red-500 hover:bg-red-600 hover:text-white transition duration-300">
                            <i class="ri-delete-bin-5-line"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-200">
                    <td class="px-6 py-3 text-gray-700 text-center text-base" colspan="6">
                        Oops! No data found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-BaseComponent>