<x-BaseComponent tailwindcss="true" remixicon="true" title="Add Course">
    <main class="bg-white rounded border border-gray-300">
        <div class="flex flex-row items-center w-full border-b border-gray-300 p-2">
            <button class="py-2 w-1/2 bg-blue-700 text-white cursor-pointer" id="syllabus-setting">Syllabus Setting</button>
            <button class="py-2 w-1/2 bg-gray-100 cursor-pointer" id="courses-setting">Courses Setting</button>
        </div>
        <div>
            <div id="syllabus-setting-content" class="p-6">
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
            <div id="courses-setting-content" class="p-6 hidden">
                <div class="flex justify-between items-center">
                    <h4 class="text-xl font-semibold mb-4">Add New Course</h4>
                    <a href="{{ route('syllabus.index') }}" class="bg-blue-700 px-3 py-2 text-white rounded"><i class="ri-list-check-2 mr-1"></i>View All Courses</a>
                </div>
                <form action="{{ route('manage.store') }}" method="post" class="flex flex-col gap-4" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <label for="syllabus-name" class="text-lg">Syllabus Name</label>
                        <select name="syllabus-name" class="border border-gray-300 outline-none rounded px-2 py-2.5" id="syllabus-name">
                            <option value="">Choose a syllabus</option>
                        </select>
                        @error('syllabus-name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="university-name" class="text-lg">University name</label>
                        <select name="university-name" class="border border-gray-300 outline-none rounded px-2 py-2.5" id="university-name">
                            <option value="">Choose an university</option>
                        </select>
                        @error('university-name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="course-name" class="text-lg">Course name</label>
                        <input type="text" name="course-name" id="course-name" class="border border-gray-300 outline-none rounded px-2 py-2.5" value="{{ old('course-name') }}">
                        @error('course-name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col gap-2 w-1/2">
                            <select name="difficulty-level" class="border border-gray-300 outline-none rounded px-2 py-2.5" id="">
                                <option value="">Choose difficulty level</option>
                                <option value="beginer">Beginer</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advance">Advance</option>
                            </select>
                            @error('difficulty-level')
                            <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2 w-1/2">
                            <input type="text" name="course-fee" id="course-fee" class="border border-gray-300 outline-none rounded px-2 py-2.5" placeholder="Course fee" value="{{ old('course-fee') }}">
                            @error('course-fee')
                            <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex flex-col gap-2 w-1/2">
                            <select name="instructer-name" class="border border-gray-300 outline-none rounded px-2 py-2.5" id="instructer-name">
                                <option value="">Choose instructer</option>
                            </select>
                            @error('instructer-name')
                            <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2 w-1/2">
                            <input type="file" name="instructer-profile" id="instructer-profile" class="border border-gray-300 outline-none rounded px-2 py-2.5" title="Instructer profile" value="{{ old('instructer-profile') }}">
                            @error('instructer-profile')
                            <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="bg-blue-700 px-3 py-2 text-white rounded cursor-pointer w-fit">Add Course</button>
                </form>
            </div>
        </div>
    </main>
    @section('page-scripts')
    <script src="{{ asset('assets/js/coursesSettings.js') }}"></script>
    @endsection
</x-BaseComponent>