<style>
    #hero6carousel {
        height: 70vh;
    }

    .hero6 .carousel-img {
        height: 70vh;
        background-position: center;
        background-size: cover;
    }

    .hero6 .carousel-details {
        position: absolute;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 12px;
        padding-bottom: 12px;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .hero6 .carousel-d-center {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        top: 40%;
        left: 7%;
        text-align: center;
    }

    .hero6 .carousel-d-left {
        /* right: 15%; */
        /* bottom: 1.25rem; */
        top: 30%;
        left: 5%;
        text-align: start;
    }

    .hero6 .carousel-d-right {

        top: 33%;
        right: 5%;
        text-align: center;
    }

    .hero6 h2 {
        font-size: 42px;
        max-width: 600px;
        text-transform: capitalize;
        margin-top: 15px;
        color: #fff;
    }

    .hero6 p {
        color: #fff;
        margin-bottom: 0px;
        font-size: 22px;
    }

    video {
        width: 100%;
        height: 80vh;
        object-fit: cover;
        object-position: center;
    }

    .game-btn {
        position: relative;
        z-index: 100;
        display: block;
        margin-top: 20px;
        width: fit-content;
        background-color: var(--primary-color);
        padding: 10px 20px;
        font-size: 22px;
        color: #fff;
        text-decoration: none;
        font-family: var(--font);

        transition: all ease .5s;

        clip-path:
            polygon(0% 0%,
                /* top left */
                0% 0%,
                /* top left */
                0% 0%,
                /* top right */
                100% 0%,
                /* top right */
                100% 100%,
                /* bottom right */
                100% 100%,
                /* bottom right */
                0% 100%,
                /* bottom left */
                0% 0%
                /* bottom left */
            );

    }

    .game-btn:hover {

        clip-path:
            polygon(0% 0%,
                /* top left */
                0% 0%,
                /* top left */
                90% 0%,
                /* top right */
                100% 25%,
                /* top right */
                100% 100%,
                /* bottom right */
                100% 100%,
                /* bottom right */
                10% 100%,
                /* bottom left */
                0 70%
                /* bottom left */
            );
    }

    @media (max-width:500px) {

        #hero6carousel {
            height: 50vh;
        }

        .hero6 .carousel-img {
            height: 50vh;
            background-position: center;
            background-size: cover;
        }

        .hero6 h2 {
            font-size: 18px;
            color: #fff;
        }

        .hero6 p {
            margin-bottom: 0px;
            font-size: 14px;
            color: #fff;

        }

        .game-btn {
            padding: 5px 10px;
            font-size: 18px;
        }

    }
    .hero-mobile{
        display: none;
    }
    @media (max-width:600px) {
        .hero-mobile{
        display: block;
    }
    .hero-desk{
        display: none;
    }
    }
</style>
<section class="hero6">

    <div class="container-fluid m-0 p-0 hero-desk">
        <div class="hero">
            <div id="hero6carousel" class="carousel carousel-dark slide " data-bs-pause="false" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>


                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="carousel-img" style=" background-position:left center; 
                            background-image:
                                    linear-gradient(45deg,
                                    rgba(0,0,0, 0),
                                    rgba(0,0,0, 0)), url(
                        'images/s1.webp');
                        ">


                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="5000">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <div class="carousel-img" style=" 
                            background-image:
                                    linear-gradient(45deg,
                                    rgba(0,0,0, 0),
                                    rgba(0,0,0, 0)), url(
                        'images/s2.webp'); background-position:center right;
                        ">



                        </div>

                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="carousel-img" style=" 
                                                        background-image:
                                                                linear-gradient(45deg,
                                                                rgba(0,0,0, 0),
                                                                rgba(0,0,0, 0)), url(
                                                    'images/s3.webp');
                                                    ">


                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="carousel-img" style=" 
                                background-image:
                                        linear-gradient(45deg,
                                        rgba(0,0,0, 0),
                                        rgba(0,0,0, 0)), url(
                            'images/s4.webp');
                            ">


                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="carousel-img" style=" 
                                background-image:
                                        linear-gradient(45deg,
                                        rgba(0,0,0, 0),
                                        rgba(0,0,0, 0)), url(
                            'images/s5.webp');
                            ">


                        </div>
                    </div>


                </div>
               
            </div>
        </div>
    </div>
    <div class="container-fluid m-0 p-0 hero-mobile">
        <div class="hero">
            <div id="hero6carousel" class="carousel carousel-dark slide " data-bs-pause="false" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#hero6carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>


                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="carousel-img" style=" background-position:left center; 
                            background-image:
                                    linear-gradient(45deg,
                                    rgba(0,0,0, 0),
                                    rgba(0,0,0, 0)), url(
                        'images/mo1.webp');
                        ">


                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="5000">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <div class="carousel-img" style=" 
                            background-image:
                                    linear-gradient(45deg,
                                    rgba(0,0,0, 0),
                                    rgba(0,0,0, 0)), url(
                        'images/mo2.webp'); background-position:center right;
                        ">



                        </div>

                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="carousel-img" style=" 
                                                        background-image:
                                                                linear-gradient(45deg,
                                                                rgba(0,0,0, 0),
                                                                rgba(0,0,0, 0)), url(
                                                    'images/mo3.webp');
                                                    ">


                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="carousel-img" style=" 
                                background-image:
                                        linear-gradient(45deg,
                                        rgba(0,0,0, 0),
                                        rgba(0,0,0, 0)), url(
                            'images/mo4.webp');
                            ">


                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="carousel-img" style=" 
                                background-image:
                                        linear-gradient(45deg,
                                        rgba(0,0,0, 0),
                                        rgba(0,0,0, 0)), url(
                            'images/mo5.webp');
                            ">


                        </div>
                    </div>


                </div>
               
            </div>
        </div>
    </div>
</section>