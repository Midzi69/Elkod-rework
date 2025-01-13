<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Brand') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('brands.update', $brand->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <!-- Project Name -->
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold">Brand Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $brand->name) }}" class="mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>


                        <!-- Current Project Picture -->
                        <div class="mt-4">
                            <label for="current_picture" class="block text-gray-700 font-semibold">Current Brand Picture</label>
                            @if($brand->picture)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $brand->picture) }}" alt="Brand Picture" class="w-32 h-32 object-cover rounded">
                                </div>
                            @else
                                <span class="text-gray-500">No picture uploaded</span>
                            @endif
                        </div>

                      
                        <div class="mt-4">
                            <label for="picture" class="block text-gray-700 font-semibold">Change Brand Picture (Optional)</label>
                            <input type="file" name="picture" id="picture" class="mt-1 block w-full border border-gray-300 rounded-lg p-2">
                        </div>

                        <!-- Update Button -->
                        <div class="mt-4">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Project</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
