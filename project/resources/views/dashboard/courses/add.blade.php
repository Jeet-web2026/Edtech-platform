<x-BaseComponent tailwindcss="true" remixicon="true" title="Add Course">
    <main class="bg-white rounded border border-gray-300">
        <div class="flex flex-row items-center w-full border-b border-gray-300 p-2">
            <button class="py-2 w-1/2 bg-blue-700 text-white cursor-pointer">Syllabus Setting</button>
            <button class="py-2 w-1/2 bg-gray-100 cursor-pointer">Courses Setting</button>
        </div>
        <div>
            <div class="p-6">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl font-semibold mb-4">Add New Syllabus</h4>
                    <a href="{{ route('syllabus.index') }}" class="bg-blue-700 px-3 py-2 text-white rounded"><i class="ri-list-check-2 mr-1"></i>View All Syllabus</a>
                </div>
                <form action="{{ route('syllabus.store') }}" method="post" class="flex flex-col gap-4" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <label for="course-name" class="text-lg">Syllabus Name</label>
                        <input type="text" name="course-name" id="course-name" class="border border-gray-300 outline-none rounded px-2 py-2.5" value="{{ old('course-name') }}">
                        @error('course-name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="course-duration" class="text-lg">Duration</label>
                        <input type="text" name="course-duration" id="course-duration" class="border border-gray-300 outline-none rounded px-2 py-2.5" value="{{ old('course-duration') }}">
                        @error('course-duration')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="bg-blue-700 px-3 py-2 text-white rounded cursor-pointer w-fit">Add Syllabus</button>
                </form>
            </div>
        </div>
    </main>
</x-BaseComponent>