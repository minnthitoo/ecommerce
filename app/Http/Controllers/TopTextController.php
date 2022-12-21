<?php

namespace App\Http\Controllers;

use App\Models\toptext;
use Illuminate\Http\Request;

class TopTextController extends Controller
{
    public function index()
    {
       $TopText = toptext::first();
       return view('admin.configuration.toptext',compact('TopText'));
    }

    //edit
    public function update(Request $request)
    {
        $data = [
            'text' => $request->text
        ];
        toptext::where('id',1)->update($data);
        return back()->with(['message' => 'Updated Successfully']);
    }
}
