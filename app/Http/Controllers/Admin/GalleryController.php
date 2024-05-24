<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('id')->get();
      return view('admin.gallery.index',compact('galleries'));

    }
    public function create()
    {
        return view('admin.gallery.create');

    }
    public function store(Request $request)
    {
        $data = $request->validate([
            
            
           
            
            'caption' => 'required',
            'photopath' =>'required',
            
        ]);
            if($request->hasFile('photopath'))
            {
                $file = $request->photopath;
                //get file name with extension
                $filename = $file->getClientOriginalName();
                $filename = time().'_'.$filename;
                //store file in public
                $file->move('images/gallery',$filename);
                $data['photopath'] = $filename;
            }
            
            Gallery::create($data);
            

            return redirect(route('gallery.index'));
    
            
        }

        public function edit( $id){
          $gallery = Gallery ::find($id);
          
          return view('admin.gallery.edit',compact('gallery'));
  }
  public function update(Request $request, $id )
      {
          $gallery= Gallery::find($id);
          $data = $request->validate([
            
            
            'caption' => 'required',
            'photopath' =>'required',
            
        ]); 
  
          if($request->hasFile('photopath'))
          {
              $file = $request->photopath;
              //get file name with extension
              $filename = $file->getClientOriginalName();
              $filename = time().'_'.$filename;
              //store file in public
              $file->move('images/gallery',$filename);
              $data['photopath'] = $filename;
          }
         
          $gallery->update($data);
  
          return redirect(route('gallery.index'));
          
  
          
  
      }
      public function destroy(Request $request)
      {
          $gallery = Gallery::find($request->dataid);
          $gallery->delete();
          return redirect (route('gallery.index'));
      }
      
}
