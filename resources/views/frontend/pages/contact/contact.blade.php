<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meditation') }} - About</title>

        <!------- FONTS ------->
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/fonts/fonts.css">
        <!----- CSS HERE ----->
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/style.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/reuseble-code.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/header.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/footer.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/responsive.css" />
</head>

<body>
<section class="">
    <div class="container-fluid px-sm-0">
        <div class="row g-5">
            <div class="col-xl-5 col-lg-6">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8223908687!2d90.27923710646985!3d23.780887457084543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1620713293063!5m2!1sen!2sbd" class="w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 d-flex align-items-lg-end p-relative s-column c-column">
                <a href="index.html" class="ps-700 c86 s16 back-link d-flex align-items-lg-center">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow_back.svg" alt="arrow_back"> <span>Back</span></a>
                <div class="contact-content mx-auto">
                    <h2 class="ps-700 c00 s42">Get in touch with Us</h2>
                    <p class="ps-400 c869 s18"><span class="ps-700 c00 me-3">Address:</span> House #100, Road #25, Block A, Banani 1213 Dhaka, Dhaka Division, Bangladesh</p>
                    <p class="ps-400 c869 s18"><span class="ps-700 c00 me-3">Phone:</span> +88-01312-120303</p>
                    <p class="ps-400 c869 s18"><span class="ps-700 c00 me-3">Working Time:</span> 6:30am - 11:30pm (Mon-Sun)</p>
                    <form action="javascript:void(0)">
                        <div class="sign-form">
                            <textarea name="" id="" cols="30" rows="2" class="s14 c869 w-100" placeholder="Your Message"></textarea>
                        </div>
                        <div class="sign-form">
                            <input type="text" name="" id="" placeholder="Your Name" class="s14 c869 w-100">
                        </div>
                        <div class="sign-form">
                            <input type="email" id="email" placeholder="Your email" class="s14 c869 w-100">
                        </div>
                        <div class="sign-btn sign-form">
                            <input type="submit" value="Sign In" class="cff s16 ps-400 w-100 tc">
                        </div>
                    </form>
                    <p class="ps-400 c69 s16 tc c-new-acc">Create an account? <a href="signup.html" class="cb6 gg"> Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    
    function showPwd(id, el) {
        let x = document.getElementById(id);
        if (x.type === "password") {
            x.type = "text";
            el.className = 'showpwd';
        } else {
            x.type = "password";
            el.className = 'showpwd';
        }
    }

</script>
</body>

</html>

