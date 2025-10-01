<style>
    #gallery_carousel .owl-stage {
        display: flex;
        align-items: center;
    }

    /* Category Tabs */
    .gallery-section ul li:hover {
        text-decoration: underline;
        text-underline-offset: 3px;
    }
 /**Custom nav */
    #gallery_carousel .custom-nav {
        position: absolute;
        top: 50%;
        left: 5%;
        right: 5%;
        z-index: 4;
    }

    #gallery_carousel .custom-nav .owl-prev,
    #gallery_carousel .custom-nav .owl-next {
        position: absolute;
        height: 55px;
        width: 55px;
        border-radius: 50%;
        color: inherit;
        background: #896044;
        border: none;
        align-items: center;
        justify-content: center;
    }

    #gallery_carousel .custom-nav .owl-prev {
        left: 0;
    }

    #gallery_carousel .custom-nav .owl-next {
        right: 0;
    }

    #gallery_carousel .owl-item div {
        transition: all 0.3s ease;
        border-radius: 12px;
    }

    /* For the side items */
    #gallery_carousel .owl-item:not(.center) {
        z-index: 0;
    }
    #gallery_carousel .owl-item:not(.center) div {
        transform: scale(0.8);
        opacity: 1;
    }

    /* Center item bigger and on top */
    #gallery_carousel .owl-item.center {
        z-index: 2;
    }
    #gallery_carousel .owl-item.center img {
        transform: scale(1);
        opacity: 1;
    }
    .owl-stage {
        padding-top: 1%;
        padding-bottom: 4px;
    }
</style>

<section class="gallery-section">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4 text-[#896044]">Gallery</h1>
        <p class="text-lg font-bold">"Our Story in Growth and Impact"</p>
        <p class="text-lg mx-4 md:mx-32 lg:mx-54 mb-4">Explore our gallery to see the journey of our <span class="font-bold">AGARWOOD HIGHLAND VALLY INC.,</span> from seedling cultivation to community impact. These photos show our progress, sustainability efforts, and the people behind our mission.</p>
        <ul class="flex flex-wrap justify-center gap-3 sm:gap-4 lg:gap-8 mb-4 text-[#896044] text-base sm:text-lg cursor-pointer overflow-x-auto px-2">
            <li class="whitespace-nowrap hover:underline">All Photos</li>
            <li class="whitespace-nowrap hover:underline">Seedling Stage</li>
            <li class="whitespace-nowrap hover:underline">Farm Activities</li>
            <li class="whitespace-nowrap hover:underline">Community & Farmers</li>
            <li class="whitespace-nowrap hover:underline">Sustainability Efforts</li>
            <li class="whitespace-nowrap hover:underline">Progress Reports</li>
            <li class="whitespace-nowrap hover:underline">Events & Visits</li>
        </ul>
    </div>
    <div id="gallery_carousel" class="relative  w-full overflow-x-clip"></div>
</section>

<script>
   const galleryCarousel = document.getElementById('gallery_carousel');
   galleryCarousel.innerHTML=`
    <div class="owl-carousel owl-theme w-full">
        ${gallery_carousel_content.map((content, index) => `
            <div class="p-4">
                <div class="bg-white shadow-lg rounded-lg overflow-x-hidden flex items-center justify-center">
                    <img src="${content.imgpath}" alt="${content.imgname}" 
                        class="max-w-full h-auto object-contain p-4" />
                </div>
            </div>
        `).join('')}
    </div>


    <div class="owl-controls">
        <div class="custom-nav items-center !hidden md:!flex"></div>
    </div>
    <div class="custom-dots flex justify-center gap-2 mt-6 mb-6">
        <div class="dot-custom-nav">
            <button id="customPrev" 
            class="w-10 h-10 flex items-center justify-center bg-[#896044]">
            <img src='../main/images/gallery_section/wl-arrow.png' class='w-[15px] mx-auto my-auto'/>
            </button>
        </div>

        <button id="dot1" 
            class="w-10 h-10 flex items-center justify-center bg-white text-[#896044] font-bold border border-[#896044]">
            1
        </button>

        <button id="dot2" 
            class="w-10 h-10 flex items-center justify-center bg-white text-[#896044] font-bold border border-[#896044]">
            2
        </button>

        <div class="dot-custom-nav">
            <button id="customNext"
            class="w-10 h-10 flex items-center justify-center bg-[#896044]">
            <img src='../main/images/gallery_section/wr-arrow.png' class='w-[15px] mx-auto my-auto'/>
            </button>
        </div>
    </div>

`;

$(".owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    margin: -150,
    center: true,
    navText: [
        "<div class='nav-btn '><img src='../main/images/gallery_section/wl-arrow.png' class='w-[25px] mx-auto my-auto'/></div>",
        "<div class='nav-btn'><img src='../main/images/gallery_section/wr-arrow.png' class='w-[25px] mx-auto my-auto'/></div>"
    ],
    navContainer: '#gallery_carousel .custom-nav',
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
    }
});
$("#customPrev").click(function () {
  $(".owl-carousel").trigger("prev.owl.carousel");
});

$("#customNext").click(function () {
  $(".owl-carousel").trigger("next.owl.carousel");
});
// track current index
$(".owl-carousel").on("changed.owl.carousel", function(event) {
    let total = event.item.count; // number of slides
    let centerIndex = event.item.index + Math.floor(event.page.size / 2);
    if (centerIndex >= total) centerIndex = centerIndex % total;

    // show current and next slide numbers
    let current = centerIndex + 1;
    let next = ((centerIndex + 1) % total) + 1;

    //for active slide
    $("#dot1").text(current);
    $("#dot2").text(next);

    // reset styles
    $("#dot1, #dot2").removeClass("bg-[#896044] text-white").addClass("bg-white text-[#896044]");

    // make active dot inverted
    $(`#dot1:contains(${current}), #dot2:contains(${current})`).removeClass("bg-white text-[#896044]").addClass("bg-[#896044] text-white");
});

// clicking custom dots goes to slide
$("#dot1, #dot2").click(function() {
  let goTo = parseInt($(this).text()) - 1;
  $(".owl-carousel").trigger("to.owl.carousel", [goTo, 300]);
});
</script>