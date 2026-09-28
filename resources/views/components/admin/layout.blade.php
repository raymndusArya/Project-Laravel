<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <x-admin.navbar/>

        <main class="p-4 md:ml-64 min-h-screen pt-20 bg-gray-100 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>

    <!-- Sidebar -->
    <x-admin.sidebar/>
</body>
</html>
