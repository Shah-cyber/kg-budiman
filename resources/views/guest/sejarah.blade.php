<x-app-layout :title="'Sejarah Kampung'">
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden font-sans">
        <!-- Background Image Container -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/kampung.png') }}"
                 alt="Latar Kampung"
                 class="w-full h-full object-cover">
            <!-- Gelapkan sedikit supaya teks jelas -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/25 to-black/35"></div>
        </div>

        <!-- Content Container (Centered and Responsive) -->
        <div class="relative z-10 text-center text-white p-6 max-w-6xl mx-auto">
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold mb-4 leading-tight drop-shadow-lg">
                Sejarah
                <span class="text-emerald-200"> Kampung Budiman</span>
            </h1>

            <p class="text-base md:text-lg font-light mb-12 max-w-3xl mx-auto px-4 drop-shadow-md">
                Berkhidmat untuk kemajuan dan kesejahteraan komuniti — merakam perjalanan, cerita dan usaha bersama.
            </p>

            <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                <a href="#timeline" class="inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-white px-5 py-3 rounded-lg shadow-md">
                    Lihat Garis Masa
                </a>
            </div>
        </div>
    </section>

    <main class="max-w-6xl mx-auto px-6 pb-10 mt-10">
        <!-- Timeline Section -->
        <section id="timeline" class="relative mt-10">
            <!-- Hiasan latar untuk garis masa (bukan hanya putih) -->
            <div class="absolute inset-0 -z-10 rounded-3xl overflow-hidden">
                <!-- Gradient lembut + corak svg yang subtle -->
                <div class="w-full h-full bg-gradient-to-br from-emerald-50 via-sky-50 to-amber-50 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900"></div>
                <svg class="absolute inset-0 w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                    <defs>
                        <pattern id="p" width="120" height="120" patternUnits="userSpaceOnUse" x="0" y="0">
                            <path d="M0 120 L120 0" stroke="rgba(0,0,0,0.03)" stroke-width="1"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#p)"></rect>
                </svg>
            </div>

            <!-- Garis pusat dengan gradient -->
            <div class="hidden md:block absolute inset-y-0 left-1/2 -translate-x-1/2 w-1.5 rounded-full bg-gradient-to-b from-emerald-400 via-sky-300 to-indigo-500 shadow-lg" aria-hidden="true"></div>

            <ul role="list" class="space-y-8 md:space-y-12 p-7">
                <!-- c. pre-1800 -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="1700" data-category="early">
                    <article class="group relative md:pr-8 md:pl-0 md:col-start-1 md:col-end-2 flex md:justify-end">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-emerald-300 to-emerald-500 flex items-center justify-center text-white font-semibold">c.1700</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Permulaan penempatan tebing sungai & akar kampung Melayu</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Catatan masyarakat dan kajian wilayah menunjukkan penempatan di tebing sungai Klang sebelum rekod kolonial formal. Kampung kecil bergantung kepada sumber banjaran sungai, memancing dan pertanian musiman.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-emerald-100 text-emerald-800">sejarah lisan</span>
                                                <span class="px-2 py-1 rounded-md bg-sky-100 text-sky-800">kehidupan sungai</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Akaun komuniti • Dataran banjir</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute right-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-emerald-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 19th century -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="1850" data-category="colonial">
                    <article class="group relative md:pl-8 md:col-start-2 md:col-end-3 flex">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-indigo-300 to-indigo-500 flex items-center justify-center text-white font-semibold">c.1850</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Perdagangan maritim & pengaruh kolonial</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Pembangunan pelabuhan dan trafik sungai membawa pengaruh: pedagang ke pasar kampung, perubahan guna tanah bagi ladang dan kegiatan perlombongan yang berkembang di rantau ini.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-indigo-100 text-indigo-800">perdagangan</span>
                                                <span class="px-2 py-1 rounded-md bg-amber-100 text-amber-800">ladang</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Rekod wilayah • Ingatan lisan</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute left-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-indigo-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- early 20th century -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="1900" data-category="colonial">
                    <article class="group relative md:pr-8 md:pl-0 md:col-start-1 md:col-end-2 flex md:justify-end">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-amber-300 to-amber-500 flex items-center justify-center text-white font-semibold">1900s</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Pekerjaan ladang & industri kecil</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Pertumbuhan industri getah dan bijih timah menyebabkan penduduk kampung bekerja di ladang, dermaga tebing sungai atau berniaga kecil — membina jaringan keluarga dan corak penempatan.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-amber-100 text-amber-800">getah</span>
                                                <span class="px-2 py-1 rounded-md bg-slate-100 text-slate-800">timah</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Rekod arkib • Rekod keluarga</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute right-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-amber-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- WWII -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="1942" data-category="war">
                    <article class="group relative md:pl-8 md:col-start-2 md:col-end-3 flex">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-rose-300 to-rose-500 flex items-center justify-center text-white font-semibold">1942</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Zaman perang & perpindahan komuniti</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Kesaksian penduduk mengingat gangguan semasa pendudukan Jepun: kekurangan, pemindahan sementara dan usaha bertahan di sepanjang sungai. Pemulihan selepas perang menguatkan ikatan sosial.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-rose-100 text-rose-800">pendudukan</span>
                                                <span class="px-2 py-1 rounded-md bg-slate-100 text-slate-800">pemulihan</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Sejarah lisan • Konteks rantau</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute left-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-rose-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 1950s-1970s growth -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="1960" data-category="growth">
                    <article class="group relative md:pr-8 md:pl-0 md:col-start-1 md:col-end-2 flex md:justify-end">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-sky-300 to-sky-500 flex items-center justify-center text-white font-semibold">1960s</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Pembinaan semula & migrasi</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Faktor ekonomi dan tarikan bandar membawa penduduk baru. Perumahan kecil bertambah, institusi komuniti seperti masjid, kedai dan sekolah tidak formal berkembang.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-sky-100 text-sky-800">urbanisasi</span>
                                                <span class="px-2 py-1 rounded-md bg-emerald-100 text-emerald-800">kehidupan komuniti</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Rekod tempatan • Temu bual penduduk</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute right-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-sky-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 1998 village formalised -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="1998" data-category="community">
                    <article class="group relative md:pl-8 md:col-start-2 md:col-end-3 flex">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-indigo-300 to-indigo-600 flex items-center justify-center text-white font-semibold">1998</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Pengiktirafan rasmi & naik taraf asas</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Perkampungan menerima pengiktirafan rasmi dan beberapa peningkatan infrastruktur — jalan akses, lampu jalan dan kutipan sampah yang lebih teratur, yang mengukuhkan kediaman jangka panjang.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-indigo-100 text-indigo-800">tadbir urus</span>
                                                <span class="px-2 py-1 rounded-md bg-amber-100 text-amber-800">infrastruktur</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Rekod jawatankuasa • Ingatan penduduk</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute left-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-indigo-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 2005 festival -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="2005" data-category="community">
                    <article class="group relative md:pr-8 md:pl-0 md:col-start-1 md:col-end-2 flex md:justify-end">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-emerald-300 to-emerald-600 flex items-center justify-center text-white font-semibold">2005</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Hari Budiman: festival komuniti bermula</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Dari sambutan kecil, Hari Budiman berkembang menjadi acara tahunan dengan makanan, persembahan dan gerai kraftangan — mengeratkan jaringan sosial dan ekonomi tempatan.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-emerald-100 text-emerald-800">budaya</span>
                                                <span class="px-2 py-1 rounded-md bg-slate-100 text-slate-800">ekonomi komuniti</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Nota penganjur • Akaun penduduk</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute right-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-emerald-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 2012 green corridor -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="2012" data-category="environment">
                    <article class="group relative md:pl-8 md:col-start-2 md:col-end-3 flex">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-emerald-300 to-emerald-600 flex items-center justify-center text-white font-semibold">2012</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Taman komuniti & koridor hijau</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Lot terbiar diubah menjadi kebun komuniti dan jalan selamat yang teduh. Inisiatif meningkat kualiti hidup, keselamatan makanan dan aktiviti antara generasi.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-emerald-100 text-emerald-800">penghijauan bandar</span>
                                                <span class="px-2 py-1 rounded-md bg-slate-100 text-slate-800">sukarelawan</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Nota projek • Laporan sukarelawan</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute left-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-emerald-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 2019 digital hub -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="2019" data-category="community">
                    <article class="group relative md:pr-8 md:pl-0 md:col-start-1 md:col-end-2 flex md:justify-end">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-sky-300 to-sky-600 flex items-center justify-center text-white font-semibold">2019</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Pusat literasi digital & program belia</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Dewan komuniti diperbaharui menawarkan kelas kod, kemahiran digital asas dan bengkel reka bentuk — mengurangkan jurang digital bagi golongan muda dan usahawan mikro.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-sky-100 text-sky-800">pendidikan</span>
                                                <span class="px-2 py-1 rounded-md bg-emerald-100 text-emerald-800">belia</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Log program • Kisah peserta</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute right-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-sky-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 2022 river restoration -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="2022" data-category="environment">
                    <article class="group relative md:pl-8 md:col-start-2 md:col-end-3 flex">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-emerald-400 to-emerald-700 flex items-center justify-center text-white font-semibold">2022</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Pembersihan sungai & penanaman asli</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Kerjasama penduduk, NGO dan pihak berkuasa membersihkan sampah sungai, menstabilkan tebing dan menanam spesis tempatan bagi memulihara habitat ikan dan burung.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-emerald-100 text-emerald-800">pemulihan</span>
                                                <span class="px-2 py-1 rounded-md bg-slate-100 text-slate-800">biodiversiti</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Laporan projek • Log sukarelawan</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute left-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-emerald-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>

                <!-- 2024 craft revival -->
                <li class="timeline-item md:grid md:grid-cols-2 md:items-start" data-year="2024" data-category="community">
                    <article class="group relative md:pr-8 md:pl-0 md:col-start-1 md:col-end-2 flex md:justify-end">
                        <div class="md:max-w-[520px] w-full">
                            <div class="relative">
                                <div class="p-5 rounded-2xl bg-white/70 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700 shadow backdrop-blur-sm">
                                    <div class="flex items-start gap-4">
                                        <div class="w-3/12 min-w-[64px]">
                                            <div class="w-16 h-16 rounded-lg bg-gradient-to-tr from-indigo-300 to-indigo-600 flex items-center justify-center text-white font-semibold">2024</div>
                                        </div>
                                        <div class="min-w-0 w-9/12">
                                            <h3 class="text-lg font-semibold leading-tight">Inisiatif kebangkitan kraftangan warisan</h3>
                                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">
                                                Geran mikro dan bengkel hujung minggu menggalakkan penjagaan ilmu tradisional — menggabungkan warisan, identiti dan peluang pasaran kecil serta pelancongan.
                                            </p>
                                            <div class="mt-3 flex flex-wrap gap-2 text-xs">
                                                <span class="px-2 py-1 rounded-md bg-indigo-100 text-indigo-800">warisan</span>
                                                <span class="px-2 py-1 rounded-md bg-amber-100 text-amber-800">mata pencarian</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 flex items-center gap-3 text-xs text-slate-600 dark:text-slate-400">
                                        <span>Nota projek • Kisah peserta</span>
                                        <button class="ml-auto text-xs px-3 py-1 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">Selanjutnya</button>
                                    </div>
                                </div>

                                <span class="hidden md:block absolute right-[-18px] top-10 w-6 h-6 rounded-full bg-white/90 dark:bg-slate-800 border border-slate-300 dark:border-slate-700 shadow-sm">
                                    <span class="block w-2 h-2 bg-indigo-600 rounded-full m-auto mt-1.5"></span>
                                </span>
                            </div>
                        </div>
                    </article>
                </li>
            </ul>
        </section>
    </main>

    <script>
        (function () {
            const items = Array.from(document.querySelectorAll('.timeline-item'));
            const searchEl = document.getElementById('search');
            const filterEl = document.getElementById('filterCategory');
            const sortEl = document.getElementById('sort');
            const themeToggle = document.getElementById('themeToggle');

            // Tema — simpan pilihan pengguna
            function applyTheme(dark) {
                if (dark) document.documentElement.classList.add('dark');
                else document.documentElement.classList.remove('dark');
            }
            const saved = localStorage.getItem('kb_theme');
            applyTheme(saved === 'dark');
            themeToggle.addEventListener('click', () => {
                const isDark = document.documentElement.classList.toggle('dark');
                localStorage.setItem('kb_theme', isDark ? 'dark' : 'light');
            });

            function normalize(str) {
                return (str || '').toString().toLowerCase();
            }

            function matchesSearch(item, query) {
                if (!query) return true;
                const text = [
                    item.querySelector('h3')?.textContent,
                    item.querySelector('p')?.textContent
                ].join(' ');
                return normalize(text).includes(normalize(query));
            }

            function matchesFilter(item, category) {
                if (!category || category === 'all') return true;
                return item.dataset.category === category;
            }

            function applyFilters() {
                const q = searchEl.value.trim();
                const cat = filterEl.value;
                items.forEach(it => {
                    const visible = matchesSearch(it, q) && matchesFilter(it, cat);
                    it.style.display = visible ? '' : 'none';
                });
                applySorting();
            }

            searchEl.addEventListener('input', applyFilters);
            filterEl.addEventListener('change', applyFilters);

            function applySorting() {
                const order = sortEl.value; // asc | desc
                const list = document.querySelector('#timeline ul');
                const visible = Array.from(items).filter(i => i.style.display !== 'none');
                visible.sort((a,b) => {
                    const ay = parseInt(a.dataset.year || '0', 10);
                    const by = parseInt(b.dataset.year || '0', 10);
                    return order === 'asc' ? ay - by : by - ay;
                });
                visible.forEach(v => list.appendChild(v));
            }
            sortEl.addEventListener('change', applySorting);

            // Jalankan pertama kali
            applyFilters();
        })();
    </script>

    <section class="py-16 md:py-20">
        <!-- Ruang penutup / footer ringkas jika mahu -->
    </section>
</x-app-layout>
