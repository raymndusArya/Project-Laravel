<x-admin.layout>
    @php
        $students = [
            ['nis' => 'Nis 1', 'name' => 'Nama 1', 'classroom' => 'X RPL 1'],
            ['nis' => 'Nis 2', 'name' => 'Nama 2', 'classroom' => 'X RPL 1'],
            ['nis' => 'Nis 4', 'name' => 'Nama 3', 'classroom' => 'X RPL 2'],
            ['nis' => 'Nis 5', 'name' => 'Nama 4', 'classroom' => 'X TKJ 1'],
            ['nis' => 'Nis 5', 'name' => 'Nama 5', 'classroom' => 'X TKJ 1'],
            ['nis' => 'Nis 6', 'name' => 'Nama 6', 'classroom' => 'XI RPL 1'],
            ['nis' => 'Nis 7', 'name' => 'Nama 7', 'classroom' => 'XI RPL 2'],
            ['nis' => 'Nis 8', 'name' => 'Nama 8', 'classroom' => 'XI TKJ 1'],
            ['nis' => 'Nis 9', 'name' => 'Nama 9', 'classroom' => 'XI TKJ 2'],
            ['nis' => 'Nis 10', 'name' => 'Nama 10', 'classroom' => 'XII RPL 1'],
            ['nis' => 'Nis 11', 'name' => 'Nama 11', 'classroom' => 'XII RPL 2'],
            ['nis' => 'Nis 12', 'name' => 'Nama 12', 'classroom' => 'XII TKJ 1'],
        ];
    @endphp

    <div>
        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Students</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400">Daftar siswa</p>
            </div>
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                + Add Student
            </button>
        </div>

        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">NIS</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Class room</th>
                        <th scope="col" class="px-6 py-3">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $student['nis'] }}</td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $student['name'] }}
                            </th>
                            <td class="px-6 py-4">{{ $student['classroom'] }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <a href="#"
                                        class="px-3 py-1.5 text-xs font-medium text-blue-700 border border-blue-700 rounded-lg hover:bg-blue-700 hover:text-white focus:ring-4 focus:ring-blue-300 dark:text-blue-500 dark:border-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">
                                        Edit
                                    </a>
                                    <a href="#"
                                        class="px-3 py-1.5 text-xs font-medium text-red-700 border border-red-700 rounded-lg hover:bg-red-700 hover:text-white focus:ring-4 focus:ring-red-300 dark:text-red-500 dark:border-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:ring-red-900">
                                        Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
