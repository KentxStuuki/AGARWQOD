<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
    <style>
        @media (max-width: 767px) {
            .aboutus img.main-img {
                max-width: 350px !important;
            }

            .overlay-text {
                font-size: 1.2rem !important;
                padding: 6px 10px !important;
                width: 150px !important;
                left: 93px !important;
                bottom: -20px !important;
            }

            .aboutus img.second-img {
                max-width: 180px !important;
                bottom: -70px !important;
                right: -50px !important;
            }
        }

        @media (max-width: 1023px) {
            .aboutus-mobile {
                margin-top: 110px;
            }
        }

        @media (min-width: 1024px) and (max-width: 1279px) {
            .aboutus img.main-img {
                max-width: 330px !important;
            }

            .overlay-text {
                font-size: 1.2rem !important;
                width: 170px !important;
                left: 52px !important;
            }

            .aboutus img.second-img {
                bottom: -80px !important;
                right: -60px !important;
                max-width: 190px !important;
            }
        }
    </style>
</head>

<body class="font-sans">

    <!-- Hero Section -->
    <section
        class="flex justify-center items-center text-center overflow-hidden"
        style="background: url('../main/images/aboutus_section/aboutus.jpg') no-repeat center center/cover; min-height:270px; min-width: 270px;">
        <div class="mb-4">
            <div class="text-4xl md:text-5xl font-bold text-white mb-5">About Us</div>
            <div class="text-2xl text-white max-w-[1100px] mx-auto">
                We create partnerships between investors and farmers to grow
                <strong>Agarwood</strong>, one of the world's most valuable trees,
                through sustainable and transparent agroforestry.
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="container mx-auto mt-20 px-4">

        <div class="flex flex-col lg:flex-row items-start gap-10">

            <!-- Left: Images -->
            <div class="flex justify-center w-full lg:w-1/2 aboutus">
                <div class="relative max-w-[400px]">

                    <!-- Main Image -->
                    <img src="../main/images/aboutus_section/aboutusimage1.jpg"
                        alt="Agarwood Main Image"
                        class="w-full main-img rounded shadow-lg">

                    <!-- Overlay Text -->
                    <div class="overlay-text absolute text-center text-white text-2xl px-4 py-3 bg-[var(--primary)] z-30 left-19 -bottom-11 whitespace-nowrap border-b-10 border-black w-50">
                        10 Agarwood <br> Seedlings over<br> 5 years period
                    </div>

                    <!-- Second Image -->
                    <img src="../main/images/aboutus_section/aboutusimage2.jpg"
                        alt="Agarwood Second Image"
                        class="absolute second-img max-w-[230px] -bottom-22 -right-20 
            border-[10px] border-white
            shadow-[0_0_10px_rgba(0,0,0,0.5)] rounded-lg">

                </div>
            </div>

            <!-- Right: Text -->
            <div class="w-full lg:w-1/2 aboutus-mobile aboutus"
                style="font-size: 1.4rem">
                <p>
                    We are a sustainable agroforestry initiative dedicated to cultivating
                    <strong>Agarwood (Aquilaria spp.)</strong>, one of the world’s most valuable tree crops.
                    Our mission is to connect <strong>investors and farmers</strong> through transparent partnerships
                    that foster both economic growth and environmental stewardship.
                </p>
                <p class="mt-4">
                    With a <strong>5-year funded farming model</strong>, we focus on the early cultivation phase of
                    Agarwood seedlings, ensuring healthy growth, strong monitoring, and eco-friendly practices.
                    This foundation prepares the way for future resin production, creating long-term opportunities
                    in the global market for perfumes, incense, and natural medicine.
                </p>
                <p class="mt-4">
                    Beyond profits, we aim to <strong>empower local farmers</strong>, promote <strong>reforestation</strong>,
                    and build a future where agriculture is both profitable and sustainable.
                </p>
                <a href="#"
                    class="inline-block bg-[var(--primary)] text-white text-lg px-6 py-3 rounded mt-6">
                    Learn more →
                </a>
            </div>

        </div>
    </section>

</body>

</html>