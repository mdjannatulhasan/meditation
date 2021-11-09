<section class="testimonial-section pt-100">
    <div class="container p-relative">
        <div class="testimonial-title">
            <h2 class="ps-700 s38 c00">Testimonial</h2>
        </div>

        <!-- Swiper Slider Start -->
        <div class="swiper-container swiper-container-testi">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4 col-md-6">
                        <div class="reviews rounded testimonial">
                            <div class="reviews-client-id d-flex align-items-center justify-content-center">
                                <img src="{{ asset($testimonial->image) }}" alt="Jhon-Smith">

                            </div>
                            <p class="s14 c66 text-center">
                                {{ $testimonial->description }}
                            </p>
                            <hr>
                            <div class="">
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="c00 s14">{{ $testimonial->name }}</h2>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="s12 c81">{{ $testimonial->title }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- Swiper Slider End -->

        <!-- Swiper Slider Prev Btn -->
        <div class="d-block d-sm-none">
            <div class="swiper-btn d-flex justify-content-between">
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-testi">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
                </button>
                <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-testi">
                    <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
                </button>
            </div>
        </div>
    </div>
</section>
