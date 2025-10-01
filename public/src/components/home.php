<style>
.custom-nav {
  position: absolute;
  top: 38%;
  left: 5%;
  right: 5%;
  z-index: 4;
}

.custom-nav .owl-prev,
.custom-nav .owl-next {
  position: absolute;
  height: 55px;
  width: 55px;
  border-radius: 50%;
  color: inherit;
  background: #fff;
  border: none;
  align-items: center;
  justify-content: center;
}

.custom-nav .owl-prev {
  left: 0;
}

.custom-nav .owl-next {
  right: 0;
}
</style>
<section class="mb-32 sm:mb-24 lg:mb-4 -mt-4 h-[100vh]">
    <div id="home" class="relative">
        <div id="home_carousel"></div>
        <div class="mx-0 md:mx-32">
            <div class="bg-[#F5F5DD] px-1 md:px-3 rounded-xl text-white absolute left-1/2 -translate-x-1/2 -bottom-25 md:-bottom-20 z-5 shadow-lg w-[75%]">
                <button class="bg-gradient-to-b from-[#896044] to-[#36251B] rounded-full font-bold text-lg sm:text-xl lg:text-2xl  px-1 md:px-8 lg:px-16 py-2 mt-5 border-4 cursor-pointer absolute left-1/2 -translate-x-1/2 -top-32 md:-top-30 xl:-top-38">Invest Now!</button>
                <h4 class="bg-[#896044] rounded-full py-2 text-2xl lg:text-3xl font-bold text-center border-4 border-[F5F5DD] absolute px-4 md:px:16 xl:px-30 left-1/2 -translate-x-1/2 -top-5 w-[200px] md:w-[250px] lg:w-[560px]">What we do?</h4>
                <div class="block lg:flex justify-center font-bold text-center mt-8 lg:mt-12 mb-3 p-2">
                    <div class="bg-[#896044] py-2 xl:p-5 px-2 md:px-12 mt-2 lg:mx-2 text-lg md:text-xl rounded-2xl w-full">10 Agarwood seedlings</div>
                    <div class="bg-[#896044] py-2 xl:p-5 px-2 md:px-12 mt-2 lg:mx-2 text-lg md:text-xl rounded-2xl w-full">Planted & cared for at our farm</div>
                    <div class="bg-[#896044] py-2 xl:p-5 px-2 md:px-12 mt-2 lg:mx-2 text-lg md:text-xl rounded-2xl w-full">5 years of Maintenance</div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const homeContent = document.getElementById('home_carousel');
    homeContent.innerHTML=`
        <div class="owl-carousel owl-theme">
        ${home_content.map(content => `
            <div style="background: url('${content.imgpath}'); background-repeat: no-repeat; background-position: center; background-size: cover; width:100%; z-index:-1;" class="text-center text-white pt-8 sm:pt-24 min-h-[100vh] lg:min-h-[75vh]">
                <h1 class="mx-2 text-3xl md:text-3xl lg:text-4xl font-bold pb-5">${content.head}</h1>
                <p class="mx-2 sm:mx-32 md:mx-38 lg:mx-40 text-lg md:text-2xl lg:text-3xl">${content.para}</p>
            </div>
        `).join('')}
        </div>
        <div class="owl-controls">
            <div class="custom-nav items-center !hidden md:!flex"></div>
        </div>
        `;

    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        margin: 0,
        navText: [
            "<div class='nav-btn'><img src='../main/images/home_section/l-arrow.png' class='w-[25px] mx-auto my-auto'/></div>",
            "<div class='nav-btn'><img src='../main/images/home_section/r-arrow.png' class='w-[25px] mx-auto my-auto'/></div>"
        ],
        navContainer: '#home_carousel .custom-nav',
        autoplay: true,
        dots: false,
        autoplayTimeout: 4000,
    });
</script>