<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConnectModel;
use App\Models\CommentModel;
use App\Models\PageModel;

class LolController extends Controller
{
    public function getWelcome() {return view('welcome');}
    public function getMicro() {return view('micro');}
    public function getMacro() {return view('macro');}
    public function getChampions() {return view('champions');}
    public function getSearch(Request $request) {
        $page=new PageModel();
        if($request->getRequestUri()==='/result'){
            if(strlen($request->input('result'))===0) return redirect('/search');
            return view('search', ['result' => $page->where('title', 'LIKE', "%".$request->input('result')."%")->get(), 'searchword' => $request->input('result')]);
        }
        return view('search', ['result' => 0]);
    }
    public function getNews() {return view('news');}
    public function getGuide(Request $request) {
        $reply=new ConnectModel();
        $page=new PageModel();
        return view('guides', ['reply' => $reply->join('coment', 'connected.commentid', '=', 'coment.comment_id')->where('pagename', substr($request->getRequestUri(), 1))->get(), 'guide' => $page->where('name', substr($request->getRequestUri(), 1))->first()]);
    }
    public function getError() {return view('error');}
    public function getUs() {return view('us');}
    public function setReply(Request $request) {
        $comment=new CommentModel();
        $reply=new ConnectModel();
        if(is_null($comment->where('context', $request->input('comment'))->first())) {
            $comment->context=$request->input('comment');
            $comment->save();
            $reply->pagename=substr($request->getRequestUri(), 1,-6);
            $reply->commentid=$comment->all()->max('comment_id');
            $reply->save();
        }
        // if(!is_null($comment->where('context', $request->input('comment'))->first())) {
        //     $com=$comment->where('context', $request->input('comment'))->first()->comment_id;
        //     $name=substr($request->getRequestUri(), 1,-6);
        //     if(is_null($reply->where('commentid', $com)->where('pagename', $name)->first())) {
        //         $reply->commentid=$com;
        //         $reply->pagename=$name;
        //         $reply->save();
        //     }
        // }
        // else{
        //     $comment->context=$request->input('comment');
        //     $comment->save();
        //     $reply->pagename=substr($request->getRequestUri(), 1,-6);
        //     $reply->commentid=$comment->all()->max('comment_id');
        //     $reply->save();
        // }
        return redirect(substr($request->getRequestUri(), 0,-6));
    }
}
