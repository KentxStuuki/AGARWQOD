<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mission · Vision · Core Values</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        @media (max-width: 1023px) {
            section {
                flex-direction: column !important;
                min-height: auto !important;
            }

            /* Left side image and cards */
            section>div:first-child {
                width: 100% !important;
                padding: 20px !important;
                min-height: auto !important;
            }

            section article {
                min-width: 100% !important;
                width: 100% !important;
                margin-bottom: 40px !important;
                padding: 20px !important;

                /* eliminate the right shift */
                position: relative !important;
                right: auto !important;
                left: auto !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            /* Shrink icons on smaller screens */
            section article>div {
                width: 170px !important;
                height: 130px !important;
            }

            section article h3 {
                font-size: 3rem !important;
                margin-top: 110px !important;
                text-align: center !important;
            }

            section article p {
                font-size: 1.5rem !important;
                text-align: left !important;
            }

            section aside>div {
                padding: 0 !important;
            }

            section aside {
                padding: 30px !important;
                text-align: left !important;
            }

            section aside h2 {
                font-size: 2rem !important;
                margin-bottom: 20px !important;
            }

            section aside ul {
                font-size: 1.5rem !important;
                line-height: 1.5 !important;
            }
        }

        /* Tablet (768px – 1023px) */
        @media (min-width: 768px) and (max-width: 1023px) {
            section {
                flex-direction: column !important;
                min-height: auto !important;
                overflow-x: hidden !important;
            }

            section>div:first-child {
                width: 100% !important;
                padding: 20px !important;
                min-height: auto !important;
            }

            section article {
                min-width: 100% !important;
                width: 100% !important;
                margin-bottom: 40px !important;
                padding: 20px !important;
                position: relative !important;
                margin: 0 !important;
            }

            section article>div {
                width: 170px !important;
                height: 130px !important;
            }

            section article h3 {
                font-size: 2.8rem !important;
                margin-top: 100px !important;
                text-align: center !important;
            }

            section article p {
                font-size: 1.4rem !important;
                text-align: left !important;
            }

            section aside {
                width: 100% !important;
                margin: 0 !important;
                text-align: left !important;
            }

            section aside>div {
                padding: 0 !important;
            }

            section aside h2 {
                font-size: 2rem !important;
                margin-bottom: 20px !important;
            }

            section aside ul {
                font-size: 1.5rem !important;
                line-height: 1.5 !important;
            }

            /* Fix Mission + Vision stack */
            section>div:first-child>div>div {
                flex-direction: column !important;
                gap: 60px !important;
            }
        }

        @media (min-width: 1024px) and (max-width: 1279px) {
            section {
                flex-direction: column !important;
                min-height: auto !important;
            }

            section>div:first-child {
                width: 100% !important;
                padding: 20px !important;
                min-height: auto !important;
            }

            section article {
                min-width: 100% !important;
                width: 100% !important;
                margin-bottom: 40px !important;
                padding: 20px !important;
                position: relative !important;
                right: auto !important;
                left: auto !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            section article>div {
                width: 170px !important;
                height: 130px !important;
            }

            section article h3 {
                font-size: 3rem !important;
                margin-top: 110px !important;
                text-align: center !important;
            }

            section article p {
                font-size: 1.5rem !important;
                text-align: left !important;
            }

            section aside {
                width: 100% !important;
                padding: 30px 15px !important;
                margin: 0 !important;
                text-align: left !important;
            }

            section aside>div {
                padding: 0 !important;
            }

            section aside h2 {
                font-size: 2rem !important;
                margin-bottom: 20px !important;
            }

            section aside ul {
                font-size: 1.5rem !important;
                line-height: 1.5 !important;
            }

            /* Fix Mission + Vision stack */
            section>div:first-child>div>div {
                flex-direction: column !important;
                gap: 40px !important;
            }
        }
    </style>



</head>

<body>
    <!-- Section wrapper (background full width) -->
    <section class="flex flex-col md:flex-row min-h-[600px] md:min-h-[630px] my-15">
        <!-- LEFT: image background -->
        <div class="md:w-[55%] relative flex items-center justify-center"
            style="background-image: url('../main/images/missionvision_section/missionvision.jpg'); background-size: cover; background-position: left center;">
            <div class="absolute inset-0 bg-[#3a271a]/50"></div>
            <div class="relative z-10 w-200 container mx-auto px-4 py-12">
                <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-stretch justify-center">
                    <!-- Mission card -->
                    <article class="bg-[#f6f3e8] rounded-2xl p-6 -right-25 flex-1 relative min-w-[350px]">
                        <!-- Icon container with bottom curve only -->
                        <div
                            class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-[var(--primary)] w-[180px] h-[140px] flex items-center justify-center"
                            style="border-radius:0 0 60px 60px;">
                            <img src="../main/images/missionvision_section/missionicon.png" alt="Missiob Icon" class="w-25 h-22 mt-3">
                        </div>

                        <h3 class="mt-30 text-5xl font-bold text-[#3a2a20] text-center">Mission</h3>
                        <p class="mt-4 text-xl text-[#2f2b26] leading-relaxed">
                            To build a <strong class="font-semibold">sustainable partnerships between investors and farmers</strong>
                            by cultivating Agarwood through transparent, eco-friendly, and community-driven agroforestry models
                            that generate long-term value.
                        </p>
                    </article>
                    <!-- Vision card -->

                    <article class="bg-[#f6f3e8] rounded-2xl p-6 -right-25 flex-1 relative min-w-[350px]">

                        <!-- Icon container with bottom curve only -->
                        <div
                            class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-[var(--primary)] w-[180px] h-[140px] flex items-center justify-center"
                            style="border-radius:0 0 60px 60px;">
                            <img src="../main/images/missionvision_section/visionicon.png" alt="Vision Icon" class="w-28 h-15 mt-6">
                        </div>

                        <h3 class="mt-30 text-5xl font-bold text-[#3a2a20] text-center">Vision</h3>
                        <p class="mt-4 text-xl text-[#2f2b26] leading-relaxed">
                            To become a <strong class="font-semibold">leading model of sustainable Agarwood farming</strong>
                            in the Philippines, empowering farmers, protecting the environment, and connecting local efforts
                            to the global demand for high-value natural products.
                        </p>
                    </article>
                </div>
            </div>
        </div>

        <!-- RIGHT: core values column -->
        <aside class="md:w-[45%] bg-[#3a2a20] text-white flex items-center">
            <div class="mx-auto px-35">
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-4">Core Values</h2>
                <ul class=" text-lg">
                    <li><strong class="font-semibold">Sustainability</strong> – We prioritize eco-friendly farming and reforestation.</li>
                    <li><strong class="font-semibold">Transparency</strong> – We ensure clear agreements, fair reporting, and accountability.</li>
                    <li><strong class="font-semibold">Empowerment</strong> – We train and support farmers to grow with confidence.</li>
                    <li><strong class="font-semibold">Innovation</strong> – We combine science-based methods with traditional practices.</li>
                    <li><strong class="font-semibold">Community Impact</strong> – We create jobs, income, and opportunities for rural communities.</li>
                    <li><strong class="font-semibold">Integrity</strong> – We build trust through honesty, responsibility, and long-term commitment.</li>
                </ul>
            </div>
        </aside>
    </section>
</body>

</html>