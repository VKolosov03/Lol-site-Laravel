<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConnectModel;

class LolController extends Controller
{
    public function getWelcome() {return view('welcome');}
    public function getMicro() {return view('micro');}
    public function getMacro() {return view('macro');}
    public function getChampions() {return view('champions');}
    public function getSearch() {return view('search');}
    public function getNews() {return view('news');}
    public function getPyke() {
        $reply=new ConnectModel();
        return view('pyke', ['reply' => $reply->all()]);
    }
    public function getError() {return view('error');}
    public function getUs() {return view('us');}
    public function setReply(Request $request) {
        $reply=new ConnectModel();
        $reply->context=$request->input('comment');
        $reply->save();
        return redirect()->route('pyke');
    }
}
