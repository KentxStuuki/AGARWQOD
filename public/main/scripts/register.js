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