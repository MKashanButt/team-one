<x-template>
    <div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="{{ asset('images/music-img-01.webp') }}">
            </div>
            <div class="mySlides fade">
                <img src="{{ asset('images/music-slider-two.webp') }}">
            </div>
            <div class="mySlides fade">
                <img src="{{ asset('images/music-img-04.webp') }}">
            </div>
        </div>
    </div>
    <div class="search mtop-20 mbot-20 display-flex" data-aos="fade-up" data-aos-duration="1000">
        <div class="search_options">
            <h3>TALENTS</h3>
            <form method="post">
                <input type="text" name="searchTalents" id="searchbar" placeholder="Search">
                <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
            </form>
        </div>
        <div class="options">
            <ul>
                <li class="search-option" onclick="openSports(event, 'All')">All</li>
                <li class="search-option" onclick="openSports(event, 'Creative')">CREATIVE</li>
                <li class="search-option" onclick="openSports(event, 'Label')">LABEL</li>
                <li class="search-option" onclick="openSports(event, 'Management')">MANAGEMENT</li>
                <li class="search-option" onclick="openSports(event, 'Personalities')">PERSONALITIES</li>
                <li class="search-option" onclick="openSports(event, 'Publishing')">PUBLISHING</li>
            </ul>
        </div>
    </div>
    <div class="trends banner" data-aos="fade-up" data-aos-duration="1000">
        <div id="All" class="tabcontent">
            <h3>ALL PERSONALITIES</h3><br>
            <div class="artist-gallery display-flex banner">
                <div class="artist">
                    <a href="/artist/millticket-flashy">
                        <img src="{{ asset('images/music-img-01.webp') }}" alt="">
                        <div class="display-flex artist-socials">
                            <h3>Millticket Flashy</h3>
                    </a>
                    <span><a href="https://www.instagram.com/millticketflashy/#" target="__blank"><i
                                class="fa-brands fa-instagram"></i></span></a>
                </div>
            </div>
            <div class="artist">
                <a href="/artist/vvsknucky-johnson">
                    <img src="{{ asset('images/music-img-03.webp') }}" alt="">
                    <div class="display-flex artist-socials">
                        <h3>VVS Knucky Johnson</h3>
                </a>
                <span><a href="https://www.instagram.com/vvsknucky/" target="__blank"><i
                            class="fa-brands fa-instagram"></a></i></span>
            </div>
        </div>
        <div class="artist">
            <a href="/artist/marc-dub">
                <img src="{{ asset('images/music-img-04.webp') }}" alt="">
                <div class="display-flex artist-socials">
                    <h3>Marc Dub</h3>
            </a>
            <span><a href="https://www.instagram.com/officialmarcdub/" target="__blank"><i
                        class="fa-brands fa-instagram"></i></span></a>
        </div>
    </div>
    <div id="Creative" class="tabcontent">
        <h3>ALL CREATIVE PERSONALITIES</h3><br>
        <div class="artist-gallery display-flex banner">
        </div>
    </div>
    <div id="Label" class="tabcontent">
        <h3>ALL LABEL PERSONALITIES</h3><br>
        <div class="artist-gallery display-flex banner">

        </div>
    </div>
    <div id="Management" class="tabcontent">
        <h3>ALL MANAGEMENT PERSONALITIES</h3><br>
        <div class="artist-gallery display-flex banner">
        </div>
    </div>
    <div id="Publishing" class="tabcontent">
        <h3>ALL PUBLISHING PERSONALITIES</h3><br>
        <div class="artist-gallery display-flex banner">
        </div>
    </div>
    <div id="Personalities" class="tabcontent">
        <h3>ALL PERSONALITIES</h3><br>
        <div class="artist-gallery display-flex banner">
        </div>
    </div>
</x-template>
