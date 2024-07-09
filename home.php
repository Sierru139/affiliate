<?php


$coachData = file_get_contents("./assets/json/mentor.json");
$coach = json_decode($coachData, true);

$testimonialData = file_get_contents("./assets/json/testimoni.json");
$testimonial = json_decode($testimonialData, true);

// var_dump($coach);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bimbel Online Calon ASN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "nunito", sans-serif;
        }

        .text-hover {
            transition: .8s;
        }

        .text-hover:hover {
            box-shadow: inset 300px 0px 0px rgb(77, 135, 206);
        }

        .goDown {
            animation: navDown .5s ease;
        }

        @keyframes navDown {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .resGoDown {
            animation: navRespoDown .3s linear;
        }

        @keyframes navRespoDown {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body style="background-image: url('./assets/images/bg-home.jpg'); background-repeat: repeat;">

    <header class="navbar top-0 left-0 right-0 absolute flex justify-end items-center lg:py-6 py-3 px-5 shadow-sm border-b border-[#ffffff25] font-semibold z-50">
        <div class="sm:flex hidden text-white">
            <a class="mr-6" href="#Home">Home</a>
            <a class="mr-6" href="#Tryout">Tryout</a>
            <a class="mr-6" href="#Bimbel">Bimbel CPNS</a>
            <a class="mr-6" href="#Testimonial">Testimonial</a>
        </div>
        <div class="sm:hidden block">
            <div id="resNav" class="border rounded-md px-2 ">
                <i class="resBtn fas fa-bars"></i>
            </div>
            <div id="resMenu" class="fixed top-0 bottom-0 right-0 py-6 px-12 bg-white hidden resGoDown">
                <div id="resNavClose" class="inline absolute rounded-md right-5">
                    <i class="fas fa-x"></i>
                </div>
                <div class="block"></div>
                <div class="mt-8">
                    <a class="mr-6 block border-b py-3" href="#Home">Home</a>
                    <a class="mr-6 block border-b py-3" href="#Tryout">Tryout</a>
                    <a class="mr-6 block border-b py-3" href="#Bimbel">Bimbel CPNS</a>
                    <a class="mr-6 block border-b py-3" href="#Testimonial">Testimonial</a>
                </div>
            </div>
        </div>
    </header>
    <!-- SECTION 1 LANDING PAGE ====== -->
    <!-- SECTION 1 LANDING PAGE ====== -->
    <!-- Swiper === -->
    <div id="Home" class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper h-fit">
            <!-- Slides -->
            <div class="swiper-slide">
                <img class="w-full object-cover object-center" src="https://testasn.com/assets-compro/img/banner/banner-3.png" alt="">
            </div>
            <div class="swiper-slide">
                <img class="w-full object-cover object-center" src="https://testasn.com/assets-compro/img/banner/banner-9.png" alt="">
            </div>
            <div class="swiper-slide">
                <img class="w-full object-cover object-center" src="https://testasn.com/assets-compro/img/banner/banner-7.png" alt="">
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev text-white ml-3 lg:inline hidden"></div>
        <div class="swiper-button-next text-white mr-3 lg:inline hidden"></div>
    </div>

    <!-- SECTION 1 RATING -->
    <!-- SECTION 1 RATING -->
    <section class="max-w-[1320px] mx-auto px-6 py-12 mb-12">
        <div class="flex flex-col items-center text-center">
            <div class="text-yellow-400 text-2xl">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="mt-3">
                <h5>(Rating dari <span class="font-bold">12068 Pengguna</span> )</h5>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col shadow-lg mt-12">
            <div class="flex items-center flex-1 py-12 bg-blue-400 justify-center">
                <div class="h-20 w-20 flex items-center justify-center bg-blue-100 rounded-sm text-xl">
                    <i class="fas fa-users"></i>
                </div>
                <div class="pl-4">
                    <h5 class="font-semibold">Member</h5>
                    <h3 class="font-bold text-4xl">12095</h3>
                </div>
            </div>
            <div class="flex items-center flex-1 py-12 bg-blue-100 justify-center">
                <div class="h-20 w-20 flex items-center justify-center bg-blue-400 rounded-sm text-xl">
                    <i class="fas fa-medal"></i>
                </div>
                <div class="pl-4">
                    <h5 class="font-semibold">Tryout Online Tersedia</h5>
                    <h3 class="font-bold text-4xl">4</h3>
                </div>
            </div>
            <div class="flex items-center flex-1 py-12 bg-blue-400 justify-center">
                <div class="h-20 w-20 flex items-center justify-center bg-blue-100 rounded-sm text-xl">
                    <i class="fas fa-video"></i>
                </div>
                <div class="pl-4">
                    <h5 class="font-semibold">Kelas Online Tersedia</h5>
                    <h3 class="font-bold text-4xl">1</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2 BENEFIT -->
    <!-- SECTION 2 BENEFIT -->
    <section class="max-w-[1320px] mx-auto px-6 py-12 mb-12">
        <div class="flex lg:flex-row flex-col">
            <div class="flex-[59%]">
                <h4 class="text-2xl font-bold text-blue-500">TEST ASN</h4>
                <h2 class="text-4xl font-bold mb-10">Kenapa Harus Belajar di Test ASN?</h2>
                <p class="mb-6 opacity-85">
                    "TEST ASN, tidak hanya sekadar menyediakan pembelajaran, melainkan menjadi arsitek pengalaman belajar revolusioner bagi para pelajar di era modern. Dengan kombinasi keahlian terdepan dan teknologi canggih, kami memastikan pengalaman belajar terbaik yang tak terlupakan untuk Anda."
                </p>
                <div class="flex lg:flex-row flex-col mb-8">
                    <div class="flex-1">
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Paket Soal Tryout Online</h4>
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Paket Pembahasan Tryout</h4>
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Materi Terupdate</h4>
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Harga Kantong Mahasiswa</h4>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Paket Bimbel Online Terpecaya</h4>
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Mentor Profesional</h4>
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Pembelajaran Interaktif</h4>
                        <h4 class="text-lg mb-2"><i class="fas fas fa-check mr-4 text-blue-500"></i>Konsultasi Gratis</h4>
                    </div>
                </div>
                <div class="flex items-center mb-8 ">
                    <div class="flex items-center justify-center bg-blue-400 h-20 w-20 text-white text-4xl">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="pl-4">
                        <h3 class="lg:text-xl text-lg font-semibold mb-2">Konsultasi Melalui Whatsapp</h3>
                        <h3 class="lg:text-3xl text-xl font-semibold text-blue-400">+6289948123123</h3>
                    </div>
                </div>
                <div>
                    <a class="text-hover px-12 py-4 bg-blue-400 text-white" href="https://wa.me/+6285299655699">Tanya Admin</a>
                </div>
            </div>
            <div class="flex-[41%]">
                <img src="https://testasn.com/assets-compro/img/banner/bg-banner-test.png" alt="">
            </div>
        </div>
    </section>

    <!-- SECTION 3 CLASS -->
    <!-- SECTION 3 CLASS -->
    <section id="Tryout" class="max-w-[1320px] mx-auto px-4 py-6 mb-12">
        <div class="flex items-center justify-center flex-col text-center">
            <h4 class="text-2xl font-bold text-blue-500">TRYOUT CPNS TERSEDIA</h4>
            <h2 class="text-4xl font-bold mb-10">Ikuti Tryout Kami</h2>
        </div>
        <div class="flex flex-wrap">
            <div class="lg:w-3/12 md:w-2/4 w-full px-2 mt-2 rounded-md">
                <div class="flex flex-col rounded-md overflow-hidden border bg-white">
                    <div class="h-[200px] relative overflow-hidden">
                        <img class="images object-cover object-center w-full h-full" src="https://testasn.com/filetryout/IMG_20240613_182015_335.png" alt="">
                    </div>
                    <div class="p-3">
                        <div class="mb-1"><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-user "></i>00:00 WIB</span><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-calendar"></i>18 Juni 2024</span></div>
                        <h5 class="text-xl font-semibold mb-1">TRY OUT PREMIUM BATCH-4 2024</h5>
                        <!-- <div class="line-clamp-3 text-gray-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptas dignissimos eos voluptate eum amet facilis veritatis sit aliquam laborum.
                        </div> -->
                        <h5 class="opacity-70 mb-2">SKD</h5>
                        <h5 class="opacity-70 mb-2">Kuota: 988</h5>
                        <div class="flex items-center">
                            <a class="grow text-blue-600" href="#">DAFTAR TRYOUT</a>
                            <a class=" bg-yellow-400 px-4 py-2" href="#">Rp.10.000</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-3/12 md:w-2/4 w-full px-2 mt-2 rounded-md">
                <div class="flex flex-col rounded-md overflow-hidden border bg-white">
                    <div class="h-[200px] relative overflow-hidden">
                        <img class="images object-cover object-center w-full h-full" src="https://testasn.com/filetryout/IMG_20240613_182015_335.png" alt="">
                    </div>
                    <div class="p-3">
                        <div class="mb-1"><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-user "></i>18:00 WIB</span><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-calendar"></i>2 Juni 2024</span></div>
                        <h5 class="text-xl font-semibold mb-1">TRY OUT PREMIUM BATCH-3 2024</h5>
                        <!-- <div class="line-clamp-3 text-gray-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptas dignissimos eos voluptate eum amet facilis veritatis sit aliquam laborum.
                        </div> -->
                        <h5 class="opacity-70 mb-2">SKD</h5>
                        <h5 class="opacity-70 mb-2">Kuota: 604</h5>
                        <div class="flex items-center">
                            <a class="grow text-blue-600" href="#">DAFTAR TRYOUT</a>
                            <a class=" bg-yellow-400 px-4 py-2" href="#">Rp.10.000</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-3/12 md:w-2/4 w-full px-2 mt-2 rounded-md">
                <div class="flex flex-col rounded-md overflow-hidden border bg-white">
                    <div class="h-[200px] relative overflow-hidden">
                        <img class="images object-cover object-center w-full h-full" src="https://testasn.com/filetryout/IMG_20240613_182015_335.png" alt="">
                    </div>
                    <div class="p-3">
                        <div class="mb-1"><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-user "></i>16:00 WIB</span><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-calendar"></i>26 Februari 2024</span></div>
                        <h5 class="text-xl font-semibold mb-1">TRY OUT PREMIUM BATCH-2 2024</h5>
                        <!-- <div class="line-clamp-3 text-gray-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptas dignissimos eos voluptate eum amet facilis veritatis sit aliquam laborum.
                        </div> -->
                        <h5 class="opacity-70 mb-2">SKD</h5>
                        <h5 class="opacity-70 mb-2">Kuota: 974</h5>
                        <div class="flex items-center">
                            <a class="grow text-blue-600" href="#">DAFTAR TRYOUT</a>
                            <a class=" bg-yellow-400 px-4 py-2" href="#">Rp.10.000</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-3/12 md:w-2/4 w-full px-2 mt-2 rounded-md">
                <div class="flex flex-col rounded-md overflow-hidden border bg-white">
                    <div class="h-[200px] relative overflow-hidden">
                        <img class="images object-cover object-center w-full h-full" src="https://testasn.com/filetryout/IMG_20240613_182015_335.png" alt="">
                    </div>
                    <div class="p-3">
                        <div class="mb-1"><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-user "></i>21:00 WIB</span><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-calendar"></i>29 Januari 2024</span></div>
                        <h5 class="text-xl font-semibold mb-1">TRY OUT PREMIUM BATCH-2 2024</h5>
                        <!-- <div class="line-clamp-3 text-gray-500 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptas dignissimos eos voluptate eum amet facilis veritatis sit aliquam laborum.
                        </div> -->
                        <h5 class="opacity-70 mb-2">SKD</h5>
                        <h5 class="opacity-70 mb-2">Kuota: 942</h5>
                        <div class="flex items-center">
                            <a class="grow text-blue-600" href="#">DAFTAR TRYOUT</a>
                            <a class=" bg-yellow-400 px-4 py-2" href="#">Rp.10.000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4 COACH -->
    <!-- SECTION 4 COACH -->
    <section class="max-w-[1320px] mx-auto py-12 px-4 mb-12">
        <div class="flex items-center justify-center flex-col text-center">
            <h4 class="text-2xl font-bold text-blue-500">PENGAJAR PROFESIONAL</h4>
            <h2 class="text-4xl font-bold mb-10">Tenaga Profesional Kami Siap Membantu Belajar Anda</h2>
        </div>
        <div class="swiper3 overflow-hidden relative pb-24">
            <div class="swiper-wrapper h-[26rem]">
                <?php foreach ($coach as $coaches) { ?>
                    <div class="swiper-slide grow-0 mt-2">
                        <div class="flex flex-col bg-blue-100 rounded-sm overflow-hidden h-full">
                            <div class="h-[70%]">
                                <img class="h-full w-full object-cover object-center" src="<?php echo $coaches["image_url"]; ?>" alt="icon" /><br />
                            </div>
                            <div class="h-[30%] grow-0 text-center p-2">
                                <h6 class="text-xl font-bold mb-2 text-blue-400"><?php echo $coaches["name"]; ?></h6>
                                <h6 style="color:#9e9b9b;"><?php echo $coaches["position"]; ?></h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <style>
            .swiper-button-next,
            .swiper-button-prev {
                position: absolute;
                bottom: -12rem;
                /* Position from the bottom */
                width: auto;
                height: auto;
            }
        </style>
        </div>
    </section>

    <!-- SECTION 5 CLASS BIMBLE -->
    <!-- SECTION 5 CLASS BIMBLE -->
    <section id="Bimbel" class="max-w-[1320px] mx-auto px-4 py-12 mb-12">
        <div class="flex items-center justify-center flex-col text-center">
            <h4 class="text-2xl font-bold text-blue-500">BIMBEL CPNS ONLINE</h4>
            <h2 class="text-4xl font-bold mb-10">Daftarkan Segera Kelas Bimbel CPNS</h2>
        </div>
        <div class="flex">
            <div class="lg:w-[33%] w-[100%]  shrink  grow-0 px-5">
                <div class=" bg-blue-100 rounded-sm overflow-hidden">
                    <div class="">
                        <img class="max-w-full" src="https://testasn.com/materi/bimbel%20bismillah_2.png" alt="">
                    </div>
                    <div class="py-4 px-4 text-sm">
                        <div class="mb-1 opacity-65"><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-user"></i>Dyan Suci</span><span class="text-xs pr-4 py-2"><i class="pr-2 far fa-calendar"></i>3 Maret 2024</span></div>
                        <h2 class="text-lg font-bold mb-2">BIMBEL PAKET SKD & SKB CPNS MAHKAMAH AGUNG (Analis Perkara Peradilan)</h2>
                        <p class="opacity-70 mb-5">
                            Penguasaan terhadap tes SKD atau seleksi kompetensi dasar dapat dilakukan dengan mempelajari struktur dan format tes, pengaturan waktu yang tepat dalam menjawab soal, dan tips untuk mengerjakan soal agar lebih cepat dan tepat. Dalam kelas ini, kamu akan belajar mengenai tes wawasan kebangsaan, tes inteligensi umum, dan tes karakteristik pribadi dan Materi Calon PNS di Mahkamah Agung dengan Formasi Jabatan Analis Perkasa Peradilan. Kelas ini, juga dilengkapi dengan simulasi tes berupa latihan soal untuk mengevaluasi sejauh mana pengetahuan dan keterampilan yang sudah dipelajari. Selain itu, kamu akan mempelajari beberapa materi pengantar, teknik, dan strategi untuk menjawab soal dari masing-masing pembahasan. Dengan materi yang lebih terkini kamu diharapkan lebih siap dan percaya diri ketika menghadapi tes CAT SKD DAN SKB CPNS. Yuk, miliki kelasnya sekarang!
                        </p>
                        <div class="mb-2">
                            <h5 class="opacity-70">DIANTARANYA :</h5>
                            <h5 class="opacity-70">PERTEMUAN ZOOM 5X</h5>
                            <h5 class="opacity-70">3X ZOOM SKD</h5>
                            <h5 class="opacity-70">2X ZOOM SKB</h5>
                            <h5 class="opacity-70">TRYOUT FREE 4X UNTUK SKD & SKB</h5>
                            <h5 class="opacity-70">DAN MENDAPATKAN REKAMAN ULANG ZOOM UNTUK BELAJAR.</h5>
                        </div>
                        <div class="flex items-center">
                            <a class="grow text-blue-600" href="#">DAFTAR TRYOUT</a>
                            <a class=" bg-yellow-400 px-4 py-2" href="#">Rp.10.000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6 TESTIMONIAL -->
    <!-- SECTION 6 TESTIMONIAL -->
    <section id="Testimonial" class="max-w-[1320px] mx-auto px-4 py-12 mb-12">
        <div class="flex items-center justify-center flex-col text-center">
            <h4 class="text-2xl font-bold text-blue-500">Testimonial</h4>
            <h2 class="text-4xl font-bold mb-10">Apa kata mereka?</h2>
        </div>
        <div class="swiper2 overflow-hidden relative">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper h-fit pb-10">
                <!-- Slides --> 
                <?php foreach ($testimonial as $testimonials) { ?>
                <div class="swiper-slide bg-blue-300 p-5">
                    <div class="flex items-center border-b pb-4 mb-4">
                        <div class="flex items-center relative justify-center bg-blue-400 h-20 w-20 text-white text-4xl rounded-full overflow-hidden">
                            <i class="fas fa-user absolute"></i>
                            <img class="object-cover object-top w-full h-full z-10" src="<?php echo $testimonials["image_url"] ?>" alt="">
                        </div>
                        <div class="pl-4 mb-4">
                            <h3 class="text-xl font-semibold text-blue-600"><?php echo $testimonials["name"] ?></h3>
                        </div>
                    </div>
                    <div class="opacity-70">
                        <p class="">
                            <?php echo $testimonials["testimonial"] ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
        </div>
    </section>

    <!-- SECTION 7 CONTACT -->
    <section class="max-w-[1320px] mx-auto px-4 py-12 mb-12">
        <div class="flex lg:flex-row flex-col ">
            <div class="flex-[59%] pr-4">
                <h4 class="mb-4 text-2xl font-bold">AJUKAN PERTANYAAN</h4>
                <h2 class="mb-12 text-4xl font-bold">Ada pertanyaan? Silahkan ajukan pertanyaan ke kami.</h2>

            </div>
            <div class="flex-[41%]">
                <form class="bg-blue-400 py-12 px-8" action="POST">
                    <input class="block w-full mb-2 py-3 px-3" name="nama" placeholder="Nama Anda" type="text">
                    <input class="block w-full mb-2 py-3 px-3" name="email" placeholder="Alamat Email Anda" type="text">
                    <textarea class="block w-full mb-2 py-3 px-2" name="pesan" id="" rows="3" placeholder="Pesan"></textarea>
                    <button class="w-full h-full py-3 px-2 bg-blue-700 text-white">Ajukan Pertanyaan</button>
                </form>
            </div>
        </div>
    </section>


</body>

<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: 'fade',

        autoplay: {
            delay: 5000,
        },
    })

    const swiper2 = new Swiper('.swiper2', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        breakpoints: {
            520: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            720: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1020: {
                slidesPerView: 4,
                spaceBetween: 10,
            }
        },
        // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

        pagination: {
            el: '.swiper2 .swiper-pagination',
            // dynamicBullets: true,
            clickable: true,
        },

        autoplay: {
            delay: 5000,
        },
    })
    const swiper3 = new Swiper('.swiper3', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        breakpoints: {
            520: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            // 720: {
            // slidesPerView: 3,
            // spaceBetween: 10,
            // },
            1020: {
                slidesPerView: 4,
                spaceBetween: 10,
            }
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
            clickable: true,
        },

        autoplay: {
            delay: 4000,
        },
    })

    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            navbar.classList.remove("absolute");
            navbar.classList.add("goDown", "bg-white", "text-black", "fixed");
        } else {
            navbar.classList.remove("fixed", "text-black", "bg-white", "goDown");
            navbar.classList.add("absolute");
        }
    })

    const respoNav = document.getElementById('resNav');
    const respoMenu = document.getElementById('resMenu');
    respoNav.addEventListener('click', function() {
        if (respoMenu.classList.contains('hidden')) {
            respoMenu.classList.remove('hidden');
            respoMenu.classList.add('block');
        } else {
            respoMenu.classList.add('hidden');
            respoMenu.classList.remove('block');
        }
    });

    const respoNavClose = document.getElementById('resNavClose')
    respoNavClose.addEventListener('click', function() {
        if (respoMenu.classList.contains('block')) {
            respoMenu.classList.remove('block');
            respoMenu.classList.add('hidden');
        } else {
            respoMenu.classList.add('block');
            respoMenu.classList.remove('hidden');
        }
    })
</script>

</html>