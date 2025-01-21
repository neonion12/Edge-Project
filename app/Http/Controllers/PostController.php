<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home2() {
        return view('home2', ['posts' => Post::paginate(5)]);
    }
    

    public function create() {
        return view('create');
    }

    public function ourfilestore(Request $request) {

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $post = new Post;

        $post->name=$request->name;
        $post->description=$request->description;

        $post->save();

        return redirect()->route('home2');
    }

    public function editData($id) {
        $post = Post::findOrFail($id);
        return view('edit',['ourPost'=>$post]);
    }

    public function updateData($id,Request $request) {

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $post = Post::findOrFail($id);
        $post->name=$request->name;
        $post->description=$request->description;

        $post->save();

        return redirect()->route('home2');
    }

    public function deleteData($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('home2');
    }
}
