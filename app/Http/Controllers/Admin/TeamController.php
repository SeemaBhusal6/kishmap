<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()

    {
      $teams = Team::orderBy('priority')->get();
      return view('admin.team.index',compact('teams'));
    }

    public function create()
    {
      return view('admin.team.create');  
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            
            
            'priority' => 'integer|required',
            'name' => 'required',
            'title' =>'required',
            
            'photopath' =>'required',
        ]);
            if($request->hasFile('photopath'))
            {
                $file = $request->photopath;
                //get file name with extension
                $filename = $file->getClientOriginalName();
                $filename = time().'_'.$filename;
                //store file in public
                $file->move('images/team',$filename);
                $data['photopath'] = $filename;
            }
            
            Team::create($data);
            

            return redirect(route('team.index'))->with('success','team Created Successfully');
    
            
        }

        public function edit( $id){
          $team = Team ::find($id);
          
          return view('admin.team.edit',compact('team'));
  }
  public function update(Request $request, $id )
      {
          $team= Team::find($id);
          $data = $request->validate([
            
            
            'priority' => 'integer|required',
            'name' => 'required',
            'title' =>'required',
            
            'photopath' =>'required',
        ]); 
  
          if($request->hasFile('photopath'))
          {
              $file = $request->photopath;
              //get file name with extension
              $filename = $file->getClientOriginalName();
              $filename = time().'_'.$filename;
              //store file in public
              $file->move('images/team',$filename);
              $data['photopath'] = $filename;
          }
         
          $team->update($data);
  
          return redirect(route('team.index')) ->with('success','Client Updated Successfully');;
          
  
          
  
      }
      public function destroy(Request $request)
      {
          $team = Team::find($request->dataid);
          $team->delete();
          return redirect (route('team.index'));
      }
}
