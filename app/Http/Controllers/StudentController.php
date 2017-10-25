<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Student;
use App\Comment;
use App\Customer;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home(){
        $allPublishedBlogs  = Blog::where('publication_status', '1')->get();
        return view('frontEnd.home',['allPublishedBlogs'=>$allPublishedBlogs]);
    }

    public function blogDetails($id){
        $blogById = Blog::find($id);
        return view('frontEnd.blog-details', ['blogById'=>$blogById]);

    }

    public function commentDetails($id){
        $blogById = Blog::find($id);
        $allPublishedComments  = DB::table('comments')
            ->join('customers', 'comments.customer_id', '=', 'customers.id')
            ->select('comments.*', 'customers.fullName')
            ->where('publication_status', '1')
            ->get();
        return view('frontEnd.blog-details', [
          'allPublishedComments'=>$allPublishedComments,
          'blogById'=>$blogById,
      ]);
    }

    public function support(){
        return view('frontEnd.support');
    }
    public function about(){
        return view('frontEnd.about');
    }
    public function blog(){
        return view('frontEnd.blog');
    }
    public function contact(){
        return view('frontEnd.contact');
    }
    public function saveStudent(Request $request){
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->save();
        return 'Success';
    }
}
