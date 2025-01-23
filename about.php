<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("components/head.php") ?>

    <style>
        .parallax {
            width: 100%;
            min-height: 100vh;
            background-image: url(images/mountains.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            margin-top: 50px;
            display: flex;
            align-items: center;

        }

        .my-card {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-top: 8px solid #eb4e0f;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);

        }

        .my-card h1 {
            font-size: 35px;
            /* text-transform: uppercase; */
            margin-bottom: 10px;
            border-bottom: 4px solid #eb4e0f;
            padding-bottom: 10px;
        }
        @media (max-width:600px) {
            .my-card{
                margin-top: 50px;
                margin-bottom: 50px;
                width: 92%;
            }
            
        }
    </style>

</head>

<body class="bg-light">

    <?php include("components/nav.php"); ?>
    <section class="head-ban">
        <div class="container">
            <h2 class="text-center">
                About Us
            </h2>
        </div>
    </section>

    <section class="parallax">
        <div class="container ">
            <div class="row">
                <div class="col-md-6  ">
                    <div class="my-card">
                        <div class="my-card-head">
                            <h1>Welcome to CRVM</h1>
                        </div>
                        <p class="para">
                        A pure, balanced, and healthy mind leads to a healthy body. “Body and mind are highly interconnected. Any imbalance in mind will affect the body and vice-versa. If you work on your mind, most of your bodily issues can be balanced/ taken care of” -Venerable Acharya Dhammapala Guruji.
                    <br><br>A calm, composed, alert and active mind brings peace to life. Each individual's peaceful mind contributes to World Peace. With this vision, CRVM aims to set up meditation centres worldwide. A disturbed mind will make a wrong decision and creates disturbance in the world. The best way to establish world peace is by making the mind peaceful. For this, you must keep working on eradicating defilements of the mind.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
            <div class="col-md-6 mb-5 wow animate__animated animate__fadeInUp">
                    <img src="images/g.jpeg" class="big-img rounded-5" width="100%" alt="">
                </div>
                <div class="col-md-6 mb-5 wow animate__animated animate__fadeInUp d-flex flex-column justify-content-center ">
                    <p class="tag">About Guruji</p>
                    <h2 class="big-text mb-4">Venerable Acharya Dhammapala Guruji</h2>
                    <p class="para">
                    Born in Muddalahalli, a small village near Bangalore, India, Venerable Acharya Dhammapala Guruji has helped to transform the lives of more than 1 lakh people over the past 20-25 years and helped them to achieve health, happiness, and peace of mind through Right view mind culture. <br><br>Guruji has learned from dozens of masters from India and other parts of the world and contributed to several spiritual movements. During this time, Guruji was also involved in services like tree culture, organic farming, herbal medicine, training people with intellectual disabilities, inter-religious harmony, stress management, and personality development programs. Guruji also traveled to several South and Southeast Asian countries to learn advanced meditation techniques in centers like Pa auk, Shwe Oo Min, Panditarama etc. Based on rigorous practice and study, Guruji developed this composite and holistic course framework to enable lay practitioners to easily progress spiritually.
                    </p>
                 
                </div>
               
            </div>
        </div>
    </section>

    

    <section class="banner">
        <div class="container">
            <h2 class="big-text text-white wow animate__animated animate__fadeInUp ">Are You Ready To Transform?</h2>
            <a href="contact" class="pry-btn mx-auto mt-5 wow animate__animated animate__fadeInUp">Join Us</a>
        </div>
    </section>

    <?php include("components/googlereview.php"); ?>
    <?php include("components/contact.php"); ?>
    <?php include("components/footer.php"); ?>


</body>

</html>