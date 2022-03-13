<?php
  
namespace App\Http\Controllers;
  
use App\Models\Note;
use Illuminate\Http\Request;
use DB;
class NoteController extends Controller
{
    public function noteAll()
    {
        // $notes = Note::latest()->paginate(5);
        $notes    =     DB::table('notes')->where('user_id', auth()->id())->paginate(5);

        return view('note.index',compact('notes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    public function createNote()
    {
        return view('note.create');
    }
    public function storeNote(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ]);
  
        Note::create($request->all());
   
        return redirect('dashboard')
                        ->with('success','Note created successfully.');
    }
   
    public function deleteRecord($id)
    {
        $records   =      Note::find($id);
        $records->delete();
        return redirect()->back()->with('message','Deleted Successfully !');
    }
   

}