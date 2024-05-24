<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices =Notice::orderBy('priority')->get();
        return view('admin.notice.index',compact('notices'));
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'notice_title' => 'required',
            'notice_date' => 'required',
            'priority' => 'integer|required',
            'photopath' => 'required',
            'show' => 'required',
        ]);
        if($request->hasFile('photopath'))
            {
                $file = $request->photopath;
                //get file name with extension
                $filename = $file->getClientOriginalName();
                $filename = time().'_'.$filename;
                //store file in public
                $file->move('images/notice',$filename);
                $data['photopath'] = $filename;
            }
        Notice::create($data);
        return redirect()->route('notice.index')->with('success', 'Notice Added Successfully');

    }
    public function edit($id)
    {
        $notice= Notice ::find($id);
        
        return view('admin.notice.edit',compact('notice'));

    }
    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'notice_title' => 'required',
            'notice_date' => 'required',
            'priority' => 'integer|required',
            'photopath' => 'required',
            'show' => 'required',
        ]);
        if($request->hasFile('photopath'))
        {
            $file = $request->photopath;
            //get file name with extension
            $filename = $file->getClientOriginalName();
            $filename = time().'_'.$filename;
            //store file in public
            $file->move('images/notice',$filename);
            $data['photopath'] = $filename;
        }
        $notice = Notice::find($id);
        $notice->update($data);

        return redirect(route('notice.index')) ->with('success','Notice Updated Successfully');

    }
    public function destroy(Request $request)
    {
        $notice = Notice::find($request->dataid);
        $notice->delete();
        return redirect (route('notice.index')) ->with('success','Notice Deleted Successfully');

    }
}