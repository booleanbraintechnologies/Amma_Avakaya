<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("components/head.php") ?>

    <style>
        .contact .ic {
            font-size: 26px;
            padding: 10px;
            background-color: var(--primary-color);
            border-radius: 50px;
            color: #fff;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
        }

        .contact .d-flex {
            margin: 20px 0px;
            align-items: center;
        }

        .contact input {
            width: 100%;
            padding: 10px;
            border-radius: 50px;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .contact textarea{
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            margin-bottom: 20px;
            font-size: 20px;
        }


        .contact input[type=submit] {
            background-color: var(--primary-color);
            color: #fff;
            border: none;
        }

        .contact .para {
            font-size: 22px;
            text-align: left;
        }

        .contact .map iframe {
            border-radius: 20px;
        }

        .feature .feature-cards {
            height: 100%;
            margin: 10px;
            border-radius: 20px;
            padding: 20px;
            transition: all ease .5s;
        }

        .feature .feature-cards .icon {
            border-radius: 100%;
            width: 80px;
            height: 80px;
            /* background-color: var(--primary-color); */
            /* background-color: #000; */
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            transition: all ease .5s;
            box-shadow: 2px 2px 5px var(--primary-color);

        }

        .feature .feature-cards .icon svg {
            width: 50px;
            /* object-fit: contain; */
            color: #000;
            fill: #000;

        }

        .feature .feature-cards h4 {
            margin-bottom: 20px;
            font-size: 28px;
        }

        .feature .feature-cards:hover {
            /* background-color: var(--primary-color); */
            box-shadow: 0px 0px 10px var(--primary-color);
        }


        .feature .feature-cards:hover h4 {
            color: var(--primary-color);
            font-weight: 600;

        }

        .feature .feature-cards:hover .icon {
            transform: scale(1.2);
        }

        .feature .feature-cards .icon {
            width: 60px;
            height: 60px;
        }

        .feature .feature-cards .icon svg {
            fill: none;
            width: 35px;
        }
    </style>


    <style>
        .my-hero {
            background-image: url('images/contact.jpeg');
        }

        .my-hero .content {
            padding: 100px;
        }

        @media (max-width:700px) {

            .my-hero {
                background-size: contain;
                background-repeat: no-repeat;
                background-position: top;
                padding: 90px;
                /* padding: 0px !important; */


            }

            .my-hero .content {
                padding: 0px;
            }

            .container.p-5{
                padding: 20px !important;
            }
            .feature .feature-cards{
                margin: 5px;
                padding: 0;
            }
            .feature .feature-cards h4{
            font-size: 20px;
            }

            .feature .feature-cards .icon {
            width: 50px;
            height: 50px;
        }

        .feature .feature-cards .icon svg {
            fill: none;
            width: 25px;
        }

        }
    </style>

</head>

<body>

    <?php include("components/nav.php"); ?>
    <section class="head-ban">
        <div class="container">
            <div class="d-flex align-item-center justify-content-center">
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container p-5">
            <h4 class="heading">
                Get in <span>touch.</span>
            </h4>
            <p class="para">
                Whether you're seeking a Information, or just want to say hello. Fill the details below
            </p>

            <div class="row mt-5 py-5 px-3 bg-white contact justify-content-between">
                <div class="col-md-6">
                    <h4 class="heading text-start"><span>Get A Call Back</span></h4>
                    <p>Fill Details Below</p>
                    <form class="mt-3" action="" method="POST">
                        <div class="row mt-2">
                            <div class="col-12">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <!-- <div class="col-12">
                                <input type="text" name="company" placeholder="Company Name" required>
                            </div> -->
                            <div class="col-12">
                                <input type="tel" name="phone" placeholder="Phone" required>
                            </div>

                            <div class="col-12">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <!-- <div class="col-12">
                                <input type="text" name="designation" placeholder="Designation" required>
                            </div> -->
                            <div class="col-12">
                        <textarea name="message" id="" placeholder="Message" rows="5"></textarea>
                    </div>
                            <div class="col-12">
                                <input type="submit" name="submit" value="SEND">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 feature">
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-cards">
                                <div class="d-flex m-0">


                                    <div class="icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#1C274C"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="ms-3">Call Us:</h4>
                                </div>
                                <p>Tap into the power of conversation.<br>Dial our number and connect with our enthusiastic team. We're ready to turn your thoughts into actions.
                                    <br><br>
                                    <span><strong>Phone number :  9740356978</strong></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="feature-cards">

                                <div class="d-flex m-0">
                                    <div class="icon">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M3 8L8.44992 11.6333C9.73295 12.4886 10.3745 12.9163 11.0678 13.0825C11.6806 13.2293 12.3194 13.2293 12.9322 13.0825C13.6255 12.9163 14.2671 12.4886 15.5501 11.6333L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                        <!-- <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 8L17.4392 9.97822C15.454 11.0811 14.4614 11.6326 13.4102 11.8488C12.4798 12.0401 11.5202 12.0401 10.5898 11.8488C9.53864 11.6326 8.54603 11.0811 6.5608 9.97822L3 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> -->
                                    </div>
                                    <h4 class="ms-3">Email Us:</h4>
                                </div>
                                <p>Prefer the written word?<br>Shoot us an email. 
                                    <br><br>
                                    <span><strong>crvmbrochure@gmail.com</strong></span>
                                </p>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
            <div class="row feature pb-5 px-3 bg-white contact justify-content-between">
                <!-- <div class="col-md-4">
                    <div class="feature-cards">
                        <div class="d-flex m-0">
                            <div class="icon">
                                <svg viewBox="0 0 1024 1024" style="fill: #000;" fill="#000000" class="ic4on" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z" fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <h4 class="ms-3">Visit Us</h4>
                        </div>
                        <p>For those who believe in face-to-face magic, our doors are open. Drop by our physical space at <br><br>5th Floor, Bizness Square, Opposite Hitex Junction, Hitec City, Madhapur, Hyderabad - 500084<br><br> <span style="font-size: 22px;"><span class="text-black">We've got</span> coffee brewing!</span>

                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-cards">
                        <div class="d-flex m-0">
                            <div class="icon">
                                <svg fill="#000000" style="fill: #000;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 552.77 552.77" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path d="M17.95,528.854h71.861c9.914,0,17.95-8.037,17.95-17.951V196.8c0-9.915-8.036-17.95-17.95-17.95H17.95 C8.035,178.85,0,186.885,0,196.8v314.103C0,520.816,8.035,528.854,17.95,528.854z"></path>
                                                <path d="M17.95,123.629h71.861c9.914,0,17.95-8.036,17.95-17.95V41.866c0-9.914-8.036-17.95-17.95-17.95H17.95 C8.035,23.916,0,31.952,0,41.866v63.813C0,115.593,8.035,123.629,17.95,123.629z"></path>
                                                <path d="M525.732,215.282c-10.098-13.292-24.988-24.223-44.676-32.791c-19.688-8.562-41.42-12.846-65.197-12.846 c-48.268,0-89.168,18.421-122.699,55.27c-6.672,7.332-11.523,5.729-11.523-4.186V196.8c0-9.915-8.037-17.95-17.951-17.95h-64.192 c-9.915,0-17.95,8.035-17.95,17.95v314.103c0,9.914,8.036,17.951,17.95,17.951h71.861c9.915,0,17.95-8.037,17.95-17.951V401.666 c0-45.508,2.748-76.701,8.244-93.574c5.494-16.873,15.66-30.422,30.488-40.649c14.83-10.227,31.574-15.343,50.24-15.343 c14.572,0,27.037,3.58,37.393,10.741c10.355,7.16,17.834,17.19,22.436,30.104c4.604,12.912,6.904,41.354,6.904,85.33v132.627 c0,9.914,8.035,17.951,17.949,17.951h71.861c9.914,0,17.949-8.037,17.949-17.951V333.02c0-31.445-1.982-55.607-5.941-72.48 S535.836,228.581,525.732,215.282z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h4 class="ms-3">LinkedIn</h4>
                        </div>
                        <p>Slide into our DMs! We're just a click away on LinkedIn.<br><br> Follow us for a daily dose of inspiration. <br><br> <span> <a href="https://www.linkedin.com/company/hrtechify/" style="color: var(--primary-color); text-decoration:none; ">www.linkedin.com/company/hrtechify/</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-cards">
                        <div class="d-flex m-0">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M12 7V12H9M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <h4 class="ms-3">Office Hours</h4>
                        </div>
                        <p>Monday to Friday: 9:00 AM - 6:00 PM
                            <br><br> <span><span class="text-black">Saturday & Sunday:</span> Resting our creative minds.</span>

                        </p>
                    </div>
                </div> -->
                <div class="col-12">
                    <div class="feature-cards">
                        <!-- <div class="icon">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#1C274C"></path>
                                        </g>
                                    </svg>
                                </div> -->
                        <h4 class="text-center">Find us on the map below.<br> Don't worry; it's not a treasure hunt – just a treasure of ideas waiting for you.</h4>
                        <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.38821620736!2d83.9566183!3d28.2297224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara%2C%20Nepal!5e0!3m2!1sen!2sin!4v1721318161154!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container ">
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <img src="images/line-art.jpg" width="100%" alt="">
            </div>
        </div>
    </div>

    <?php include("components/footer.php"); ?>

</body>

</html>