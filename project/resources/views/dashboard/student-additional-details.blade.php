<div>
    <x-BaseComponent tailwindcss="true" remixicon="true" title="Add student additional details">
        <form action="{{ route('enrollment-additional-details') }}" method="post" class="max-w-full mx-auto bg-gray-50 p-8 rounded shadow">
            @csrf
            <div class="flex flex-col lg:flex-row gap-2">
                <div class="w-1/2">
                    <label for="date_of_birth" class="block mb-1 font-medium text-gray-700">Date of birth</label>
                    <input type="date" name="date_of_birth" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('date_of_birth') }}">
                    @error('date_of_birth')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="bld_group" class="block mb-1 font-medium text-gray-700">Blood group</label>
                    <input type="text" name="bld_group" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('bld_group') }}">
                    @error('bld_group')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-2 mt-2">
                <div class="w-1/2">
                    <label for="course_name" class="block mb-1 font-medium text-gray-700">Course name</label>
                    <select name="course_name" id="course_name" class="w-full border border-gray-300 rounded px-3 py-2 outline-none">
                        <option value="">Select a course</option>
                    </select>
                    @error('course_name')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="admission_fees" class="block mb-1 font-medium text-gray-700">Admission fees</label>
                    <input type="text" name="admission_fees" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('admission_fees') }}" readonly>
                    @error('admission_fees')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-2 mt-2">
                <div class="w-1/2">
                    <label for="semester_fees" class="block mb-1 font-medium text-gray-700">Semester fees</label>
                    <input type="text" name="semester_fees" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('semester_fees') }}" readonly>
                    @error('semester_fees')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="total_semester" class="block mb-1 font-medium text-gray-700">Total semester</label>
                    <input type="text" name="total_semester" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('total_semester') }}" readonly>
                    @error('total_semester')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-2 mt-2">
                <div class="w-1/2">
                    <label for="examination_fees" class="block mb-1 font-medium text-gray-700">Examination fees</label>
                    <input type="text" name="examination_fees" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('examination_fees') }}" readonly>
                    @error('examination_fees')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="total_fee" class="block mb-1 font-medium text-gray-700">Total fee</label>
                    <input type="text" name="total_fee" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('total_fee') }}" readonly>
                    @error('total_fee')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-2 mt-2">
                <div class="w-1/2">
                    <label for="emergency_contact" class="block mb-1 font-medium text-gray-700">Emergency contact number</label>
                    <input type="tel" name="emergency_contact" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('emergency_contact') }}">
                    @error('emergency_contact')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label for="emergency_contact_person" class="block mb-1 font-medium text-gray-700">Emergency contact person</label>
                    <input type="text" name="emergency_contact_person" class="w-full border border-gray-300 rounded px-3 py-2 outline-none" value="{{ old('emergency_contact_person') }}">
                    @error('emergency_contact_person')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input type="number" value="{{ $studtid }}" class="hidden" name="student_id">
            <button type="submit" class="bg-blue-800 px-4 py-2 text-white rounded mt-4 cursor-pointer">Submit</button>
        </form>
    </x-BaseComponent>
</div>