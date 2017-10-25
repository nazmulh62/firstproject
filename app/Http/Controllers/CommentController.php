<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Customer;
use DB;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function saveCommentInfo(Request $request){
       // $customer = Customer::where('$id')->first();
        $comment = new Comment();
        $comment->customer_id = $request->customer_id;
        $comment->customer_comment = $request->customer_comment;
        $comment->publication_status = $request->publication_status;
        $comment->save();
        return redirect('/');
    }
    public function manageComment(){

       // $comments = Comment::all();
       // return view('admin.comment.manage-comment',['comments'=>$comments]);

                $comments = DB::table('comments')
                   ->join('customers', 'comments.customer_id', '=', 'customers.id')
                    ->select('comments.id', 'comments.customer_id', 'comments.customer_comment', 'comments.publication_status','customers.fullName')
                    ->get();
      return view('admin.comment.manage-comment',['comments'=>$comments]);

    }
    public function viewCommentDetailsInfo($id){
        $commentById = DB::table('comments')
            ->join('customers', 'comments.customer_id', '=', 'customers.id')
            ->select('comments.*', 'customers.fullName')
            ->where('comments.id', $id)
            ->first();
        return view('admin.comment.view-comment',['commentById'=>$commentById]);

    }

        public function unpublishedCommentInfo($id){

        $commentById = Comment::find($id);
        $commentById->publication_status = 0;
        $commentById->save();
        return redirect('/comment/manage-comment');

    }
    public function publishedCommentInfo($id){
        $commentById = Comment::find($id);
        $commentById->publication_status = 1;
        $commentById->save();
        return redirect('/comment/manage-comment');

    }
    public function deleteCommentInfo($id){
        $commentById = Comment::find($id);
        $commentById->delete();
        return redirect('/comment/manage-comment');

    }
    //public function commentDetails(){
        //$commentById = Comment::find($id);
        // return view('frontEnd.blog-details', ['commentById'=>$commentById]);
        //$allPublishedComments  = Comment::where('publication_status', '1')->get();
        //return view('frontEnd.blog-details',['allPublishedComments'=>$allPublishedComments]);
    //}
   // public function customerComment($id)
    //{
       // $commentById = Comment::find($id);
        //return view('frontEnd.blog-details', ['commentById' => $commentById]);
   // }
}
