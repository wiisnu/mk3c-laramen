<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avenged Sevenfold - Band Members</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#1a1a1a] text-white">
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

    <section class="pt-24 px-5 max-w-7xl mx-auto">
        <h2 class="text-4xl font-metal-mania text-center mb-10">Band Members</h2>

        <div class="space-y-8">
            <!-- Member cards -->
            <div class="bg-[#333333]/80 p-8 rounded-xl text-center transform transition hover:-translate-y-2 hover:shadow-xl">
                <img src="images/synyster..jpg" alt="Synyster Gates" 
                     class="w-48 h-48 rounded-full mx-auto mb-5 border-3 border-red-500 transition hover:scale-110 object-cover">
                <h3 class="text-2xl font-cinzel text-red-500 mb-2">Brian Elwin Haner, Jr (Synyster Gates)</h3>
                <p class="mb-4">Lead Guitarist</p>
                <p class="mb-4">Brian Elwin Haner Jr (lahir 7 Juli 1981), lebih dikenal dengan nama panggungnya Synyster Gates atau hanya
                Syn, adalah seorang gitaris Amerika, paling dikenal sebagai gitaris utama dan vokalis pendukung band
                heavy metal Avenged Sevenfold. Dia menempati peringkat No. 9 pada gitaris metal terbaik Guitar World
                sepanjang masa. Gates terpilih sebagai Gitaris Metal Terbaik di Dunia oleh Total Guitar pada tahun 2016
                dan sekali lagi pada tahun 2017.</p>
                <a href="https://id.wikipedia.org/wiki/Synyster_Gates" 
                   class="inline-block bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition transform hover:scale-105 font-bold uppercase">
                    Click Me
                </a>
            </div>
            <div class="bg-[#333333]/80 p-8 rounded-xl text-center transform transition hover:-translate-y-2 hover:shadow-xl">
                <img src="images/matt..webp" alt="M. Shadows" 
                     class="w-48 h-48 rounded-full mx-auto mb-5 border-3 border-red-500 transition hover:scale-110 object-cover">
                <h3 class="text-2xl font-cinzel text-red-500 mb-2">Matthew Charles Sanders (M. Shadows)</h3>
                <p class="mb-4">Lead Vocalist</p>
                <p class="mb-4">Matthew Charles Sanders (lahir 31 Juli 1981; lebih dikenal dengan nama M. Shadows) adalah pengarang lagu
                dan penyanyi dari Amerika Serikat. Dia mendirikan grup musik rock Avenged Sevenfold bersama Zacky
                Vengeance, Jimmy "The Rev" Sullivan, dan Matt Wendt. Kemudian teman Sullivan, Synyster Gates, bergabung
                menjadi gitaris. Shadows memiliki jenis suara bariton tinggi dan terkenal karena suara yang terdengar
                serak-serak kasar dan nyaring dengan teriakan khas.</p>
                <a href="https://id.wikipedia.org/wiki/M._Shadows" 
                   class="inline-block bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition transform hover:scale-105 font-bold uppercase">
                    Click Me
                </a>
            </div>
            <div class="bg-[#333333]/80 p-8 rounded-xl text-center transform transition hover:-translate-y-2 hover:shadow-xl">
                <img src="images/Johnny_Christ.webp" alt="Johnny Christ" 
                     class="w-48 h-48 rounded-full mx-auto mb-5 border-3 border-red-500 transition hover:scale-110 object-cover">
                <h3 class="text-2xl font-cinzel text-red-500 mb-2">Johnny Christ</h3>
                <p class="mb-4">Bassist</p>
                <p class="mb-4">Jonathan Lewis Seward (lahir 18 November 1984), lebih dikenal dengan nama Johnny Christ, adalah bassis
                dari Avenged Sevenfold. Johnny Christ adalah bassis keempat yang bergabung dengan Avenged Sevenfold pada
                tahun 2002 menggantikan personel sebelumnya yaitu Dameon Ash dan Justin Sane. Dia dibesarkan di
                Huntington Beach, California. Johnny adalah adik dari teman sekolah Synyster Gates.</p>
                <a href="https://id.wikipedia.org/wiki/Johnny_Christ" 
                   class="inline-block bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition transform hover:scale-105 font-bold uppercase">
                    Click Me
                </a>
            </div>
            <div class="bg-[#333333]/80 p-8 rounded-xl text-center transform transition hover:-translate-y-2 hover:shadow-xl">
                <img src="images/zacky vengeance..jpg" alt="Zacky Vengeance" 
                     class="w-48 h-48 rounded-full mx-auto mb-5 border-3 border-red-500 transition hover:scale-110 object-cover">
                <h3 class="text-2xl font-cinzel text-red-500 mb-2">Zacky Vengeance</h3>
                <p class="mb-4">Rhythm Guitarist</p>
                <p class="mb-4">Zachary James Baker (lahir 11 Desember 1981), atau lebih dikenal sebagai Zacky Vengeance, Zacky adalah
                anak sulung cucu dari zeuz, mempunyai adik perempuan yang bernama Zina. Orangtuanya bernama James dan
                Maria. Zacky mempunyai pasangan yang bernama Gena.</p>
                <a href="https://id.wikipedia.org/wiki/Zacky_Vengeance" 
                   class="inline-block bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition transform hover:scale-105 font-bold uppercase">
                    Click Me
                </a>
            </div>
            <div class="bg-[#333333]/80 p-8 rounded-xl text-center transform transition hover:-translate-y-2 hover:shadow-xl">
                <img src="images/Brooks Wackerman..jpg" alt="Brooks Wackerman" 
                     class="w-48 h-48 rounded-full mx-auto mb-5 border-3 border-red-500 transition hover:scale-110 object-cover">
                <h3 class="text-2xl font-cinzel text-red-500 mb-2">Brooks Wackerman</h3>
                <p class="mb-4">Drummer</p>
                <p class="mb-4">Brooks Wackerman (lahir 15 Februari 1977) adalah seorang musisi Amerika. Dia adalah drummer band heavy
                metal Avenged Sevenfold saat ini, yang dia ikuti pada tahun 2015.</p>
                <a href="https://id.wikipedia.org/wiki/Brooks_Wackerman" 
                   class="inline-block bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600 transition transform hover:scale-105 font-bold uppercase">
                    Click Me
                </a>
            </div>
            <!-- Repeat similar structure for other members -->
        </div>
    </section>

    <footer class="bg-[#333] text-gray-300 text-center py-5 mt-10">
        <p class="text-sm">&copy; 2024 A7X Tribute. All Rights Reserved.</p>
    </footer>
</body>
</html>