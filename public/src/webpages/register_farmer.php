<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../main/style/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>AGARWOOD | Farmer Registration</title>
</head>

<body>
    <!-- Section with brown background -->
    <section class="min-h-screen flex items-center justify-center bg-[var(--primary)] p-6">

        <!-- White Card -->
        <div
            class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-7xl w-full flex flex-col lg:flex-row h-auto lg:h-[600px]">

            <!-- Left Image (hidden on mobile & tablet) -->
            <div class="hidden lg:flex lg:w-1/2 items-center justify-center bg-white">
                <img src="../../main/images/register_page/r_far.png" alt="Farmers"
                    class="w-[93%] h-auto object-contain" />
            </div>

            <!-- Right Form -->
            <div class="w-full lg:w-1/2 flex flex-col p-10 bg-white relative">

                <!-- Header: Register / Farmers / Description -->
                <div id="formHeader" class="text-center mb-2">
                    <h2 class="text-4xl lg:text-4xl font-bold text-[var(--primary)]">Register</h2>
                    <p class="text-[var(--primary)] font-semibold text-2xl mt-1">Farmers</p>
                    <p class="text-base text-[var(--primary)] mb-3 text-center">
                        <i>Register to join our program and become a partner grower in sustainable agarwood
                            cultivation.</i>
                    </p>
                </div>

                <!-- Form -->
                <form id="multiStepForm" class="flex flex-col space-y-2 text-[var(--primary)]">

                    <!-- Step 1 -->
                    <div class="form-step">
                        <div class="">
                            <label class=" block text-lg mb-2 text-[var(--primary)] ml-6">First Name</label>
                            <input type="text" placeholder="First Name" required
                                class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                        </div>

                        <div>
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Middle Name</label>
                            <input type="text" placeholder="Middle Name" required
                                class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                        </div>

                        <div>
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Surname</label>
                            <input type="text" placeholder="Surname" required
                                class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="form-step hidden">
                        <div class="flex gap-4">
                            <div class="w-[98%]">
                                <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Date of Birth</label>
                                <div class="relative w-full">
                                    <input type="date" id="dob" required
                                        class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] pr-12 hide-calendar" />

                                    <!-- Clickable Calendar Icon -->
                                    <div class="absolute right-3 top-1/2 transform -translate-y-1/2 w-8 h-8 bg-[var(--primary)] rounded-full flex items-center justify-center cursor-pointer"
                                        onclick="document.getElementById('dob').showPicker ? document.getElementById('dob').showPicker() : document.getElementById('dob').focus()">
                                        <i class="fa-regular fa-calendar text-white"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Age</label>
                                <input type="number" id="age" readonly placeholder="00"
                                    class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Gender</label>
                            <div class="relative w-full">
                                <select id="gender" required
                                    class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] appearance-none pr-10 custom-select">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <!-- Custom arrow -->
                                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                    <i class="fa-solid fa-chevron-down text-[var(--primary)] text-xl"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Civil Status</label>
                            <div class="relative w-full">
                                <select id="civilStatus" required
                                    class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)] appearance-none pr-10 custom-select">
                                    <option value="">Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                                <!-- Custom arrow -->
                                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                    <i class="fa-solid fa-chevron-down text-[var(--primary)] text-xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="form-step hidden">
                        <!-- Contact Number -->
                        <div class="relative">
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6">Contact Number</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-5 flex items-center space-x-2">
                                    <img src="https://flagcdn.com/w20/ph.png" alt="Philippine Flag" class="w-8 h-6">
                                    <span class="h-8 w-px bg-gray-400"></span>
                                </span>
                                <input type="tel" placeholder="9*********" required
                                    class="w-full border border-[var(--primary)] rounded-full pl-[68px] pr-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <label class="block text-lg mb-2 mt-2 text-[var(--primary)] ml-6">Email Address</label>
                            <input type="email" placeholder="Email address (optional)"
                                class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                        </div>

                        <!-- Full Address -->
                        <div>
                            <label class="block text-lg mb-2 mt-2 text-[var(--primary)] ml-6">Full Address</label>
                            <input type="text" placeholder="Address" required
                                class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="form-step hidden">
                        <div>
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Farming Background</label>
                            <input type="text" placeholder="Type here..." required
                                class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                        </div>

                        <div>
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Months of Farming</label>
                            <input type="text" placeholder="1" required
                                class="w-full border border-[var(--primary)] rounded-full px-5 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-[var(--primary)]" />
                        </div>

                        <div class="">
                            <label class="block text-lg mb-2 text-[var(--primary)] ml-6 mt-2">Familiarity with Tree
                                Cultivation:</label>
                            <div class="flex gap-6 ml-6">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="farmingExperience" value="Yes"
                                        class="w-5 h-5 accent-[var(--primary)]">
                                    <span class="text-[var(--primary)] text-lg">Yes</span>
                                </label>

                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="farmingExperience" value="No"
                                        class="w-5 h-5 accent-[var(--primary)]">
                                    <span class="text-[var(--primary)] text-lg">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                </form>

                <!-- Next Button below form -->
                <div class="mt-4">
                    <button type="button" id="nextBtn"
                        class="w-full bg-[var(--primary)] text-white font-semibold rounded-full py-3 text-lg hover:bg-[#734c30] transition">
                        Next
                    </button>
                </div>

                <!-- Page Indicator -->
                <p id="pageIndicator" class="text-center text-[var(--primary)] text-lg mt-4">1 / 4</p>

                <div id="thankYouMessage" class="hidden flex flex-col pt-6 px-4 sm:px-6 md:px-10">
                    <h2 class="text-3xl sm:text-5xl md:text-6xl font-bold text-[var(--primary)] mb-4">
                        Thank you for registering!
                    </h2>
                    <hr class="border-t-2 sm:border-t-4 border-[var(--primary)] mb-4 sm:mb-6">
                    <p class="text-sm sm:text-base md:text-lg text-[var(--primary)]">
                        Your journey with us in sustainable Agarwood farming has just begun. We'll review your details
                        and reach out to you shortly with the next steps.
                    </p>

                    <button
                        class="mt-12 px-30 py-4 bg-[var(--primary)] text-white rounded-full self-start block text-xl font-bold">Done</button>
                </div>

            </div>
        </div>
    </section>

    <script>
        const formSteps = document.querySelectorAll(".form-step");
        const nextBtn = document.getElementById("nextBtn");
        const pageIndicator = document.getElementById("pageIndicator");
        const formHeader = document.getElementById("formHeader");
        let currentStep = 0;

        nextBtn.addEventListener("click", () => {
            // Hide current step
            formSteps[currentStep].classList.add("hidden");

            // Increase step
            currentStep++;

            // Show next step
            if (currentStep < formSteps.length) {
                formSteps[currentStep].classList.remove("hidden");
                pageIndicator.textContent = `${currentStep + 1} / ${formSteps.length}`;
            } else {
                // Final step: show thank you message
                document.getElementById("multiStepForm").classList.add("hidden");
                document.getElementById("thankYouMessage").classList.remove("hidden");
                pageIndicator.classList.add("hidden");
                formHeader.classList.add("hidden"); // hide heading and description

                // Change left image
                const leftImage = document.querySelector(".lg\\:flex img");
                if (leftImage) {
                    leftImage.src = "../../main/images/register_page/thank_you.png"; // replace with your thank you image
                    leftImage.alt = "Thank You";

                    leftImage.style.width = "350px";   // or "50%" for responsive
                    leftImage.style.height = "auto";
                }

                // Hide the Next button
                nextBtn.classList.add("hidden");
            }
        });

        // Calculate age automatically
        const dobInput = document.getElementById("dob");
        const ageInput = document.getElementById("age");

        dobInput.addEventListener("change", () => {
            const dob = new Date(dobInput.value);
            const today = new Date();
            let age = today.getFullYear() - dob.getFullYear();
            const monthDiff = today.getMonth() - dob.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            ageInput.value = age;
        });
    </script>
</body>

</html>