<div class="marketing_section">
    <div class="flex flex-col md:flex-row items-center justify-center gap-6 py-6 w-[85%] mx-auto">
        <h4 class="text-4xl text-white text-center w-full md:w-auto">Marketing Potential</h4>
        <hr class="flex-1 border-t-4 border-white hidden md:block">
    </div>

    <div class="flex flex-col lg:flex-row w-[85%] mx-auto gap-6 justify-center py-8 relative">
        <!-- Image -->
        <img src="../main/images/marketing_section/m_icon.png" alt="Marketing Potential Image"
            class="w-[100%] sm:w-[50%] md:w-[40%] lg:w-[30%] max-w-[300px] h-[250px] mt-8 object-contain mx-auto lg:mx-0 mb-6 lg:mb-0">

        <!-- Boxes container -->
        <div class="flex flex-col lg:flex-row gap-6 w-full lg:w-[65%]">
            <!-- First Box -->
            <div
                class="w-full lg:w-1/3 text-[var(--primary)] bg-white flex flex-col px-4 py-4 rounded-2xl self-start flex-none min-h-[380px]">
                <p class="font-semibold pb-4 text-2xl">Global Demand:</p>
                <p class="text-base leading-relaxed mb-2">
                    <span id="shortText_1">
                        Agarwood known for its aromatic resin which is used in production of high-end perfumes, incense,
                        and herbal medicine. Known as “oud” the resin is derived from Aquilaria trees after a natural or
                        artificial inoculation process...
                    </span>
                    <span id="fullText_1" class="hidden">
                        Agarwood known for its aromatic resin which is used in production of high-end perfumes, incense,
                        and herbal medicine. Known as “oud” the resin is derived from Aquilaria trees after a natural or
                        artificial inoculation process triggers the formation of a fragrant, dark resin in the
                        heartwood. The
                        global luxury market consistently demonstrated a strong demand for oud-based products. Due to
                        overharvesting of agarwood leading to it being endangered, it has opened an opportunity for
                        sustainable,
                        cultivated sources of agarwood resin.
                    </span>
                </p>
                <button id="readMoreBtn_1"
                    class="mt-auto mb-2 px-6 py-3 bg-[var(--primary)] text-white w-[80%] mx-auto rounded-lg text-2xl">
                    Read More
                </button>
            </div>

            <!-- Second Box -->
            <div
                class="w-full lg:w-1/3 text-[var(--primary)] bg-white flex flex-col px-4 py-4 rounded-2xl self-start flex-none min-h-[380px]">
                <p class="font-semibold pb-4 text-2xl">Harvest Cycle:</p>
                <p class="text-base leading-relaxed mb-2">
                    <span id="shortText_2">
                        Production cycle spans approximately 8 to 10 years, beginning with seedling cultivation and
                        culminating in the resin harvest. The first five years are typically focused on nurturing the
                        trees to a healthy, mature state...
                    </span>
                    <span id="fullText_2" class="hidden">
                        Production cycle spans approximately 8 to 10 years, beginning with seedling cultivation and
                        culminating in the resin harvest. The first five years are typically focused on nurturing the
                        trees to a healthy, mature state, which is crucial for ensuring successful inoculation later.
                        This
                        partnership specifically focuses on the early stage; the partnership significantly reduces
                        upfront costs and technical risks for both parties while laying the groundwork for future
                        profitability.
                    </span>
                </p>
                <button id="readMoreBtn_2"
                    class="mt-auto mb-2 px-6 py-3 bg-[var(--primary)] text-white w-[80%] mx-auto rounded-lg text-2xl">
                    Read More
                </button>
            </div>

            <!-- Third Box -->
            <div
                class="w-full lg:w-1/3 text-[var(--primary)] bg-white flex flex-col px-4 py-4 rounded-2xl self-start flex-none min-h-[380px]">
                <p class="font-semibold pb-4 text-2xl">Future Potential:</p>
                <p class="text-base leading-relaxed mb-2">
                    <span id="shortText_3">
                        The optimal age for inoculation is around 6 years. Inoculation, the process of artificially
                        triggering resin production, both the Partner(s) and the Farmer(s) may opt to renegotiate their
                        agreement, entering into a new...
                    </span>
                    <span id="fullText_3" class="hidden">
                        The optimal age for inoculation is around 6 years. Inoculation, the process of artificially
                        triggering resin production, both the Partner(s) and the Farmer(s) may opt to renegotiate their
                        agreement, entering into a new phase of partnership that focuses on value generation from resin
                        extraction.
                    </span>
                </p>
                <button id="readMoreBtn_3"
                    class="mt-auto mb-2 px-6 py-3 bg-[var(--primary)] text-white w-[80%] mx-auto rounded-lg text-2xl">
                    Read More
                </button>
            </div>
        </div>



        <script>
            const shortText1 = document.getElementById("shortText_1");
            const fullText1 = document.getElementById("fullText_1");
            const btn1 = document.getElementById("readMoreBtn_1");

            const shortText2 = document.getElementById("shortText_2");
            const fullText2 = document.getElementById("fullText_2");
            const btn2 = document.getElementById("readMoreBtn_2");

            const shortText3 = document.getElementById("shortText_3");
            const fullText3 = document.getElementById("fullText_3");
            const btn3 = document.getElementById("readMoreBtn_3");


            btn1.addEventListener("click", () => {
                shortText1.classList.toggle("hidden");
                fullText1.classList.toggle("hidden");
                btn1.textContent = fullText1.classList.contains("hidden") ? "Read More" : "Read Less";
            });


            btn2.addEventListener("click", () => {
                shortText2.classList.toggle("hidden");
                fullText2.classList.toggle("hidden");
                btn2.textContent = fullText2.classList.contains("hidden") ? "Read More" : "Read Less";
            });


            btn3.addEventListener("click", () => {
                shortText3.classList.toggle("hidden");
                fullText3.classList.toggle("hidden");
                btn3.textContent = fullText3.classList.contains("hidden") ? "Read More" : "Read Less";
            });
        </script>