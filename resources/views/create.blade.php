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
                href="/home2" 
                class="bg-white text-blue-600 py-2 px-4 rounded hover:bg-gray-100 focus:outline-none focus:ring focus:ring-blue-300"
            >
                Go Back
            </a>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container mx-auto mt-10 p-6 bg-white rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Create New Task</h2>
        <form action="{{route('store')}}" method="POST" class="space-y-4">
            @csrf
            <!-- Task Name -->
            <div>
                <label for="task-name" class="block text-gray-700 font-medium">Task Name</label>
                <input 
                    type="text"  
                    name="name"
                    value="{{old('name')}}" 
                    required 
                    class="w-full mt-2 p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-300"
                >
            </div>
            <!-- Task Description -->
            <div>
                <label for="task-description" class="block text-gray-700 font-medium">Task Description</label>
                <input 
                    type="text" 
                    name="description" 
                    value="{{old('description')}}"
                    required 
                    class="w-full mt-2 p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-300"
                >
            </div>
            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
