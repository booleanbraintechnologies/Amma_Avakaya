<style>
  #hero5carousel {
    height: 70vh;
  }

  .hero5 .carousel-img {
    height: 70vh;
    background-position: center;
    background-size: cover;
  }

  .hero5 .carousel-details {
    position: absolute;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 12px;
    padding-bottom: 12px;
    color: #fff;
  }

  .hero5 .carousel-d-center {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    top: 30%;
    left: 50%;
    transform: translate(-50%, 0%);
    text-align: center;
  }

  .hero5 .carousel-d-left {
    /* right: 15%; */
    /* bottom: 1.25rem; */
    top: 30%;
    left: 5%;
    text-align: start;
  }

  .hero5 .carousel-d-right {

    top: 33%;
    right: 5%;
    text-align: center;
  }

  .hero5 h2 {
    font-size: 38px;
    line-height: 48px;
    max-width: 70%;
    text-transform: capitalize;
    margin-top: 15px;
    color: #fff;
    font-weight: 700;
  }

  .hero5 p {
    color: #fff;
    margin-bottom: 0px;
    font-size: 22px;
  }

  video {
    width: 100%;
    height: 85vh;
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
    padding: 5px 20px;
    font-size: 18px;
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

  @media (max-width:600px) {

    #hero5carousel {
      height: 55vh;
    }

    .hero5 .carousel-img {
      height: 55vh;
      background-position: center;
      background-size: cover;
    }

    .hero5 h2 {
      font-size: 20px;
      font-weight: 500;
      line-height: 1.2;
      color: #fff;
      max-width: 100%;
    }

    .hero5 p {
      margin-bottom: 0px;
      font-size: 16px;
      color: #fff;

    }

    .game-btn {
      font-size: 16px;
    }

    .hero5 .carousel-d-center {
      /* left: 0; */
    }

  }
</style>
<section class="hero5" style="padding: 0px 20px;">

  <div class="container-fluid m-0 p-0">
    <div class="hero">
      <div id="hero5carousel" class="carousel carousel-dark slide " data-bs-pause="false" data-bs-ride="carousel" style="border-radius:20px;">
        <div class="carousel-indicators d-none ">
          <button type="button" data-bs-target="#hero5carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#hero5carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#hero5carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner" style="border-radius:20px;">
          <div class="carousel-item active" data-bs-interval="5000">
            <div class="carousel-img" style=" background-position:left center; 
    background-image:
            linear-gradient(45deg,
              rgba(0,0,0, 0.3),
              rgba(0,0,0, 0.3)), url(
'images/s1.webp');
">


            </div>
            <div class="carousel-details carousel-d-center text-white ">
              <!-- <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0s" data-wow-duration="1.5s">YourCareerKart</p> -->
              <h2 class="wow animate__animated animate__fadeInUp " data-wow-delay="0s" data-wow-duration="2s">Bold, tangy, and unforgettable – indulge in the timeless flavors of Amma Avakaya’s handcrafted pickles.</h2>
              <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0s" data-wow-duration="3s"> <a href="#contact" class="game-btn">Contact Now</a> </p>


            </div>
          </div>
          <div class="carousel-item " data-bs-interval="5000">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <div class="carousel-img" style=" 
    background-image:
            linear-gradient(45deg,
              rgba(0,0,0, 0.3),
              rgba(0,0,0, 0.3)), url(
'images/s2.webp'); background-position:center;
">



            </div>
            <div class="carousel-details carousel-d-center text-white">
              <!-- <p class="wow animate__animated animate__fadeInUp  " data-wow-delay="0s" data-wow-duration="1.5s">YourCareerKart</p> -->
              <h2 class="wow animate__animated animate__fadeInUp text-600  " data-wow-delay="0s" data-wow-duration="2s">Spices are the soul of flavor – they transform the simplest ingredients into a culinary masterpiece.</h2>
              <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0s" data-wow-duration="3s"><a href="#contact" class="game-btn">Contact Now</a> </p>


            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <div class="carousel-img" style=" 
    background-image:
            linear-gradient(45deg,
              rgba(0,0,0, 0.3),
              rgba(0,0,0, 0.3)), url(
'images/s3.webp');
">

              <div class="carousel-details carousel-d-center text-white">
                <!-- <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0s" data-wow-duration="1.5s">YourCareerKart</p> -->
                <h2 class="wow animate__animated animate__fadeInUp text-600" data-wow-delay="0s" data-wow-duration="2s">From our kitchen to your home – experience the true essence of homemade pickles, the Amma Avakaya way.</h2>
                <p class="wow animate__animated animate__fadeInUp" data-wow-delay="0s" data-wow-duration="3s"><a href="#contact" class="game-btn">Contact Now</a> </p>


              </div>

            </div>
          </div>


        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#hero5carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero5carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
      </div>
    </div>
  </div>
</section>