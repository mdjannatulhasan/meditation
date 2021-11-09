<section class="py-100">
    <div class="container">
        <div class="w-870">
            <p class="ps-400 c00 s40 tc">Increase your <span class="ps-700 black-line">{{ $title }}</span></p>
            <div class="focuse-p-text">
                <p class="ps-400 c60 s20">
                    {!! $data->description !!}
                </p>
            </div>
            <div class="row g-5">
                @foreach ($data->videos as $meditation_video)
                    <div class="col-md-4 col-sm-6">

                        <div class="sleep-music-video">
                            <iframe width="100%" height="165"
                                    src="https://www.youtube.com/embed/{{ $meditation_video->video }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>

                        <div class="d-flex justify-content-between align-items-end">
                            <p class="ps-400 s12 c86">Briting into Sleep</p>
                            <p class="ps-400 s12 c86">10:23min</p>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
