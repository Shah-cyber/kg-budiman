<x-admin-layout :title="'Budiman Biz Hub'">
    <div class="p-4 sm:p-6 lg:p-8">
        <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Senarai Perniagaan</h2>
                <a href="{{ route('admin.bizhub.create') }}" class="inline-block px-4 py-2 text-sm bg-secondary text-white rounded-lg shadow hover:bg-primary-dark transition duration-300 transform hover:scale-[1.02]">
                    Daftar Perniagaan Baru
                </a>
            </div>

            {{-- search --}}
            <div class="mb-6">
                <label for="search" class="sr-only">Cari Perniagaan</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <!-- Search Icon (Lucide) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 dark:text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <input type="text" id="search" name="search" 
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-lg shadow-sm focus:border-secondary-500 focus:ring-secondary-500 dark:text-white text-sm" 
                           placeholder="Cari mengikut Nama Perniagaan atau Keterangan...">
                </div>
            </div>

            {{-- table senarai ajk [no., gambar, nama ajk, jawatan, no. telefon ,action(edit, delete)] --}}
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-md">
                    <thead class="bg-gray-100 dark:bg-gray-800">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">No.</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Gambar</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Nama Perniagaan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Keterangan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">No. Telefon</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">1</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{-- random image --}}
                                    <img  src="https://picsum.photos/seed/sports1/150/100" alt="Gambar Perniagaan" class="w-full h-full object-cover transition-opacity duration-300">                                    
                                    {{-- <img class="h-10 w-30 bg-primary/20"> --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">Kedai Runcit Ah Cheng</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">Menjual pelabagai barangan kering dan basah.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">0123456726</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('admin.bizhub.edit', 1) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                                    <form action="#" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Adakah anda pasti mahu memadam perniagaan ini?')">Padam</button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>