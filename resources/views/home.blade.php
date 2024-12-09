<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A7X Tribute - The Deathbat Experience</title>
    @vite('resources/css/app.css') 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Metal+Mania&family=Roboto:wght@300;400;700&display=swap');
        .font-metal-mania {
            font-family: 'Metal Mania', cursive;
        }
    </style>
</head>
<body class="bg-black text-white font-roboto h-screen overflow-hidden">
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

    <div class="relative h-screen">
        <div class="absolute inset-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                <source src="\images\vidio for home.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center z-10">
            <h1 class="text-5xl lg:text-7xl font-metal-mania mb-5 text-red-500 drop-shadow-md">The A7X Experience</h1>
            <p class="text-lg lg:text-2xl mb-8">Relive the legend of Avenged Sevenfold</p>
            <a href="/about" class="bg-red-700 hover:bg-red-500 text-white py-3 px-6 rounded-lg text-lg transition duration-300 transform hover:scale-105">Explore Our Tribute</a>
        </div>
    </div>

    <div class="fixed bottom-5 right-5 flex space-x-3">
        <a href="#" class="text-white text-xl hover:text-red-500 transition duration-300"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white text-xl hover:text-red-500 transition duration-300"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white text-xl hover:text-red-500 transition duration-300"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white text-xl hover:text-red-500 transition duration-300"><i class="fab fa-youtube"></i></a>
    </div>
</body>
</html>
