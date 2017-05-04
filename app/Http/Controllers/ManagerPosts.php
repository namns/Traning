<?php

namespace App\Http\Controllers;

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
       return view('manager-post',['post'=>$post]);
    }
    public function add()
    {
        return view('add');
    }
    public function addpost(Request $request)
    {
        $rule = [
            'code' => 'required',
            'title' => 'required',
            'despction' => 'required'
        ];

        $messages=[
            'code.required' => 'code k duoc bo trong',
            'title.required' => 'tieu de k dc bo rong',
            'despction.required' => 'noi dung k dc bo trong',
        ];

        $validator = Validator::make($request->all(), $rule, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'faild',
                'errors' => json_decode($validator->messages()->toJson()),

            ], 200);
        }

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
}
