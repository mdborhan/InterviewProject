@extends('front.master')
@section('body')

    <section>

        <div class="container-fluid">
            <div class="row">

                    <div class="col-sm-6 col-md-7">
                        <h1>Section 1</h1>
                        <div class="row">
                            @foreach($singleImageVideos as $singleImageVideo )
                                @if($singleImageVideo->post_video==0)
                            <div class="col-md-6">
                                <div class="embed-responsive embed-responsive-16by9">

                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$singleImageVideo->video_link}}" allowfullscreen></iframe>

                                </div>
                                <div class="video_cont">
                                    <a href="{{route('blog.details',['id'=>$singleImageVideo->id,'title'=>$singleImageVideo->video_title])}}">
                                    <h4>{{$singleImageVideo->video_title}}</h4>
                                    </a>
                                </div>
                                <div>
                                    <p>{!! $singleImageVideo->video_brief !!}</p>
                                </div>


                            </div>
                                @else
                                    <div class="col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <a href="{{route('blog.details',['id'=>$singleImageVideo->id,'title'=>$singleImageVideo->post_title])}}">
                                            <img src="{{asset($singleImageVideo->photo)}}" width="600" height="270">
                                            </a>

                                        </div>
                                        <div class="video_cont">
                                            <h4>{{$singleImageVideo->post_title}}</h4>
                                        </div>
                                        <div>
                                            <p>{!! $singleImageVideo->post_brief !!}</p>
                                        </div>


                                    </div>
                                @endif

                            @endforeach
                            <div class="col-md-6">
                                <div class="row">
                                    @foreach($allImageVideos as $allImageVideo)
                                        @if($allImageVideo->post_video==0)
                                    <div class="col-md-6">
                                        <div class="embed-responsive embed-responsive-16by9">

                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$allImageVideo->video_link}}" allowfullscreen></iframe>

                                        </div>
                                        <div class="video_cont">
                                            <a href="{{route('blog.details',['id'=>$allImageVideo->id,'title'=>$allImageVideo->video_title])}}">
                                            <h4>{{$allImageVideo->video_title}}</h4>
                                            </a>
                                        </div>

                                    </div>
                                        @else
                                            <div class="col-md-6">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <a href="{{route('blog.details',['id'=>$allImageVideo->id,'title'=>$allImageVideo->post_title])}}">
                                                    <img src="{{asset($allImageVideo->photo)}}" width="600" height="270">
                                                    </a>
                                                </div>
                                                <div class="video_cont">
                                                    <h4>{{$allImageVideo->post_title}}</h4>
                                                </div>

                                            </div>
                                        @endif

                                        @endforeach


                                </div>

                            </div>

                        </div>


                    </div>

                <div class="col-sm-6 col-md-5">
                    <h1>Section 2</h1>
                    <div class="row">
                        @foreach($singleSectiontwoposts as $singleSectiontwopost )
                            @if($singleSectiontwopost->post_video==0)
                                <div class="col-md-6">
                                    <div class="embed-responsive embed-responsive-16by9">

                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$singleSectiontwopost->video_link}}" allowfullscreen></iframe>

                                    </div>
                                    <div class="video_cont">
                                        <a href="{{route('blog.details',['id'=>$singleSectiontwopost->id,'title'=>$singleSectiontwopost->video_title])}}">
                                        <h4>{{$singleSectiontwopost->video_title}}</h4>
                                        </a>
                                    </div>
                                    <div>
                                        <p>{!! $singleSectiontwopost->video_brief !!}</p>
                                    </div>


                                </div>
                            @else
                                <div class="col-md-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <a href="{{route('blog.details',['id'=>$singleSectiontwopost->id,'title'=>$singleSectiontwopost->post_title])}}">
                                        <img src="{{asset($singleSectiontwopost->photo)}}" width="600" height="270">
                                        </a>

                                    </div>
                                    <div class="video_cont">
                                        <h4>{{$singleSectiontwopost->post_title}}</h4>
                                    </div>
                                    <div>
                                        <p>{!! $singleSectiontwopost->post_brief !!}</p>
                                    </div>


                                </div>
                            @endif

                        @endforeach
                        <div class="col-md-6">
                            <div class="row">
                                @foreach($allSingleSectiontwoposts as $allSingleSectiontwopost)
                                    @if($allSingleSectiontwopost->post_video==0)
                                        <div class="col-md-6">
                                            <div class="embed-responsive embed-responsive-16by9">

                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$allSingleSectiontwopost->video_link}}" allowfullscreen></iframe>

                                            </div>
                                            <div class="video_cont">
                                                <a href="{{route('blog.details',['id'=>$allSingleSectiontwopost->id,'title'=>$allSingleSectiontwopost->video_title])}}">
                                                <h4>{{$allSingleSectiontwopost->video_title}}</h4>
                                                </a>
                                            </div>

                                        </div>
                                    @else
                                        <div class="col-md-6">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <a href="{{route('blog.details',['id'=>$allSingleSectiontwopost->id,'title'=>$allSingleSectiontwopost->post_title])}}">
                                                <img src="{{asset($allSingleSectiontwopost->photo)}}" width="600" height="270">
                                                </a>
                                            </div>
                                            <div class="video_cont">
                                                <h4>{{$allSingleSectiontwopost->post_title}}</h4>
                                            </div>

                                        </div>
                                    @endif

                                @endforeach


                            </div>

                        </div>

                    </div>

                </div>



            </div>



        </div>

    </section>

    @endsection
