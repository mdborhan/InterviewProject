<?php

namespace App\Http\Controllers;

use App\PostVideo;
use Illuminate\Http\Request;

class PostVideoController extends Controller
{
    public function index()
    {
        return view('admin.postvideo.index',[
            'allDatas'=>PostVideo::all(),
        ]);
    }

    public function AddPost(Request $request)
    {
        $validatedData = $request->validate([
            'post_title' => 'required|unique:post_videos|max:255',
            'post_brief' => 'required',
            'photo' => 'required',

        ]);

        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $post = new  PostVideo();

        $post->post_title = $request->post_title;
        $post->post_brief = $request->post_brief;
        $post->photo  = 'upload/'.$imageName;
        $post->type = $request->type;
        $post->status = $request->status;
        $post->post_video = 1;
        $post->save();
        return back()->withSuccess('Save Successfully.');

    }
    public function AddVideo(Request $request)
    {
        $validatedData = $request->validate([
            'video_title' => 'required|unique:post_videos|max:255',
            'video_link' => 'required',
            'video_brief' => 'required',

        ]);
        $post = new  PostVideo();
        $post->video_title = $request->video_title;
        $post->video_link = $request->video_link;
        $post->video_brief  = $request->video_brief;
        $post->type = $request->type;
        $post->post_video = 0;
        $post->status = $request->status;
        $post->save();
        return back()->withSuccess('Save Successfully.');
    }
    public function Details($id,$title)
    {
        $details = PostVideo::find($id);
        if ($details->post_video==1)
        {
            return view('front.post.index',[
                'details'=>$details,

            ]);
        }
        elseif ($details->post_video==0)
        {
            return view('front.video.index',[
                'details'=>$details,
            ]);
        }

    }
}
