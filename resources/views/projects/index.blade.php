<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Your Projects</h3>

                    <!-- Add Project Button -->
                   
                    <a href="{{ route('projects.create') }}" class="inline-block mb-4 bg-green-600  py-2 px-6 rounded-lg hover:bg-green-700 transition duration-300 ease-in-out">
                        Add Project
                    </a>

                    <!-- Table container -->
                    <div class="overflow-x-auto rounded-lg shadow-md">
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="py-3 px-6 text-gray-700 font-semibold">Project Name</th>
                                    <th class="py-3 px-6 text-gray-700 font-semibold">Project Description</th>
                                    <th class="py-3 px-6 text-gray-700 font-semibold">Picture</th>
                                    <th class="py-3 px-6 text-gray-700 font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr class="border-b hover:bg-gray-50 transition duration-200 ease-in-out">
                                        <td class="py-4 px-6 text-gray-800">{{ $project->name }}</td>
                                        <td class="py-4 px-6 text-gray-600">{{ Str::limit($project->description, 50) }}</td>
                                        <td class="py-4 px-6 text-center">
                                            @if($project->picture)
                                                <img src="{{ asset('storage/' . $project->picture) }}" alt="Project Picture" class="w-16 h-16 object-cover rounded-full mx-auto">
                                            @else
                                                <span class="text-gray-500 text-sm">No picture available</span>
                                            @endif
                                        </td>
                                        <td class="py-4 px-6 flex items-center justify-center space-x-4">
                                            <a href="{{ route('projects.edit', $project->id) }}" class="text-blue-600 hover:text-blue-800 transition duration-200 ease-in-out">Edit</a>

                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');" class="inline">
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

                    @if($projects->isEmpty())
                        <p class="mt-4 text-gray-600">You have no projects at the moment.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
