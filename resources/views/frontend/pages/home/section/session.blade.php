<section class="session-section" id="Sessions">
    <div class="container p-relative">
        <div class="session-title">
            <h2 class="ps-700 s32 c00">Indivisual Session</h2>
        </div>

        <!-- Swiper Slider Start -->
        <div class="swiper-container swiper-container2">
            <div class="swiper-wrapper swiper-slide-pb">
                @foreach ($indevidual_sessions as $indevidual_session)
                <div class="swiper-slide">
                    <div class="session shadow-4 rounded-tt">
                        <div class="session-img">
                            <img src="{{ asset($indevidual_session->event->image) }}" alt="session" class="img">
                        </div>
                        <div class="session-content">
                            <div class="session-name">
                                <h4 class="ps-700 s18 c00">{{ $indevidual_session->event->title}}</h4>
                            </div>
                            <div class="session-desc">
                                <p class="ps-400 s16 c51">
                                    {{ $indevidual_session->event->description }}
                                </p>
                            </div>
                            <div class="session-m-r d-flex justify-content-between align-items-center">
                                <a href="javascript:void(0)" class="ps-700 s16 cb6">More...</a>
                                <ul class="d-flex justify-content-between">
                                    <li>
                                        <img src="{{ asset('') }}asset/frontend/svg-icon/yellow-star.svg" alt="star">
                                    </li>
                                    <li class="ps-700 s16 c8a">4.5 (120)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Swiper Slider End -->

        <!-- Swiper Slider Prev Btn -->
        <div class="swiper-btn d-flex justify-content-between">
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-prev-2">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-left.svg" alt="arrow right" class="">
            </button>
            <button type="button" class="circle d-flex justify-content-center align-items-center swiper-next-2">
                <img src="{{ asset('') }}asset/frontend/svg-icon/arrow-right.svg" alt="arrow right" class="">
            </button>
        </div>
    </div>
</section>