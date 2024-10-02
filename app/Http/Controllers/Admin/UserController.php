<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Updateprofile;
use App\Models\User; 
use App\Models\Country; 
use Auth;

class UserController extends Controller
{ 
    //Phải đăng ký tài khoản mới được vào ...
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::all();
    
        // Truyền biến $country sang view
        return view('profile', compact('country'));
    
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
    public function update(Updateprofile $request)
    {
        //lấy id của user 

        $userId = Auth::id();

        //viết hàm sql lấy tất cả thông tin của user có id=id truyền vào 

        $user= User::findOrFail($userId);

        //lấy all thông tin từ form nhập vào 

        $data=$request->all();

        //lấy thông tin của file upload

        $file=$request->avatar;

        //kiểm tra nếu có file upload thì lấy tên file đưa vào mảng

        if(!empty($file)){
            $data['avatar'] =$file->getClientOriginalName();
            //getClientOriginalName(): lấy tên gốc của tệp
        }

        //kiểm tra có nhập pass mới

        if($data['password']){
            $data['password'] = bcrypt($data['password']);

            //bcrypt: bảo vệ mật khẩu ng dùng

            }else{
                $data['password']=$user->password;
            } 

        //update tất cả thông tin có trong mảng data vào table user 
            
        if ($user->update($data)){
            if(!empty($file)){
            $file->move('upload/user/avatar', $file->getClientOriginalName());
            }
            return redirect()->back()->with('success',_('Update profile success.'));
        }else{
            return redirect()->back()->withErrors('Update profile error.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function profile()
    {
        $countries = Country::all();

        // Truyền biến $countries vào view
        return view('admin.user.profile', ['country' => $countries]);
    }

}
