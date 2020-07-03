@extends('front.master')
@section('body')
    <section>

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-6 col-md-12">
                    <div class="row">
                                <div class="col-md-6">
                                    <div class="video_cont">
                                        <h4>{{$details->video_title}}</h4>
                                    </div>
                                    <div class="embed-responsive embed-responsive-16by9">

                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$details->video_link}}" allowfullscreen></iframe>

                                    </div>

                                    <div>
                                        <p>{!! $details->video_brief !!}</p>
                                    </div>


                                </div>




                    </div>


                </div>





            </div>



        </div>

    </section>

@endsection
