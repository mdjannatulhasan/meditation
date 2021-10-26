<section class="gellary-section py-100">
    <div class="container">
        <div class="filtering-btn">
            <button type="button" class="ps-700 c00 s23" data-filter="all">All Sessions</button>
            <button type="button" class="ps-700 c00 s23" data-filter=".popular-sessions">Popular Sessions</button>
            <button type="button" class="ps-700 c00 s23" data-filter=".new-sessions">New Sessions</button>
        </div>
        <div class="row gx-4 gy-5 mix-filter">
            @foreach ($new_sessions as $new_session)
            <div class="col-lg-4 col-sm-6 mix new-sessions">
                <div class="session shadow-4 rounded-tt">
                    <div class="session-img">
                        <img src="{{ asset($new_session->image) }}" alt="session" class="img">
                    </div>
                    <div class="session-content">
                        <div class="session-name">
                            <h4 class="ps-700 s18 c00">{{ $new_session->title }}</h4>
                        </div>
                        <div class="session-desc">
                            <p class="ps-400 s16 c51">
                                {{ $new_session->description }}
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
            @foreach ($popular_sessions as $popular_session)
            <div class="col-lg-4 col-sm-6 mix popular-sessions">
                <div class="session shadow-4 rounded-tt">
                    <div class="session-img">
                        <img src="{{ asset($popular_session->event->image) }}" alt="session" class="img">
                    </div>
                    <div class="session-content">
                        <div class="session-name">
                            <h4 class="ps-700 s18 c00">{{ $popular_session->event->title }}</h4>
                        </div>
                        <div class="session-desc">
                            <p class="ps-400 s16 c51">
                                {{ $popular_session->event->description }}
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
            @foreach ($all_sessions as $all_session)
            <div class="col-lg-4 col-sm-6 mix popular-sessions new-sessions">
                <div class="session shadow-4 rounded-tt">
                    <div class="session-img">
                        <img src="{{ asset($all_session->event->image) }}" alt="session" class="img">
                    </div>
                    <div class="session-content">
                        <div class="session-name">
                            <h4 class="ps-700 s18 c00">{{ $all_session->event->title }}</h4>
                        </div>
                        <div class="session-desc">
                            <p class="ps-400 s16 c51">
                                {{ $all_session->event->description }}
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
</section>