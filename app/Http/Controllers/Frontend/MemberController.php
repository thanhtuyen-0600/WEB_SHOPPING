<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Auth;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showRegisterForm()
    {
        $countries = Country::all();

        // Truyền biến $countries vào view
        return view('frontend.member.register', ['country' => $countries]);
        
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|string|email|max:255',
            'password' =>'required|string|min:6',
            'phone'=>'required|string|max:11',
            'address'=>'required|string|max:255',
            'avatar'=>'required|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        $avatar=$request->avatar;
        
        if(!empty($file)){
            $data['avatar'] =$avatar->move('upload/user/avatar', $avatar->getClientOriginalName());       
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'avatar' => $avatar,
            'level' => 0,
        ]);

        Auth::login($user);

        return redirect()->route('member.login'); 
    }

    public function showLoginForm()
    {
        return view('frontend.member.login');
    }

    public function login(Request $request)
    {
        $login=[

            'email' =>$request->email,
            'password' =>$request->password,
            'level'=>0
        ];

        $remember = false;

        if($request ->remember_me){
            $remember = true;
        }

        if(Auth::attempt($login,$remember)){
            return redirect('/');
        }else{
            return redirect()->back()->withErrors('Email or password không đúng.');
        }
        
    }

}
