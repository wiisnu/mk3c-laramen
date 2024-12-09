<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Avenged Sevenfold</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Metal+Mania&display=swap');

        .font-metal-mania {
            font-family: 'Metal Mania', cursive;
        }

        body {
            padding-top: 100px;
            /* Memberikan ruang untuk header tetap */
        }
    </style>
</head>

<body class="bg-black text-white font-roboto h-screen overflow-y-auto">
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

    <!-- Hero Image -->
    <div class="h-screen bg-cover bg-center" style="background-image: url('/css/about-section.jpg');"></div>

    <!-- Prime Member Title -->
    <h1 class="text-4xl text-center font-metal-mania text-red-500 my-8">Prime Member</h1>

    <!-- Band Members -->
    <section class="flex flex-wrap justify-center gap-10 px-5">
        <div class="text-center">
            <img src="/images/matt_for_about.jpg" alt="Matt Shadows" class="w-40 h-40 rounded-full object-cover mx-auto">
            <h3 class="text-xl mt-4">Matt Shadows</h3>
            <p class="text-gray-400">Lead Vocals</p>
        </div>
        <div class="text-center">
            <img src="/images/synyster_for_about.jpg" alt="Synyster Gates" class="w-40 h-40 rounded-full object-cover mx-auto">
            <h3 class="text-xl mt-4">Synyster Gates</h3>
            <p class="text-gray-400">Lead Guitar, Backing Vocal</p>
        </div>
        <div class="text-center">
            <img src="/images/zaky _for_about.jpg" alt="Zaky Vengance" class="w-40 h-40 rounded-full object-cover mx-auto">
            <h3 class="text-xl mt-4">Zaky Vengance</h3>
            <p class="text-gray-400">Rhythm Guitar</p>
        </div>
        <div class="text-center">
            <img src="/images/Johnny_Christ.webp" alt="Johnny Christ" class="w-40 h-40 rounded-full object-cover mx-auto">
            <h3 class="text-xl mt-4">Johnny Christ</h3>
            <p class="text-gray-400">Bass, Backing Vocal</p>
        </div>
        <div class="text-center">
            <img src="/images/the_rev.jpg" alt="The Rev" class="w-40 h-40 rounded-full object-cover mx-auto">
            <h3 class="text-xl mt-4">The Rev</h3>
            <p class="text-gray-400">Drummer, Backing Vocal</p>
        </div>
    </section>

    <!-- About Paragraphs -->
    <section class="flex flex-col lg:flex-row gap-10 px-5 lg:px-20 my-10">
        <div class="bg-gray-800 p-5 rounded-lg shadow-lg font-metal-mania">
            <p class="mb-4">Not all projects come to light from an idea.</p>
            <p class="mb-4">We built this project over time: rehearsal after rehearsal, live show after live show, driven by our intense motivation... and this group of friends in just a few years arrived where we never thought possible; sometimes projects come to light from pure <span class="text-red-500 font-bold">passion</span>.</p>
            <p class="mb-4">You can see the band's passion for the music of the <span class="text-red-500 font-bold">Avenged Sevenfold</span> in the energy, in the attention to detail, in the evolution of image, in the search for authentic sound, in the amp settings, in the choice of the proper microphone, in the care for the stage props, but above all in feeling at one with the audience and <span class="text-red-500 font-bold">delivering unique emotions</span>.</p>
            <p class="mb-4">Unique emotions just like the ones carried by The Rev's vocals resonating in Critical Acclaim's chorus with us or when iconic images flow on video during the So Far Away arpeggio. An engaging tribute that unites all the <span class="text-red-500 font-bold">community</span>.</p>
            <p class="mb-4">A setlist that retraces the past of the band but also looks at the new tracks, a wall of sound, acoustic atmospheres and guitar duos.</p>
            <p class="mb-4">Something that you will remember, a musical project and not only an <span class="text-red-500 font-bold">idea</span>.</p>
            <p class="mb-4">Five musicians, five friends, each one plays his own role, for <span class="text-red-500 font-bold">the most emotional Sevenfold tribute existing in Europe</span>.</p>
        </div>
        <div class="bg-gray-800 p-5 rounded-lg shadow-lg font-metal-mania">
            <p class="mb-4">Tidak semua proyek lahir dari sebuah ide.</p>
            <p class="mb-4">Kami membangun proyek ini dari waktu ke waktu: latihan setelah latihan, pertunjukan langsung setelah pertunjukan langsung, didorong oleh motivasi yang kuat... dan kelompok teman ini dalam beberapa tahun mencapai tempat yang tidak pernah kita pikirkan mungkin; kadang-kadang proyek lahir dari <span class="text-red-500 font-bold">passion</span> yang murni.</p>
            <p class="mb-4">Anda dapat melihat semangat band untuk musik Avenged Sevenfold dalam energi, dalam perhatian terhadap detail, dalam evolusi gambar, dalam pencarian suara yang autentik, dalam pengaturan amp, dalam pilihan mikrofon yang tepat, dalam perawatan properti panggung, tetapi di atas semua dalam merasa satu dengan penonton dan <span class="text-red-500 font-bold">menghadirkan emosi yang unik</span>.</p>
            <p class="mb-4">Emosi yang unik seperti yang dibawa oleh vokal The Rev yang beresonansi dalam chorus Critical Acclaim dengan kami atau ketika gambar ikonik mengalir pada video selama arpeggio So Far Away. Sebuah tribute yang menarik yang menyatukan semua <span class="text-red-500 font-bold">komunitas</span>.</p>
            <p class="mb-4">Sebuah daftar lagu yang mengikuti masa lalu band tetapi juga melihat ke lagu-lagu baru, sebuah dinding suara, atmosfer akustik dan duet gitar.</p>
            <p class="mb-4">Sesuatu yang akan Anda ingat, sebuah proyek musik dan tidak hanya sebuah <span class="text-red-500 font-bold">ide</span>.</p>
            <p class="mb-4">Lima musisi, lima teman, masing-masing memainkan perannya sendiri, untuk <span class="text-red-500 font-bold">tribute Sevenfold yang paling emosional di Eropa</span>.</p>
        </div>
    </section>
</body>

</html>