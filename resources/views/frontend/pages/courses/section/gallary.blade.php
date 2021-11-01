<section class="gellary-section py-100">
    <div class="container">
        <div class="filtering-btn">
            <button type="button" class="ps-700 c00 s23" data-filter="all">All {{$title}}</button>
            <button type="button" class="ps-700 c00 s23" data-filter=".popular-courses">Popular {{$title}}</button>
            <button type="button" class="ps-700 c00 s23" data-filter=".new-courses">New {{$title}}</button>
        </div>
        <div class="row gx-4 gy-5 mix-filter">
            @foreach ($new_data as $row)
            <div class="col-lg-4 col-sm-6 mix new-courses">
                <div class="courses shadow-4 rounded-tt">
                    <div class="courses-img">
                        <img src="{{ asset($row->image) }}" alt="courses" class="img">
                    </div>
                    <div class="courses-content">
                        <div class="courses-name d-flex justify-content-between align-items-center">
                            <h4 class="ps-700 s22 c00">{{ $row->title }}</h4>
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <img src="{{ asset('') }}asset/frontend/svg-icon/yellow-star.svg" alt="star">
                                </li>
                                <li class="ps-700 s16 c8a">4.5 (120)</li>
                            </ul>
                        </div>
                        <div class="courses-desc">
                            <p class="ps-400 s16 c51">
                                {{ $row->description }}
                            </p>
                        </div>
                        <div class="courses-btn">
                            <a href="{{url('session-details',$row->id)}}" class="primary-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($popular_data as $row)
            <div class="col-lg-4 col-sm-6 mix popular-courses">
                <div class="courses shadow-4 rounded-tt">
                    <div class="courses-img">
                        <img src="{{ asset($row->event->image) }}" alt="courses" class="img">
                    </div>
                    <div class="courses-content">
                        <div class="courses-name d-flex justify-content-between align-items-center">
                            <h4 class="ps-700 s22 c00">{{ $row->event->title }}</h4>
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <img src="{{ asset('') }}asset/frontend/svg-icon/yellow-star.svg" alt="star">
                                </li>
                                <li class="ps-700 s16 c8a">4.5 (230)</li>
                            </ul>
                        </div>
                        <div class="courses-desc">
                            <p class="ps-400 s16 c51">
                                {{ $row->event->description }}
                            </p>
                        </div>
                        <div class="courses-btn">
                            <a href="{{url($row->event->category_id==2 ? 'session-details' : 'course-details',$row->id)}}" class="primary-btn">Book Now </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($all_data as $row)
            <div class="col-lg-4 col-sm-6 mix new-courses popular-courses">
                <div class="courses shadow-4 rounded-tt">
                    <div class="courses-img">
                        <img src="{{ asset($row->event->image) }}" alt="courses" class="img">
                    </div>
                    <div class="courses-content">
                        <div class="courses-name d-flex justify-content-between align-items-center">
                            <h4 class="ps-700 s22 c00">{{ $row->event->title }}</h4>
                            <ul class="d-flex justify-content-between">
                                <li>
                                    <img src="{{ asset('') }}asset/frontend/svg-icon/yellow-star.svg" alt="star">
                                </li>
                                <li class="ps-700 s16 c8a">4.5 (120)</li>
                            </ul>
                        </div>
                        <div class="courses-desc">
                            <p class="ps-400 s16 c51">
                               {{ $row->event->description }}
                            </p>
                        </div>
                        <div class="courses-btn">
                            <a href="{{url('session-details',$row->id)}}" class="primary-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
