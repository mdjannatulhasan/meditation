<section class="gellary-section py-100">
    <div class="container">
        <div class="filtering-btn">
            <button type="button" class="ps-700 c00 s23" data-filter="all">All Events</button>
            <button type="button" class="ps-700 c00 s23" data-filter=".live">Live Events</button>
            <button type="button" class="ps-700 c00 s23" data-filter=".today-events">Today’s Events</button>
            <button type="button" class="ps-700 c00 s23" data-filter=".upcoming-events">Upcoming Events</button>
        </div>
        <div class="row gx-4 gy-5 mix-filter">
            @foreach ($live_events as $live_event)
            <div class="col-lg-4 col-sm-6 mix live">
                <div class="featured-events shadow-4 rounded-tt">
                    <div class="featured-events-img p-relative">
                        <img src="{{ asset($live_event->image) }}" alt="featured events" class="img">
                        <p class="ps-700 s14 cff fe-live-date tc">Live Now</p>
                    </div>
                    <div class="featured-events-content">
                        <div class="featured-events-name">
                            <h4 class="ps-700 s18 c00">{{ $live_event->title }}</h4>
                        </div>
                        <div class="featured-events-desc">
                            <p class="ps-400 s16 c51">
                                {{ $live_event->description }}
                            </p>
                            <div class="tr">
                                <a href="javascript:void(0)" class="ps-700 cfd s16">1.7k attending</a>
                            </div>
                        </div>
                        <div class="featured-events">
                            <a href="{{ url('event-details', $live_event->id) }}" class="primary-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($all_events as $all_event)
            <div class="col-lg-4 col-sm-6 mix live upcoming-events">
                <div class="featured-events shadow-4 rounded-tt">
                    <div class="featured-events-img p-relative">
                        <img src="{{ asset( $all_event->event->image )}}" alt="featured events" class="img">
                        <p class="ps-700 s14 cff fe-live-date fe-date tc">Mon - 07:00 pm</p>
                    </div>
                    <div class="featured-events-content">
                        <div class="featured-events-name">
                            <h4 class="ps-700 s18 c00">{{ $all_event->event->title }}</h4>
                        </div>
                        <div class="featured-events-desc">
                            <p class="ps-400 s16 c51">
                                {{ $all_event->event->description }}
                            </p>
                            <div class="tr">
                                <a href="javascript:void(0)" class="ps-700 cfd s16">1.7k attending</a>
                            </div>
                        </div>
                        <div class="featured-events">
                            <a href="{{ url('event-details', $all_event->event->id) }}" class="primary-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($upcoming_events as $upcoming_event)
            <div class="col-lg-4 col-sm-6 mix upcoming-events">
                <div class="featured-events shadow-4 rounded-tt">
                    <div class="featured-events-img p-relative">
                        <img src="{{ asset( $upcoming_event->image )}}" alt="featured events" class="img">
                        <p class="ps-700 s14 cff fe-live-date fe-date tc">Today - 09:00 am</p>
                    </div>
                    <div class="featured-events-content">
                        <div class="featured-events-name">
                            <h4 class="ps-700 s18 c00">{{ $upcoming_event->title }}</h4>
                        </div>
                        <div class="featured-events-desc">
                            <p class="ps-400 s16 c51">
                                {{ $upcoming_event->description }}
                            </p>
                            <div class="tr">
                                <a href="javascript:void(0)" class="ps-700 cfd s16">1.7k attending</a>
                            </div>
                        </div>
                        <div class="featured-events">
                            <a href="{{ url('event-details', $upcoming_event->id) }}" class="primary-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($today_events as $today_event)
            <div class="col-lg-4 col-sm-6 mix today-events">
                <div class="featured-events shadow-4 rounded-tt">
                    <div class="featured-events-img p-relative">
                        <img src="{{ asset($today_event->image) }}" alt="featured events" class="img">
                        <p class="ps-700 s14 cff fe-live-date tc">Live Now</p>
                    </div>
                    <div class="featured-events-content">
                        <div class="featured-events-name">
                            <h4 class="ps-700 s18 c00">{{ $today_event->title }}</h4>
                        </div>
                        <div class="featured-events-desc">
                            <p class="ps-400 s16 c51">
                                {{ $today_event->description }}
                            </p>
                            <div class="tr">
                                <a href="javascript:void(0)" class="ps-700 cfd s16">1.7k attending</a>
                            </div>
                        </div>
                        <div class="featured-events">
                            <a href="{{ url('event-details', $today_event->id) }}" class="primary-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
    <script src="{{ asset('') }}asset/frontend/js/mixitup.min.js"></script>
	<script>
		
		// MIXITUP 
		var containerEl = document.querySelector('.mix-filter');
		var mixer = mixitup(containerEl);

	</script>
</section>