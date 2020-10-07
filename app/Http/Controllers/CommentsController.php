<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
// use App\Models\Materies;

class CommentsController extends Controller
{

    public function index (){
        $dataComments = Comments::all();
        return response($dataComments);
    }

    public function komenItem($comments){
        $comen = Comments::where('idcomments',$comments)->get();
        return response($comen);
    }

    public function create_save(Request $request){
        $commentSave = new Comments;
        $commentSave->namecomments = $request->input('namecomments');
        $commentSave->save();
        return 'Success add comments';
    }

    
}
