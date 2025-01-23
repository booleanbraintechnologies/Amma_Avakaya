<style>
    .contact p{
        margin: 0;
    }
    .contact-details{
        margin-top: 50px;
    }
    .contact-details ul{
        list-style: none;
        padding: 0;
    }
    .contact-details ul li{
        margin-bottom: 20px;
    }
    .contact .c-link{
        text-decoration: none;
        color: black;

    }
    .contact .c-link i{
        margin-right: 10px;
    }
    .contact form input,textarea{
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid black;
    }

    .contact form input[type='submit']{
        background-color: var(--primary-color);
        border: none;
        color: white;
    }

    .contact iframe{
        margin-top: 20px;
        border-radius:10px ;
    }
    .contact img{
        border-radius: 20px;
        margin-top: 10px;
    }

</style>
<section id="contact" class=" panel contact section">

<div class="container">
    <div class="row justify-content-center" style="width: fit-content;  " >
        <div class="col-md-5 wow animate__animated animate__fadeInUp mb-5 d-flex align-itemx-center">
          <!-- <h4 class="heading text-start">Contact Us</h4> -->
          <img src="images/abts.jpeg" width="100%" class="big-img" style="object-fit: cover; object-position:center; " alt="">

        </div>
        <div class="col-md-5 wow animate__animated animate__fadeInUp mb-5 ">
        <h2>Get In Touch</h2>
          <p class="para mb-5">- Fill The Form, Soon will get back to you</p>
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <input type="text" name="name" placeholder="Name" id="">
                    </div>
                    <div class="col-md-6">
                        <input type="tel" name="phone" placeholder="Phone" id="">
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Email" id="">
                    </div>
                    <div class="col-12">
                        <input type="text" name="q" placeholder="Subject" id="">
                    </div>
                    <div class="col-12">
                        <textarea name="message" id="" placeholder="Message" rows="5"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="submit" value="SEND">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

</section>