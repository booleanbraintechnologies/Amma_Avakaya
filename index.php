<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("components/head.php") ?>

<style>
    .product{
        position: relative;
        margin-bottom: 30px;
    }
    .product .tag{
        position: absolute;
        top: 40px;
        left: 0;
        background-color: var(--primary-color);
        color: #fff;
        padding: 5px 10px;
        border-radius: 0px 5px 5px 0px;
        text-transform: capitalize;
        font-size: 14px;
    }
    .product img{
        width: 100%;
        aspect-ratio: 1/1;
        object-fit: cover;
        object-position: center;

    }
    .product h2{
        font-size: 20px;
        font-weight: 600;
        margin-top: 10px;
    }
    .product p{
        font-size: 14px;
    }
    .product .price-book{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .product h4{
        font-size: 20px;
        font-weight: 600;

    }
    .product h6{
        font-size: 14px;
        /* text-decoration: line-through; */
        color: #070707;
    }
    .product .buy{
        background-color: var(--primary-color);
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;

    }
</style>

</head>

<body class="">

    <?php include("components/nav.php"); ?>
    <?php include("components/hero5.php"); ?>

    <section id="products" class="section">
        <div class="container">
            <h2 class="text-center big-text">Try Our Products</h2>
            <div class="row mt-5">
                <?php
                $products = array(
                    array('id' => '0', 'name' => 'Mango Pickle', 'desc' => 'A tangy and spicy pickle made from raw mangoes, perfect to complement any meal with its bold, flavorful taste.', 'mrp' => '500 grams', 'price' => '7', 'cat' => 'veg', 'img' => 'mango.jpg'),
                    array('id' => '1', 'name' => 'Lemon Pickle', 'desc' => 'A zesty and aromatic pickle crafted with fresh lemons, offering a burst of citrus flavor with a spicy kick. maintaining traditions', 'mrp' => '500 grams', 'price' => '6', 'cat' => 'veg', 'img' => 'lemon.jpeg'),
                    array('id' => '2', 'name' => 'Ginger Pickle', 'desc' => 'A deliciously spicy and aromatic ginger pickle that brings a rich, tangy flavor to your dishes, ideal for adding zest to any meal.', 'mrp' => '500 grams', 'price' => '5', 'cat' => 'veg', 'img' => 'ginger.webp'),
                    array('id' => '3', 'name' => 'Chicken Pickle', 'desc' => 'A savory and spicy chicken pickle made from tender pieces of chicken, offering a rich, flavorful experience for non-vegetarian lovers.', 'mrp' => '500 grams', 'price' => '8', 'cat' => 'non veg', 'img' => 'chicken.jpeg'),
                    array('id' => '10', 'name' => 'Boneless Chicken Pickle', 'desc' => 'A savory and spicy Boneless chicken pickle made from tender pieces of chicken, offering a rich, flavorful experience for non-vegetarian lovers.', 'mrp' => '500 grams', 'price' => '8', 'cat' => 'non veg', 'img' => 'bone.png'),
                    array('id' => '4', 'name' => 'Prawns Pickle', 'desc' => 'A mouthwatering and spicy pickle made with prawns, offering a combination of tangy, spicy, and seafood flavors for the ultimate indulgence.', 'mrp' => '500 grams', 'price' => '9', 'cat' => 'non veg', 'img' => 'prawns.jpeg'),
                    array('id' => '5', 'name' => 'Fish Pickle', 'desc' => 'A flavorful and spicy fish pickle that adds the perfect balance of tanginess and heat to bring out the natural flavors of the fish.', 'mrp' => '500 grams', 'price' => '10', 'cat' => 'non veg', 'img' => 'fish.webp'),
                    array('id' => '6', 'name' => 'Karapodi Mix', 'desc' => 'A unique blend of spices and herbs, this Karapodi mix is perfect for adding flavor to rice or curries, offering a savory and aromatic experience.', 'mrp' => '500 grams', 'price' => '5', 'cat' => 'Karapodis', 'img' => 'kari.webp'),
                    array('id' => '7', 'name' => 'chutney Powder', 'desc' => 'A flavorful chutney powder made from a variety of spices, perfect for sprinkling over snacks or mixing with rice to add extra zest.', 'mrp' => '500 grams', 'price' => '6', 'cat' => 'Karapodis', 'img' => 'chutney.webp'),
                    array('id' => '8', 'name' => 'Ghee Karam', 'desc' => 'Indulge in the rich and aromatic experience of GHEE KARAM Spicy Powder! This exquisite blend combines the decadent flavors of pure ghee with a medley of traditional spices.', 'mrp' => '500 grams', 'price' => '6', 'cat' => 'Karapodis', 'img' => 'ghee.png'),
                    array('id' => '9', 'name' => 'Nalla Karam', 'desc' => 'Perfect for enhancing the flavor of curries, grilled meats, or roasted vegetables, Nallakaram brings a unique depth to any dish.', 'mrp' => '500 grams', 'price' => '5', 'cat' => 'Karapodis', 'img' => 'nalla.jpg'),
                );

                ?>
                <?php foreach ($products as $p) {

                ?>
                    <div class="col-md-4">
                        <div class="product">
                            <div class="tag"><?php echo $p['cat']; ?></div>
                            <img src="images/<?php echo $p['img']; ?>" width="100%" alt="">
                            <h2><?php echo $p['name']; ?></h2>
                            <p class="para"><?php echo $p['desc']; ?></p>
                            <div class="price-book">
                                <div class="price d-flex align-items-end gap-2" >
                                    <h4>£<?php echo $p['price']; ?></h4>
                                    <h6><?php echo $p['mrp']; ?></h6>
                                </div>
                                <div class="book">
                                    <a href="https://wa.me/+447887178560" class="buy">Buy On Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4 wow animate__animated animate__fadeInUp d-flex flex-column justify-content-center ">
                    <!-- <p class="tag">YourCareerKart</p> -->
                    <h2 class="big-text mb-4">Welcome to Amma Aavakaya</h2>
                    <p class="para">
                        At Amma Aavakaya, we take pride in delivering the authentic taste of Andhra Pradesh’s rich culinary heritage through our range of traditional pickles. Made with the finest mangoes, handpicked mustard seeds, and an exquisite blend of spices, each jar of our pickles carries the soul of age-old recipes passed down through generations. Whether it's the tangy zest of our veg pickles or the fiery kick of our non-veg varieties, Amma Aavakaya ensures that every bite brings the bold flavors and rich aromas that are the hallmark of Andhra cuisine.
                        <br><br>
                        Our pickles are made with love and care, using time-honored techniques that preserve the natural goodness of the ingredients. We believe that food is not just about nourishment; it’s about creating memories and celebrating the joy of sharing a meal with loved ones. With Amma Aavakaya, you don’t just enjoy a pickle – you experience a taste of tradition that’s both timeless and extraordinary.
                    </p>
                    <a href="#contact" class="pry-btn">Know More</a>
                </div>
                <div class="col-md-6 mb-4 wow animate__animated animate__fadeInUp">
                    <img src="images/abtc.jpeg" class="big-img rounded-5" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <h2 class="big-text text-white wow animate__animated animate__fadeInUp ">A dish without spice is like a song without rhythm – spices bring life, heat, and character to every bite.</h2>
            <a href="#contact" class="pry-btn mx-auto mt-5 wow animate__animated animate__fadeInUp">Contact us</a>
        </div>
    </section>
    <?php include("components/contact.php"); ?>
    <?php include("components/footer.php"); ?>

    <script>
        function toggleFAQ(element) {
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.icon');

                if (item.contains(element)) {
                    if (answer.style.maxHeight) {
                        answer.style.maxHeight = null;
                        answer.style.padding = '0 10px';
                        icon.textContent = '+';
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                        answer.style.padding = '10px';
                        icon.textContent = '-';
                        icon.style.transform = 'rotate(180deg)';
                    }
                } else {
                    answer.style.maxHeight = null;
                    answer.style.padding = '0 10px';
                    icon.textContent = '+';
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        }
    </script>

</body>

</html>