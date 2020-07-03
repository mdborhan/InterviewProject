@extends('admin.master')
@section('content')

    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">Add Post or Video</h4>
                    <p class="text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTitle">Add Post or Video</button>
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table_id">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Section</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($allDatas as $allData)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>@if($allData->post_video == 1) <button class="btn btn-success">Post</button> @else <button class="btn btn-warning">Video</button>  @endif</td>
                                        <td>@if($allData->status == 1) <button class="btn btn-success">Publish</button> @else <button class="btn btn-warning">Unpublished</button>  @endif</td>
                                        <td>@if($allData->type == 1) <button class="btn btn-success">Section 1</button> @else <button class="btn btn-warning">Section 2</button>  @endif</td>

                                    </tr>
                                    <!-- Modal for delete course -->



                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="addTitle" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Post or Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
{{--                    start--}}
                    <div class="form-group">
                        <label for="seeAnotherField">Select Please</label>
                        <select class="form-control" onchange="changeOptions(this)">
                            <option value="" selected="selected">Chose...</option>
                            <option value="form_1">Post</option>
                            <option value="form_2">Video</option>
                        </select>
                    </div>

                    <form action="{{ route('add.post') }}" enctype='multipart/form-data' method="POST" class="className" name="form_1" id="form_1" style="display:none">
                        @csrf


                                <div class="form-group">
                                    <label class="control-label">Post Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control w-100" name="post_title" placeholder="Enter Post title">
                                    <span class="text-danger">{{$errors->has('post_title') ? $errors->first('post_title') : ' '}}</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Post Brief<span class="text-danger">*</span></label>

                                        <textarea name="post_brief" id="editor"></textarea>
                                    <span class="text-danger">{{$errors->has('post_brief') ? $errors->first('post_brief') : ' '}}</span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control w-100" name="photo">
                                    <span class="text-danger">{{$errors->has('photo') ? $errors->first('photo') : ' '}}</span>
                                </div>
                        <div class="form-group">
                            <label class="control-label">Section</label>
                            <select name="type" class="form-control">
                                <option value="1" class="form-control">Section 1</option>
                                <option value="0" class="form-control">Section 2</option>
                            </select>

                        </div>
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" class="form-control">Publish</option>
                                        <option value="0" class="form-control">Unpublished</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Post</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>


                    </form>

                    <form action="{{ route('add.video') }}" method="POST" class="className" name="form_2" id="form_2" style="display:none">
                       @csrf
                        <div class="form-group">
                            <label class="control-label">Video Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control w-100" name="video_title" placeholder="Enter Video title">
                            <span class="text-danger">{{$errors->has('video_title') ? $errors->first('video_title') : ' '}}</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Youtube Video ID<span class="text-danger">*</span></label>
                            <input type="text" class="form-control w-100" name="video_link" placeholder="Enter only youtube video ID">
                            <span class="text-danger">{{$errors->has('video_link') ? $errors->first('video_link') : ' '}}</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Video Brief<span class="text-danger">*</span></label>

                            <textarea name="video_brief" id="editor"></textarea>
                            <span class="text-danger">{{$errors->has('video_brief') ? $errors->first('video_brief') : ' '}}</span>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Section</label>
                            <select name="type" class="form-control">
                                <option value="1" class="form-control">Section 1</option>
                                <option value="0" class="form-control">Section 2</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" class="form-control">Publish</option>
                                <option value="0" class="form-control">Unpublished</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Video</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>

                   ​​​​​​​​​​​​​​​​​​​​​​​​​​​



{{--                    end--}}
{{--                    <form action="{{ route('add.postorvideo') }}" method="POST" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="control-label">Type</label>--}}
{{--                            <select name="type" class="form-control" required>--}}
{{--                                <option selected>Choose...</option>--}}
{{--                                <option value="1" class="form-control">Post</option>--}}
{{--                                <option value="0" class="form-control">Video</option>--}}
{{--                            </select>--}}

{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label class="control-label">Slider Title<span class="text-danger">*</span></label>--}}
{{--                            <input type="text" name="title" class="form-control" placeholder="Title" required>--}}

{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <label class="control-label">Slider Slug<span class="text-danger">*</span></label>--}}
{{--                            <input type="text" name="slug" class="form-control"  placeholder="Slug" required>--}}

{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="control-label">Slider Image<span class="text-danger">*</span></label>--}}
{{--                            <input type="file" name="photo" class="form-control" required>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="control-label">Status</label>--}}
{{--                            <select name="status" class="form-control" required>--}}
{{--                                <option value="1" class="form-control">Active</option>--}}
{{--                                <option value="0" class="form-control">Inactive</option>--}}
{{--                            </select>--}}

{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <button type="submit" class="btn btn-primary">Save </button>--}}
{{--                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}

                </div>

            </div>
        </div>
    </div>

@endsection
