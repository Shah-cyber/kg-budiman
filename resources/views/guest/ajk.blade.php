<x-app-layout :title="'Ahli Jawatankuasa'">
    <!-- Hero Section -->
   <section class="relative h-screen flex items-center justify-center overflow-hidden font-sans">

        <!-- Background Image Container -->
        <div class="absolute inset-0">
            <!-- Placeholder for the actual image of the supermarket aisle -->
            <img src="{{ asset('images/ajk.jpg') }}"
                alt="Supermarket Aisle Background"
                class="w-full h-full object-cover">
                    
            <!-- Black/Dark Layer to ensure readability -->
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        <!-- Content Container (Centered and Responsive) -->
        <div class="relative z-10 text-center text-white p-6 max-w-6xl mx-auto">
            <!-- Main Title -->
            <h1 class="text-6xl sm:text-7xl lg:text-8xl font-black mb-6 leading-tight drop-shadow-lg">
                Ahli Jawatankuasa
                <!-- Accent text color using the vibrant accent variable -->
                <span > Kampung</span>
            </h1>

            <!-- Subtitle/Description -->
            <p class="text-lg md:text-xl font-light mb-16 max-w-3xl mx-auto px-4 drop-shadow-md">
                Berkhidmat untuk kemajuan dan kesejahteraan Kampung Budiman
            </p>

        </div>
    </section>
    <!-- Majlis Tertinggi -->

    <!-- AJK -->

</x-app-layout>