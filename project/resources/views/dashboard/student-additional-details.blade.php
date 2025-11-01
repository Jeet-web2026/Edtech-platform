<div>
    <x-BaseComponent tailwindcss="true" remixicon="true" title="Add student additional details">
        <form action="{{ route('enrollment-additional-details') }}" method="post" class="max-w-full mx-auto bg-gray-50 p-8 rounded shadow">
            @csrf

            <input type="number" value="{{ $studtid }}" class="hidden" name="student_id">
            <button type="submit" class="bg-blue-800 px-4 py-2 text-white rounded mt-4 cursor-pointer">Submit</button>
        </form>
    </x-BaseComponent>
</div>