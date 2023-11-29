<?php

namespace App\Http\Controllers;

use App\Http\Middleware\adminauth;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{


  public function dashbord()
  {
// dd('hello');
    $model = post::with('user')->paginate(10);
    $postCount = Post::count();

    // Count the total number of users
    $userCount = User::count();


    return view('admin1.home', compact('model', 'postCount', 'userCount'));
  }

  public function all_user()
  {

    $model = User::paginate(15);
    return view('admin1.all_user', compact('model'));
  }

  public function admin_delete_post($id)
  {

    $post = post::find($id);

    $post->delete();

    return redirect('admin/dashbord');
  }

  public function admin_edit_post($id)
  {

    $model = post::find($id);
    return view('admin.editpost', compact('model'));

  }

  public function admin_post_update(Request $request)
  {

    $update = $request->all();
    $id = $update['id'];
    $model = post::find($id);

    $model->title = $update['title'];
    $model->description = $update['description'];

    $model->save();
    return redirect('admin-dashbord');
  }

  public function admin_blockuser($id)
  {
    $user = User::find($id);
    if ($user) {
      $user->status = !$user->status;
      $user->save();
      return redirect('all-user');
    }
  }

}
