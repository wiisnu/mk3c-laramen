<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A7X Tribute - Contact</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap');
    </style>
</head>

<body class="bg-neutral-900 text-white font-sans">
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

    <main class="p-5 max-w-4xl mx-auto my-auto">
        <h1 class="text-4xl text-center text-red-500 font-bold mb-6">
            Contact Us
        </h1>
        <form class="bg-zinc-900 p-9 rounded-lg shadow-lg">
            <div class="mb-4">
                <label for="name" class="block text-gray-400 mb-2">Name:</label>
                <input type="text" id="name" name="name" required
                    class="w-full p-3 bg-zinc-800  rounded-md text-white focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-400 mb-2">Email:</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-3 bg-zinc-800  rounded-md text-white focus:ring-2 focus:ring-red-500 focus:outline-none">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-400 mb-2">Message:</label>
                <textarea id="message" name="message" rows="4" required
                    class="w-full p-3 bg-zinc-800  rounded-md text-white focus:ring-2 focus:ring-red-500 focus:outline-none"></textarea>
            </div>
            <button type="submit"
                class="w-full bg-red-500 hover:bg-red-600 transition-colors text-white py-3 rounded-md font-medium">
                Send Message
            </button>
        </form>
    </main>


</body>

</html>