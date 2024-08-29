<x-template>
    <div class="talents-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="{{ asset('images/talents-img-01.webp') }}">
            </div>
            <div class="mySlides fade">
                <img src="{{ asset('images/talents-img-01.webp') }}">
            </div>
            <div class="mySlides fade">
                <img src="{{ asset('images/talents-img-01.webp') }}">
            </div>
        </div>
    </div>
    <div class="search mtop-20 mbot-20" data-aos="fade-up" data-aos-duration="1000">
        <h3>DISCOVER</h3>
        <form method="post">
            <input type="text" name="searchTalents" id="searchbar" placeholder="Search">
            <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </form>
    </div>
    <div class="discover-tabs display-flex" data-aos="fade-up" data-aos-duration="1000">
        <div class="banners">
            <img src="{{ asset('images/discover-img-one.webp') }}" alt="">
        </div>
        <div class="banners">
            <img src="{{ asset('images/discover-img-two.webp') }}" alt="">
        </div>
        <div class="banners">
            <img src="{{ asset('images/discover-img-three.webp') }}" alt="">
        </div>
        <div class="banners">
            <img src="{{ asset('images/discover-img-four.webp') }}" alt="">
        </div>
        <div class="banners">
            <img src="{{ asset('images/discover-img-five.webp') }}" alt="">
        </div>
        <div class="banners">
            <img src="{{ asset('images/discover-img-six.webp') }}" alt="">
        </div>
        <div class="banners">
            <img src="{{ asset('images/discover-img-seven.webp') }}" alt="">
        </div>
        <div class="banners">
            <img src="{{ asset('images/discover-img-eight.webp') }}" alt="">
        </div>
    </div>
</x-template>
