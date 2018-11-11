<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\User;
<<<<<<< HEAD
use gta\Customization;
=======
use gta\Auth;
>>>>>>> dev

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    // para mostrar todos los users en el panel
    public function showUsers()
    {
        $users = User::paginate(50);
        // dd($users[0]->application->state_id);   
        $custom = Customization::find(1);
        
        return view('panel.users',compact('custom','users'));
    }

    // para mostrar un solo usuario en /panel/users/<slug>
    public function showUser($userId)
    {   
        // $user=User::where('username', $username)->first();
        $user=User::find($userId);
        $custom = Customization::find(1);

        
        // dd($user->application);
        return view('panel.user',compact('custom','user'));
            // 'user'=>$user,
            // ]);
    }

}
