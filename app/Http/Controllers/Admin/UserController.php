<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:user list', ['only' => ['index', 'show']]);
        // $this->middleware('can:user create', ['only' => ['create', 'store']]);
        // $this->middleware('can:user edit', ['only' => ['edit', 'update']]);
        // $this->middleware('can:user delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    { 
        if(isset($request->search)){
            $users = User::where('name', 'Like', '%'.$request->searchName.'%')->orderBy('id','DESC')->paginate(10);
        }else{  
            $users =  User::orderBy('id','DESC')->paginate(5);
        }

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
   
        $roles = Role::all();

        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserRequest  $request
     * @param  CreateUser  $createUser
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,User $user)
    { 
        $request->validate([
            'userName' => 'required|max:255',
            'userEmail' => 'required|email|unique:users,email,'.$user->id, 
            'password' => 'required| min:4| max:7 |confirmed',
            'password_confirmation' => 'required| min:4',
            'roles' => 'required',
        ]);  
         
        $user = new User();
        $user->name = $request->userName;
        $user->email = $request->userEmail;
        $user->password = $request->password;
        $user->type = $request->roles;
        $user->save();
        

        return redirect()->route('admin.users')
                        ->with('message', __('User created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function show(User $user)
    {
        $roles = Role::all();
        $userHasRoles = array_column(json_decode($user->roles, true), 'id');

        return view('admin.user.show', compact('user', 'roles', 'userHasRoles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\View\View
     */
    public function userEdit(Request $request, $id)
    {
        $user = User::find($id); 
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @param  UpdateUser  $updateUser
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userUpdate(Request $request)
    {  
        $user = User::find($request->userId);
        $user->name  = $request->userName;
        $user->email = $request->userEmail;
        $user->type = $request->role; 
        $user->save();
        return redirect()->route('admin.users')
                        ->with('message', __('User updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index')
                        ->with('message', __('User deleted successfully'));
    }

    /**
     * Show the user a form to change their personal information & password.
     * 
     * @return \Illuminate\View\View
     */
    public function accountInfo()
    {
        $user = \Auth::user();

        return view('admin.user.account_info', compact('user'));
    }

    /**
     * Save the modified personal information for a user.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function accountInfoStore(Request $request)
    {
        $request->validateWithBag('account', [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.\Auth::user()->id],
        ]);

        $user = \Auth::user()->update($request->except(['_token']));

        if ($user) {
            $message = 'Account updated successfully.';
        } else {
            $message = 'Error while saving. Please try again.';
        }

        return redirect()->route('admin.account.info')->with('account_message', __($message));
    }

    /**
     * Save the new password for a user.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePasswordStore(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'old_password' => ['required'],
            'new_password' => ['required', Rules\Password::defaults()],
            'confirm_password' => ['required', 'same:new_password', Rules\Password::defaults()],
        ]);

        $validator->after(function ($validator) use ($request) {
            if ($validator->failed()) {
                return;
            }
            if (! Hash::check($request->input('old_password'), \Auth::user()->password)) {
                $validator->errors()->add(
                    'old_password', __('Old password is incorrect.')
                );
            }
        });

        $validator->validateWithBag('password');

        $user = \Auth::user()->update([
            'password' => Hash::make($request->input('new_password')),
        ]);

        if ($user) {
            $message = 'Password updated successfully.';
        } else {
            $message = 'Error while saving. Please try again.';
        }

        return redirect()->route('admin.account.info')->with('password_message', __($message));
    }
}
