<div>
    @section('title')
    Signin |
    @endsection

    <main class="h-screen w-full bg-[#603cf61c]">
        <div class="container mx-auto h-full flex justify-center flex-col items-center gap-8 relative">
            <a href="{{ route('signup') }}" wire:navigate class="absolute top-8 left-0 px-4 py-2 bg-blue-900 rounded shadow text-white"><i class="ri-arrow-left-long-line text-white me-1"></i>Back</a>
            <form wire:submit.prevent="check">
                @csrf
                <div class="shadow p-8 bg-white rounded border border-gray-200">
                    <h2 class="uppercase text-2xl bg-gray-500 text-white py-3 font-semibold text-center mb-8 border rounded">Signin</h2>
                    @if(session()->has('success'))
                    <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-4 font-medium text-sm">
                        <i class="ri-checkbox-circle-line me-1 text-base"></i>{{ session('success') }}
                    </div>
                    @endif

                    @if(session()->has('error'))
                    <div class="bg-green-200 text-red-800 px-4 py-2 rounded mb-4 font-medium text-sm">
                        <i class="ri-close-line me-1 text-base"></i>{{ session('error') }}
                    </div>
                    @endif
                    <div class="flex justify-center items-center gap-2 mb-5">
                        <a href="" class="text-red-800 font-medium text-2xl flex items-center gap-2 border border-gray-300 px-2 rounded-full">
                            <i class="ri-google-line"></i><span class="text-sm text-black font-medium">Signin with Google</span>
                        </a>
                        <a href="" class="text-blue-500 font-medium text-2xl flex items-center gap-2 border border-gray-300 px-2 rounded-full">
                            <i class="ri-facebook-circle-line"></i><span class="text-sm text-black font-medium">Signin with Facebook</span>
                        </a>
                    </div>
                    <div class="mb-3">
                        <p class="text-lg text-black font-medium">Email Id</p>
                        <input type="email" class="border py-1.5 rounded border-gray-400 outline-none px-2 w-full" wire:model="email" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-red-800 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <p class="text-lg text-black font-medium">Password</p>
                        <input type="password" class="border py-1.5 rounded border-gray-400 outline-none px-2 w-full" wire:model="password">
                        @error('password')
                        <span class="text-red-800 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="w-full py-2.5 text-lg bg-blue-800 cursor-pointer text-white rounded flex flex-row justify-center items-center gap-2">
                        <span wire:loading>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="motion-safe:animate-spin h-6">
                                <path d="M18.364 5.63604L16.9497 7.05025C15.683 5.7835 13.933 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19C15.866 19 19 15.866 19 12H21C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C14.4853 3 16.7353 4.00736 18.364 5.63604Z"></path>
                            </svg>
                        </span>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>