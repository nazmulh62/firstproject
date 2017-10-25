<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Comment;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){
        $publushedCategories = Category::where('publication_status','1')->get();
        return view('admin.blog.add-blog',[
            'publushedCategories'=>$publushedCategories
        ]);

    }
    public function saveBlogInfo(Request $request){

    $blogImage = $request->file('blog_image');
    $imageName = $blogImage->getClientOriginalName();
    $directory = 'blog_images/';
    $imageUrl = $directory.$imageName;
    $blogImage->move($directory, $imageName);
    $blog = new Blog();
    $blog->category_id = $request->category_id;
    $blog->blog_title = $request->blog_title;
    $blog->author_name = $request->author_name;
    $blog->blog_short_description = $request->blog_short_description;
    $blog->blog_long_description = $request->blog_long_description;
    $blog->blog_image = $imageUrl;
    $blog->publication_status = $request->publication_status;
    $blog->save();
    return redirect('/blog/add/')->with('message','Blog Info Save Successfully');
    }
    public function manage(){
       // $blogs = Blog::all();
        //$blogs = DB::table('blogs')->get();
        $blogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->select('blogs.id', 'blogs.blog_title', 'blogs.author_name', 'blogs.publication_status', 'categories.category_name')
            ->get();
        //return $blogs;
        return view('admin.blog.manage-blog',['blogs'=>$blogs]);

    }

    public function viewBlogDetailsInfo($id){
        $blogById = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->select('blogs.*', 'categories.category_name')
            ->where('blogs.id', $id)
            ->first();
        return view('admin.blog.view-blog',['blogById'=>$blogById]);

    }
    public function unpublishedBlogInfo($id){

        $blogById = Blog::find($id);
        $blogById->publication_status = 0;
        $blogById->save();
        return redirect('/blog/manage-blog');

    }
    public function publishedBlogInfo($id){
        $blogById = Blog::find($id);
        $blogById->publication_status = 1;
        $blogById->save();
        return redirect('/blog/manage-blog');

    }


    public function editBlogInfo($id){
        $publushedCategories = Category::where('publication_status','1')->get();
        $blogByid = Blog::find($id);
        return view('admin.blog.edit-blog',[
            'publushedCategories'=>$publushedCategories,
            'blogById'=>$blogByid

        ]);
    }
    public function updateBlogInfo(Request $request){

        if($request->blog_image){
            $blog = Blog::find($request->blog_id);
            unlink($blog->blog_image);
            $blogImage = $request->file('blog_image');
            $imageName = $blogImage->getClientOriginalName();
            $directory = 'blog_images/';
            $imageUrl = $directory.$imageName;
            $blogImage->move($directory, $imageName);
            $blog->category_id = $request->category_id;
            $blog->blog_title = $request->blog_title;
            $blog->author_name = $request->author_name;
            $blog->blog_short_description = $request->blog_short_description;
            $blog->blog_long_description = $request->blog_long_description;
            $blog->blog_image = $imageUrl;
            $blog->publication_status = $request->publication_status;
            $blog->save();
        }else{
            $blog = Blog::find($request->blog_id);
            $blog->category_id = $request->category_id;
            $blog->blog_title = $request->blog_title;
            $blog->author_name = $request->author_name;
            $blog->blog_short_description = $request->blog_short_description;
            $blog->blog_long_description = $request->blog_long_description;
            $blog->publication_status = $request->publication_status;
            $blog->save();
        }
    }
    public function deleteBloginfo($id){
        $blogByid = Blog::find($id);
        $blogByid->delete();
        return redirect('/blog/manage-blog');

    }

}
