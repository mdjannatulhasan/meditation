<section class="courses-section" id="Courses">
    <div class="container p-relative">
        <div class="courses-title">
            <h2 class="ps-700 s32 c00">Our Courses</h2>
        </div>

        <!-- Swiper Slider Start -->
        <div class="swiper-container swiper-container1">
            <div class="swiper-wrapper swiper-slide-pb">
                @foreach ($courses as $course)
                <div class="swiper-slide">
                    <div class="courses shadow-4 rounded-tt">
                        <div class="courses-img">
                            <img src="{{ asset($course->image) }}" alt="courses" class="img">
                        </div>
                        <div class="courses-content">
                            <div class="courses-name d-flex justify-content-between align-items-center">
                                <h4 class="ps-700 s22 c00">{{ $course->title }}</h4>
                                <ul class="d-flex justify-content-between">
                                    <li>
                                        <img src="{{ asset('') }}asset/frontend/svg-icon/yellow-star.svg" alt="star">
                                    </li>
                                    <li class="ps-700 s16 c8a">4.5 (120)</li>
                                </ul>
                            </div>
                            <div class="courses-desc">
                                <p class="ps-400 s16 c51">
                                    {{ $course->description }}
                                </p>
                            </div>
                            <div class="courses-btn">
                                <a href="javascript:void(0)" class="primary-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Swiper Slider End -->

        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn courses-swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-1">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-1">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
    </div>
</section>