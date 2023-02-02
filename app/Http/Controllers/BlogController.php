<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Session;


/*
Route::get('/show-blog/{id}', [BlogController::class, 'showBlog'])->name('showBlog');
Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('addBlog');
Route::post('/save-blog', [BlogController::class, 'saveBlog'])->name('saveBlog');
Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('editBlog');
Route::post('/save-edit-blog/{id}', [BlogController::class, 'saveEditBlog'])->name('saveEditBlog');
Route::delete('/delete-blog/{id}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');

*/
class BlogController extends Controller
{
    //Blog main page
    public function blog(){
        //Fetch and pass data to the view, through model.
        $blog['data'] = Blog::all();  
      
        return view('blog.blog', compact('blog'));    
    }

    //Display single blog
    public function showBlog($id){
        $blog = Blog::find($id);    

        return view('blog.single_blog')->with('blog', $blog);
    }  
        
    //Open a new blog entry page
    public function addBlog(){
        return view('blog.add_blog');    
    }
    
    //Save added blog
    public function saveBlog(Request $request){

        $title = $request->input('title');
        $description = $request->input('description');  
        $text = $request->input('text');
        $hashtag = $request->input('hashtag');
        
        //Image manipulation                   
        $image = $request->file('image')->store('public/images');

        $blog = new Blog();

        $blog->title = $title;
        $blog->description = $description;
        $blog->text = $text;
        $blog->hashtag = $hashtag;
        $blog->image = $image;        

        $blog->save();     
 
        Session::flash('message', 'Congrats! You just added a new BLOG POST!');

        return redirect()->back(); 
    }

    //Open edit selected blog    
    public function editBlog($id){
        $blog = Blog::find($id);

        return  view('blog.edit_blog')->with('blog',$blog);    
    }

    //Save edited blog entry
    public function saveEditBlog($id, Request $request){
        $title = $request->input('title');
        $description = $request->input('description');  
        $text = $request->input('text');
        $hashtag = $request->input('hashtag'); 
        $image=NULL;
        if($request->image !== NULL){                  
            $image = $request->file('image')->store('public/images');
        }

        $blog = Blog::find($id);

        $blog->title = $title;       
        $blog->description = $description; 
        $blog->text = $text;
        $blog->hashtag = $hashtag;
        if ($image!==NULL) {$blog->image = $image;};

        $blog->save();
        
        Session::flash('message', 'You successfully edited a BLOG POST!');

        return redirect()->back();
    }

    //Delete selected blog
    public function deleteBlog($id){
        $data = Blog::find($id);
        $data->delete();
        Session::flash('message', 'You just deleted a BLOG POST!');

        return redirect()->route('blog');
    }
      
    



}
