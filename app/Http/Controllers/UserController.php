<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home()
    {
        $model = post::paginate(10);
        return view('user.home', compact('model'));
    }
   
    public function create_post()
    {
        return view('user.post');
    }


    public function store_post(request $request)
    {
        $user = auth()->user();
        $post = $request->all();
        $model = new post();

        $model->title = $post['title'];
        $model->description = $post['description'];
        $model->user_id = $user->id;

        $model->save();
        return redirect('/');
    }

    public function my_post()
    {
        $user = auth()->user();
        // dd($user);
        $user_id = $user->id;
        $model = post::where('user_id', $user_id)->paginate(10);
        return view('user.mypost', compact('model'));

    }

    public function edit_post($id)
    {

        $model = post::find($id);
        return view('user.editpost', compact('model'));

    }

    public function post_update(Request $request)
    {

        $update = $request->all();
        $id = $update['id'];
        $model = post::find($id);

        $model->title = $update['title'];
        $model->description = $update['description'];

        $model->save();
        return redirect('/');

    }

    public function delete_post($id){
 
       $post = post::find($id);
       $post->delete();

       return redirect('/');

    }

}
