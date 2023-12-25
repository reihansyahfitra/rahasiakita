<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Komentator;

class ContentController extends Controller
{
    public function showContent()
    {
        $data_contents = Content::all();
        return view('content', ['contents' => $data_contents]);
    }

    public function showContentInfo($id)
    {
        $data_contents = Content::find($id);
        $content_names = Content::all();
        $data_komentator = Komentator::all();
        return view('content-info', ['contents' => $data_contents, 'content_names' => $content_names, 'komentators' => $data_komentator]);
    }

    public function postComment(Request $request, $id)
    {
        $data_contents = Content::find($id);
        $komentator = new Komentator;
        $komentator->name = $request->input('nama');
        $komentator->job = $request->input('pekerjaan');
        $komentator->comments = $request->input('posting');
        $komentator->id_content = $data_contents->id;
        $komentator->save();
        return redirect('/contents/info/' . $id);
    }
}
