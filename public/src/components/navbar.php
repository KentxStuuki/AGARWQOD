<style>
.desktop {
    display: block !important;
}
.mobile {
    display: none !important;
}
.search-wrapper {
  display: flex;
  align-items: center;
  background: white;
  border-radius: 25px;
}
.search-input {
  border: none;
  outline: none;

}
.search-btn {
  padding: 8px 8px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.custom-toggler div {
    width: 25px;
    height: 3px;
    margin: 5px 0;
    transition: 0.4s;
}
@media (max-width: 1280px) {

}

@media (max-width: 1024px) {
    .mobile {
        display: block !important;
    }
    .desktop {
        display: none !important;
    }   
    .search-input {
    }
    .nav-section {
        padding-bottom: 0 !important;
        margin-bottom: 0 !important;
    }
    .remove-margin{
        margin: 0 !important;
    }
}
</style>
<section class="bg-[#F5F5DD] text-[#896044] relative pb-7 mb-0 nav-section">
  <div class="px-0 w-full md:px-30 mx-auto block md:flex justify-between gap-12 items-center py-2 sm:py-3">
    <div class="flex justify-center items-center">
      <img src="../main/images/home_section/nav-logo.png" alt="" class="" style="width: 150px; height: auto;">
    </div>
    <div class="flex justify-center gap-4 xl:gap-24 items-center">
        <div class="block sm:flex gap-4 xl:gap-16">
            <div class="flex gap-3 items-center">
                <div class="bg-white p-2 rounded-full flex justify-center items-center my-auto shadow-md w-[45px] h-[45px] lg:w-[60px] lg:h-[60px]">
                    <img src="../main/images/home_section/con1.png" alt="">
                </div>
                <p class="text-lg my-auto">Phone Number <br> <span class="text-xl">09175914370</span></p>
            </div>
            <div class="flex gap-3 items-center">
                <div class="bg-white p-2 rounded-full flex justify-center items-center my-auto shadow-md  w-[45px] h-[45px] lg:w-[60px] lg:h-[60px]">
                    <img src="../main/images/home_section/ema1.png" alt="" class="">
                </div>
                <p class="text-lg my-auto">Email Address <br> <span class="text-xl">info@agarwoodhighlandvalley. com</span></p>
            </div>
        </div>
        <button class="bg-[#896044] text-white rounded-full w-full font-bold text-xl lg:text-2xl px-4 xl:px-20 py-2 hidden md:block remove-padding">Log in</button>
    </div>
  </div>

  <div class="container px-0 mx-auto ">
    <div class="static md:absolute left-1/2 md:-translate-x-1/2 lg:w-full" style="bottom: -20%; z-index: 2;">
      <div class="bg-[#896044] sm:rounded-lg px-[30px] lg:px-[50px] xl:px-[100px] py-2 mx-30 remove-margin">
        <nav class="block md:flex items-center justify-between">
          <!-- Search -->
           <div class="flex items-center justify-between align-center">
                <form class="flex mr-3 my-auto" role="search">
                    <div class="">
                        <div class="search-wrapper w-[100%]">
                            <input type="text" class="search-input border border-gray-300 rounded-sm px-2 py-1" placeholder="Search">
                            <button class="search-btn bg-[#896044] text-white text-sm rounded cursor-pointer mx-1 my-2" type="submit">
                            <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <button id="menu-btn" class="block md:hidden custom-toggler">
                    <div class="bar1 bg-white"></div>
                    <div class="bar2 bg-white"></div>
                    <div class="bar3 bg-white"></div>
                </button>
            </div>                
          <!-- Navbar Links -->
            <div class="hidden md:flex  text-black" id="menu">
                <ul class="flex gap-2 md:gap-6 text-md lg:text-lg flex-col md:flex-row text-right my-auto text-white">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                    <li class="nav-item relative group">
                        <a class="nav-link flex items-center cursor-pointer">Abstract</a>
                        <ul class="hidden absolute group-hover:block bg-white shadow rounded mt-2">
                            <li><a class="block px-4 py-2 hover:bg-gray-100" href="#">Option 1</a></li>
                            <li><a class="block px-4 py-2 hover:bg-gray-100" href="#">Option 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item block md:hidden"><a href="#" class="nav-link font-bold">Log in</a></li>
                </ul>
            </div>
        </nav>
      </div>
    </div>  
  </div>
</section>

<script>
  document.getElementById("menu-btn").addEventListener("click", () => {
    document.getElementById("menu").classList.toggle("hidden");
  });
</script>