<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\User;
 
class UserController extends Controller
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
        return redirect('User')->with('Success', 'User Added!');  
    }
 
    
    public function show($id)
    {
        $User = User::find($id);
        return view('users.show')->with('users', $User);
    }
 
    
    public function edit($id)
    {
        $User = User::find($id);
        return view('users.edit')->with('users', $User);
    }
 
  
    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $input = $request->all();
        $User->update($input);
        return redirect('ProfilePage.php')->with('Success', 'User Updated!');  
    }
 
   
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('Welcome.php')->with('Success', 'User deleted!');  
    }
}
