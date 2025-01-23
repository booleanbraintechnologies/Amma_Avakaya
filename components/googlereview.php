<?php

$reviews = array(
    array('name' => '{name}', 'first' => '{first initial of name}', 'time' => '{random month,days,weeks ago}', 'review' => '{review}'),
    array('name' => '{name}', 'first' => '{first initial of name}', 'time' => '{random month,days,weeks ago}', 'review' => '{review}'),
);

$reviews = array(
    array(
        'name' => 'Aarav Sharma', 
        'first' => 'A', 
        'time' => 'Navi Mumbai', 
        'review' => 'Bridge course gave me realisation that it is progressive
        approach from level 1 to level 3 and bridge course learnings
        are rising my mindfulness, awareness and now concentration
        is improving. I am grateful to Acharya Dhammapala Bhanteji,
        who not only taught meditation, also emphasised on right view
        through various methods of meditations, repeatedly explaining
        importance of right view in the practice of mediation.'
    ),
    array(
        'name' => 'Szilvia Revesz', 
        'first' => 'S', 
        'time' => 'Sparta', 
        'review' => 'It was a recapitulation of what I have learned and practiced
        before in Level1-3 courses and practice session.
        Understanding and practicing bhramma viharas meditation,
        (Metta, Karuna, Mudita, Upekkha) senses meditation, ear,
        body, eye, and mind. Having learned and practiced all these
        meditations I realize how much my meditation has changed
        and keeps changing along with my behaviour in dealing with
        vicissitudes of life.
        '
    ),
    array(
        'name' => 'Manjusha Mendhe', 
        'first' => 'M', 
        'time' => 'Orlando', 
        'review' => 'Last full year we were under stress and turmoil but right-view
        meditation techniques, we got the courage to face all
        challenges in our life, developed positive and balanced attitude
        in life which was a biggest achievement for us.
        '
    ),
    array(
        'name' => 'Rahul Tapase', 
        'first' => 'R', 
        'time' => 'Muscat', 
        'review' => 'It was wonderful journey to meditation L1 to Bridge course.
        In this bridge course we got learn more and meditation done
        very seriously and can find many changes in meditation and
        day to day activities. '
    ),
    array(
        'name' => 'Anirudh', 
        'first' => 'A', 
        'time' => 'Hyderabad', 
        'review' => 'Venerable Bhantejis teachings cover all aspects of mindfulness and he ensures that we learn what mindfulness really is, by introducing us to various ways to be mindful in a practical sense. The course is an ongoing journey towards oneself, with oneself, and i am certain, that if one is exposed to the teachings with an open mind and an honest heart, will appreciate it and savour it life-long.'
    ),
    array(
        'name' => 'Rohit', 
        'first' => 'R', 
        'time' => 'Hyderabad', 
        'review' => 'Namastey Guruji. My mind was not able to focus around 2 months ago. The level 1- to level 4 helped calm down my mind to a great extent. The meditation on the last day of Level 4 helped me feel very light as if a burden was removed from top of me. Thank you Guruji.'
    ),
    
);



?>
<style>
    .google-head {
        text-align: center;
    }

    .google-head h4 {
        line-height: 10px;
        font-size: 38px;
        font-weight: 600;
    }

    .review-box {
        /* max-width: 350px; */
        background-color: rgba(17, 17, 17, 0.05);
        padding: 20px;
        border-radius: 20px;

        /* color: aliceblue; */
    }

    .round-color {
        border-radius: 100%;
        background-color: blueviolet;
        width: 40px;
        height: 40px;
        font-size: 22px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .review-head {
        display: flex;
        align-items: center;
    }

    .name-box {
        margin-top: 5px;
        margin-left: 20px;


    }

    .name-box h4 {
        font-size: 18px;
        font-weight: 600;
        line-height: 10px;
        margin-bottom: 5px;
    }

    .name-box p {
        font-size: 14px;
        margin-bottom: 0px;
    }

    .google-img {
        width: 40px;
        height: 40px;
        background-image: url('images/google.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .google-text {
        margin-top: 10px;
        font-size: 16px;
        line-height: 16px;
        font-weight: 600;
    }

    .google-text span {
        font-weight: 400;
    }

    .stars {
        margin: 10px 0px;
        color: var(--primary-color);
        display: flex;
        gap: 5px;
    }

    /* .review-text{
    font-weight: 600;
} */

    .owl-nav {
        position: absolute;
        top: 45%;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .owl-nav button span {
        display: flex;
        width: 32px;
        height: 32px;
        justify-content: center;
        align-items: center;
        border-radius: 100%;
        background-color: rgba(17, 17, 17, 0.5);
        color: white;
        font-size: 30px;
    }

    @media (max-width:600px) {

        .round-color {
            width: 35px;
            height: 35px;
            font-size: 18px;
        }

        .google-img {
            width: 35px;
            height: 35px;
        }


        .google-head h4 {
            font-size: 24px;
            line-height: 2px;
        }

    }
</style>
<section id="testimonials" class="section">
    <div class="google-head">
        <!-- <p>Reviews</p> -->
        <h4>Participant Testimonials</h4>
    </div>
    <div class="container mt-5">
        <div class="owl-carousel google">

            <?php
            foreach ($reviews as $review) {
            ?>
                <div class="review-box">
                    <div class="review-head">
                        <div class="round-color"><?php echo $review['first']; ?></div>
                        <div class="name-box">
                            <h4><?php echo $review['name']; ?></h4>
                            <p><?php echo $review['time']; ?></p>
                        </div>
                    </div>
                    <div class="d-flex stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    <p class="review-text"><?php echo $review['review']; ?></p>
                </div>
            <?php
            }

            ?>

        </div>



    </div>
</section>