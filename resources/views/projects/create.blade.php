<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Add New Project</h3>

                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-semibold">Project Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 font-semibold">Project Description</label>
                            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded-lg p-2" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="picture" class="block text-gray-700 font-semibold">Project Picture</label>
                            <input type="file" id="picture" name="picture" class="mt-1 block w-full border border-gray-300 rounded-lg p-2">
                        </div>

                        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Save Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
