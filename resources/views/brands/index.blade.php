<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brands') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Your Brands</h3>

                    <!-- Add Brand Button -->
                    <a href="{{ route('brands.create') }}" class="inline-block mb-4 bg-blue-600  py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">
                        Add Brand
                    </a>

                    <!-- Table container -->
                    <div class="overflow-x-auto rounded-lg shadow-md">
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="py-3 px-6 text-gray-700 font-semibold">Brand Name</th>
                                    <th class="py-3 px-6 text-gray-700 font-semibold">Picture</th>
                                    <th class="py-3 px-6 text-gray-700 font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($brands as $brand)
                                    <tr class="border-b hover:bg-gray-50 transition duration-200 ease-in-out">
                                        <td class="py-4 px-6 text-gray-800">{{ $brand->name }}</td>
                                        <td class="py-4 px-6 text-center">
                                            @if($brand->picture)
                                                <img src="{{ asset('storage/' . $brand->picture) }}" alt="Project Picture" class="w-16 h-16 object-cover rounded-full mx-auto">
                                            @else
                                                <span class="text-gray-500 text-sm">No picture available</span>
                                            @endif
                                        </td>
                                        <td class="py-4 px-6 flex items-center justify-center space-x-4">
                                            <a href="{{ route('brands.edit', $brand->id) }}" class="text-blue-600 hover:text-blue-800 transition duration-200 ease-in-out">Edit</a>

                                            <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this brand?');" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 transition duration-200 ease-in-out">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
