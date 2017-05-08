<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPostRequest;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ManagerPosts extends Controller
{
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $post=Post::get();
       return view('post/manager-post',['post'=>$post]);
    }
    public function add()
    {
        return view('post/add');
    }
    public function addpost(StoreBlogPostRequest $request)
    {

        $code = $request->input('code');
        $title = $request->input('title');
        $despction = $request->input('despction');
        $item = array([
            "code"  => $code,
            "title" => $title,
            "despction" => $despction
        ]);
        DB::table('post')->insert($item );
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
            $del = Post::where('id', $id)->delete();
            if ($del) {
                return response()->json([
                    'status' => 'success',
                    'errors' => [],
                ], 200);
            }
    }
    public function edit(Request $request){
        $id=$request->id;
        $data=Post::where('id',$id)->get();
        return view('post/edit-post',['data'=>$data]);
    }
    public function editpost(StoreBlogPostRequest $request){
        $id=$request->input('id');
        $code = $request->input('code');
        $title = $request->input('title');
        $despction = $request->input('despction');
        DB::table('post')
            ->where('id', $id)
            ->update(['code' =>$code,
                'title'=>$title,
                'despction'=>$despction
            ]);
        return redirect('/');
    }
    public function copy(Request $request){
        $id=$request->input('id');
        $data=DB::table('post')
            ->where('id', $id)->get();
        unset($data[0]->id);
        $item = array([
            "code"  => $data[0]->code,
            "title" => $data[0]->title,
            "despction" => $data[0]->despction
        ]);
        $save=DB::table('post')->insert($item );
        if ($save) {
            return response()->json([
                'status' => 'success',
                'errors' => [],
            ], 200);
        }
    }
}
