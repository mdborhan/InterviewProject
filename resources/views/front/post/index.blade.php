 @extends('front.master')
@section('body')
    <section>

        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="video_cont">
                                <h4>{{$details->post_title}}</h4>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9">

                                <img src="{{asset($details->photo)}}" width="600" height="270">

                            </div>

                            <div>
                                <p>{!! $details->post_brief !!}</p>
                            </div>


                        </div>




                    </div>


                </div>





            </div>



        </div>

    </section>

@endsection



