<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class PageController extends Controller
{
    public function update(Request $request, $id)
    {
     $item = Page::find($id);

     if($request->hasFile('image'))
        {
            if (file_exists(public_path('storage/pages/October2021/' . $item->image)))
            {
                unlink(public_path().'/storage'.'/pages'.'/October2021'.'/'.$item->image);
            }

             $file = $request->file('image');

             $name = 'about.'.$file->getClientOriginalExtension();

             $file->storeAs('public/pages/October2021', $name);

             $item->image = $name;
        }

     $item->title = $request->title;

     $item->subtitle = $request->subtitle;

     $item->description = $request->description;

     $item->save();

     return redirect()->back()->with('success','Page Updated Successfully');
    }

    public function updateStatus(Request $request){
        $model = '\\App\\Course';
        $course = $model::find($request->id);
        $course->status = $request->val;
        $course->update();
        $msg = $request->val ? 'Course is available' : 'Course is not available';
        return response([
            "msg" => "{$msg}"
        ],200);
    }
}
