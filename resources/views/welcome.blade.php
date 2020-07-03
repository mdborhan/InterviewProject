<div class="main-content">
    <!-- Section: inner-header -->
{{--    @foreach($bg_imgs as $bg_img)--}}
{{--        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{asset($bg_img->photo)}}">--}}
{{--            @endforeach--}}
            <div class="container">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-theme-colored2 font-36">Video Gallery</h1>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li class="active">Video</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
{{--        </section>--}}

        <!-- Section: About -->
        <section>
            <div class="container">
                <div class="row">
{{--                    @foreach($videos as $video)--}}
                        <div class="col-sm-6 col-md-4">
                            <div class="embed-responsive embed-responsive-16by9">
{{--                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$video->link}}" allowfullscreen></iframe>--}}
                            </div>
                            <div class="video_cont">
{{--                                <h4>{{$video->title}}</h4>--}}
                            </div>
                        </div>
{{--                    @endforeach--}}

                </div>



            </div>

        </section>
</div>
