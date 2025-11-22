<x-layouts.app :title="__('Edit Student')">
    <div class="max-w-6xl mx-auto p-6 bg-black rounded-xl shadow-md grid grid-cols-2 gap-6">

        <!-- Left: Edit form -->
        <div>
            <h2 class="text-2xl font-bold mb-4 text-white">Edit Student</h2>

            <form action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-3">
                @csrf
                @method('PUT')

                <div>
                            <label class="mb-2 block text-sm font-medium text-white">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter student name"
                                required
                                class=" rounded-lg border border-neutral-300 bg-black px-4 py-2 text-sm text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                            @error('name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-white">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter email address"
                                required
                                class="w-full rounded-lg border border-neutral-300 bg-black px-4 py-2 text-sm text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-white">Phone</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Enter phone number"
                                required
                                class="w-full rounded-lg border border-neutral-300 bg-black px-4 py-2 text-sm text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                            @error('phone')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-white">Address</label>
                            <input type="text" name="address" value="{{ old('address') }}" placeholder="Enter address"
                                required
                                class="w-full rounded-lg border border-neutral-300 bg-black px-4 py-2 text-sm text-white focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                            @error('address')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                <div class="flex justify-between mt-4">
                    <a href="{{ route('dashboard') }}" class="bg-green-500 text-black font-semibold px-2 py-1 rounded-lg border border-white hover:bg-blue-700">Back</a>
                    <button type="submit" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg border border-white hover:bg-blue-700">Update Changes</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
