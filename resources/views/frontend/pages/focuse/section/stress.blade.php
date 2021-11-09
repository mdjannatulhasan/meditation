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
                @foreach ($meditation_videos as $meditation_video)
                <div class="col-md-4 col-sm-6">

                   <div class="sleep-music-video">
                    <iframe width="100%" height="165" src="https://www.youtube.com/embed/{{ $meditation_video->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                    <div class="d-flex justify-content-between align-items-end">
                        <p class="ps-400 s12 c86">Briting into Sleep</p>
                        <p class="ps-400 s12 c86">10:23min</p>
                    </div>

                </div>
                @endforeach
                <div class="col-md-4 col-sm-6">
                    <div class="sleep-music-video">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/t0kACis_dJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="ps-400 s12 c86">Briting into Sleep</p>
                        <p class="ps-400 s12 c86">10:23min</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="sleep-music-video">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/t0kACis_dJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="ps-400 s12 c86">Briting into Sleep</p>
                        <p class="ps-400 s12 c86">10:23min</p>
                    </div>
                </div>
            </div>
            <div class="listen-text">
                <p class="ps-400 c00 s26 p-title">Listen to your breathing</p>
                <p class="ps-400 c60 s20">When you are  meditating, the point is to focus on one thing and allow your other thoughts to pass by, according to Mayo Clinic. For someone who has difficulties paying attention to just one thing (which includes most of us), that can be daunting. An easy way to get started is to simply listen to your breathing.</p>
                <ul style="list-style-type: circle" class="p-ul-1">
                    <li class="ps-400 c60 s20">Sit comfortably so you're not distracted by physical pain, then close your eyes and listen to your breath.</li>
                    <li class="ps-400 c60 s20">Breathe in and out through your nose, but don't otherwise try to control the rate or depth of your breath.</li>
                    <li class="ps-400 c60 s20">When thoughts try to crowd in on your meditation, let them fade as you refocus on listening to your breath. Feel how it flows down your throat. Feel your abdomen expand. Stay here as long as you can.</li>
                </ul>
            </div>
        </div>
        <div class="w-870">
            <div class="focuse-p-text">
                <p class="ps-400 c00 s26 dm-title">Don’t Move</p>
                <p class="ps-400 c60 s20">
                    Most people are fidgety. Sitting perfectly is still a pretty foreign practice, but it can help you focus by putting you in control of your physical body instead of being controlled by your comfort. Sit as comfortably as you can, but don't worry about listening to your breath. Close your eyes, and try to not move a single muscle. You'll find yourself bombarded by itches, hairs tickling your face and your joints protesting. Unless you're experiencing pain above regular discomfort, don't succumb to anything. The focus required to ignore your body and sit perfectly still will calm your mind and increase your ability to concentrate over time.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="sleep-music-video">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/t0kACis_dJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="ps-400 s12 c86">Briting into Sleep</p>
                        <p class="ps-400 s12 c86">10:23min</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="sleep-music-video">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/t0kACis_dJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="ps-400 s12 c86">Briting into Sleep</p>
                        <p class="ps-400 s12 c86">10:23min</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="sleep-music-video">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/t0kACis_dJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <p class="ps-400 s12 c86">Briting into Sleep</p>
                        <p class="ps-400 s12 c86">10:23min</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-870 um-text">
            <p class="ps-400 c00 s26 um-title">Use a mantra</p>
            <p class="ps-400 c60 s20">
                Once you get comfortable with sitting still and you can listen to your breathing  extended periods of time without difficulty,  to introduce a mantra. A mantra is simply a repeated syllable, word or phrase that helps you focus. During your meditation session, repeat your mantra over and over.
            </p>
            <p class="ps-400 c60 s20">
                A simple one is the syllable “ohm,” which you say on the exhale of each breath. When you inhale, thoughts will try to rush back into your mind, and you will have to focus on keeping your mind still as you go into the sound. This will develop your ability to continually concentrate on one thing, even with interruptions.
            </p>
        </div>
    </div>
</section>
