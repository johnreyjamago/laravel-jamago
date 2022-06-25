<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\User;
 
class StudentController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }
 
    
    public function create()
    {
        return view('users.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('users')->with('flash_message', 'Student Addedd!');  
    }
 
    
    public function show($id)
    {
        $student = User::find($id);
        return view('users.show')->with('users', $student);
    }
 
    
    public function edit($id)
    {
        $student = User::find($id);
        return view('users.edit')->with('users', $student);
    }
 
  
    public function update(Request $request, $id)
    {
        $student = User::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('users')->with('flash_message', 'student Updated!');  
    }
 
   
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'Student deleted!');  
    }
}