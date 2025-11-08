<x-admin-layout :title="'Aktiviti'">

    <!-- Tambah padding menyeluruh (kiri, kanan, atas, bawah) -->
    <div class="p-4 sm:p-6 lg:p-8">

        {{-- Menggunakan style button/pill tabs dengan gradient. --}}
        <div class="mb-4">
            
            <!-- Navigation Links: Menggunakan route untuk navigasi dan memenuhkan lebar skrin -->
            <ul class="flex w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400" role="tablist">

                {{-- Tentukan route aktif di sini untuk kegunaan dalam kelas Tailwind --}}
                @php
                    $isAktivitiActive = request()->routeIs('admin.aktiviti.*');
                    $isPengungumanActive = request()->routeIs('admin.pengunguman.*');
                @endphp

                <!-- Tab 1: Senarai Ahli Jawatankuasa (Route: admin.ajk.index) -->
                <li class="flex-1 me-2" role="presentation">
                    <a href="{{ route('admin.aktiviti.index') }}"
                        class="inline-block w-full px-4 py-3 rounded-lg transition duration-300 transform hover:scale-[1.01]
                        {{-- Logik Kelas Aktif: Guna gradient primary-tertiary --}}
                        @if ($isAktivitiActive)
                            text-white bg-linear-to-r from-primary to-tertiary shadow-xl shadow-primary-500/50 active font-semibold
                        @else
                            hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white
                        @endif
                        "
                        aria-current="{{ $isAktivitiActive ? 'page' : 'false' }}">
                        Senarai Aktiviti
                    </a>
                </li>

                <!-- Tab 2: Senarai Fasiliti (Route: admin.fasiliti.index) -->
                <li class="flex-1" role="presentation">
                    <a href="{{ route('admin.pengunguman.index') }}"
                        class="inline-block w-full px-4 py-3 rounded-lg transition duration-300 transform hover:scale-[1.01]
                        {{-- Logik Kelas Aktif: Guna gradient primary-tertiary --}}
                        @if ($isPengungumanActive)
                            text-white bg-linear-to-r from-primary to-tertiary shadow-xl shadow-primary-500/50 active font-semibold
                        @else
                            hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white
                        @endif
                        "
                        aria-current="{{ $isPengungumanActive ? 'page' : 'false' }}">
                        Senarai Pengunguman
                    </a>
                </li>
            </ul>
        </div>

       <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Tambah Fasiliti</h2>
                
            </div>
            <form action="{{ route('admin.fasiliti.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Fasiliti</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-dark dark:focus:border-primary-dark" required>
                </div>

                <div>
                    <label for="jawatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Keterangan</label>
                    <input type="text" name="jawatan" id="jawatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-dark dark:focus:border-primary-dark" required>
                </div>

                <div>
                    <label for="no_telefon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Link Lokasi</label>
                    <input type="text" name="no_telefon" id="no_telefon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-dark dark:focus:border-primary-dark" required>
                </div>

                <div>
                    <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar Fasiliti</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary
                    focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-dark dark:focus:border-primary-dark" required>
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">Format yang disokong: JPG, JPEG, PNG. Saiz maksimum: 2MB.</div>
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('admin.aktiviti.index') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:underline">Kembali ke Senarai</a>
                    
                    <button type="submit" class="px-4 py-2 bg-primary text-white rounded-lg shadow hover:bg-primary-dark transition duration-300 transform hover:scale-[1.02]">Simpan Fasiliti</button>
                </div>
            </form>

        </div>


    </div>

</x-admin-layout>