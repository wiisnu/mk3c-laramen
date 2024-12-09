<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <title>Avenged Sevenfold - Album</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-[#1a1a1a] text-white min-h-screen flex flex-col" x-data="{ 
    showModal: false,
    selectedAlbum: null,
    async showAlbumDetails(albumId) {
        const response = await fetch(`/album/${albumId}`);
        const data = await response.json();
        this.selectedAlbum = data.album;
        this.showModal = true;
    }
}">
    <header class="fixed top-0 left-0 right-0 bg-black/70 p-5 flex justify-between items-center z-50">
        <a href="home.html" class="text-2xl font-metal-mania text-white">A7X Tribute</a>
        <nav class="space-x-5">
            <a href="{{route('home')}}" class="text-white font-bold hover:text-red-500 transition duration-300">Home</a>
            <a href="{{route('about')}}" class="text-white font-bold hover:text-red-500 transition duration-300">About</a>
            <a href="{{route('band-member')}}" class="text-white font-bold hover:text-red-500 transition duration-300">Band Member</a>
            <a href="{{route('album')}}" class="text-white font-bold hover:text-red-500 transition duration-300">Album</a>
            <a href="{{route('contact')}}" class="text-white font-bold hover:text-red-500 transition duration-300">Contact</a>
        </nav>
    </header>

    <!-- Header remains the same -->

    <main class="flex-grow px-5 pt-20 pb-10 max-w-7xl mx-auto w-full">
        <h2 class="text-4xl text-center text-red-500 mb-10">Albums</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($albums as $album)
            <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg flex flex-col">
                <img src="{{ asset('storage/' . $album->image) }}" alt="{{ $album->title }}" class="w-full h-48 object-cover">
                <div class="p-5 flex flex-col flex-grow">
                    <h2 class="text-2xl font-semibold mb-2">{{ $album->title }}</h2>
                    <p class="text-gray-400 mb-4">{{ $album->artist }}</p>
                    <p class="text-gray-500 mb-6">{{ $album->release_date->format('F j, Y') }}</p>
                    <button @click="showAlbumDetails({{ $album->id }})"
                        class="mt-auto bg-red-600 text-white text-center py-2 px-4 rounded hover:bg-red-700 transition">
                        View Details
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Modal -->
        <div x-show="showModal"
            x-transition
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
            @click.self="showModal = false">
            <div x-show="selectedAlbum"
                class="bg-gray-800 p-6 rounded-lg max-w-2xl w-full mx-4 relative"
                @click.away="showModal = false">
                <!-- Close button -->
                <button @click="showModal = false"
                    class="absolute top-4 right-4 text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Modal content -->
                <div class="flex flex-col md:flex-row gap-6">
                    <img :src="'/storage/' + selectedAlbum?.image"
                        :alt="selectedAlbum?.title"
                        class="w-full md:w-1/2 h-64 object-cover rounded">

                    <div class="flex flex-col">
                        <h3 x-text="selectedAlbum?.title" class="text-2xl font-bold mb-2"></h3>
                        <p x-text="'Artist: ' + selectedAlbum?.artist" class="text-gray-400 mb-2"></p>
                        <p x-text="'Release Date: ' + new Date(selectedAlbum?.release_date).toLocaleDateString('en-US', {year: 'numeric', month: 'long', day: 'numeric'})"
                            class="text-gray-500 mb-4"></p>
                        <!-- Add more album details here -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#0f0f0f] text-gray-500 text-center py-5">
        <p>&copy; 2024 Avenged Sevenfold Tribute. All rights reserved.</p>
    </footer>
</body>

</html>