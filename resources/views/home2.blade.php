<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Task Manager</title>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-lg font-semibold">Task Manager</h1>
            <a 
                href="/create" 
                class="bg-white text-blue-600 py-2 px-4 rounded hover:bg-gray-100 focus:outline-none focus:ring focus:ring-blue-300"
            >
                Create New Task
            </a>
        </div>
    </nav>
    

    <!-- Main Content -->
    <div class="container mx-auto mt-10 px-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Task List</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="py-3 px-6 text-left">Task Name</th>
                        <th class="py-3 px-6 text-left">Task Description</th>
                        <th class="py-3 px-6 text-center">Edit/Delete Task</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr class="border-b border-gray-200">
                        <td class="py-3 px-6">{{ $post->name }}</td>
                        <td class="py-3 px-6">{{ $post->description }}</td>
                        <td class="py-3 px-6 text-center">
                            <a 
                                href="{{route('edit',$post->id)}}"
                                class="bg-green-500 text-white py-1 px-3 rounded hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-300"
                            >
                                Edit
                            </a>
                            <a 
    href="{{route('delete',$post->id)}}"
    class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300"
>
    Delete
</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$posts->links()}}
        </div>
    </div>
</body>
</html>
