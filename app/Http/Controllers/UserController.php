<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
use Hash;

class UserController extends Controller
{

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);

        if (!$this->guard()->attempt($credentials)) {
            return response()->json([
                'message' => 'Parol yoki login xato!'
            ], 299);
        }

        $token = $this->guard()->user()->createToken('auth-token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'type' => 'Bearer',
        ], 200);
    }


    public function register(Request $res)
    {

        $validate = Validator::make($res->all(),[
            'phone' => 'required|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
        ],$messages = [
            'required' => ":attribute bo'sh bo'lmasligi kerak.",
            'unique' => ":attribute band.",
            'min' => ":attribute :min simboldan kam bo'lmasligi kerak.",
            'phone' => ":attribute to'gri emas",
            'confirmed' => ":attributelar mos kelmayabdi"
        ],[
            'phone' => "phone",
            'password' => 'Parol'
        ]);

        if($validate->fails()){
            return response()->json($validate->errors(),299);
        }
        
        $user = User::create([
            'phone' => $res['email'],
            'password' => Hash::make($res['password']),
        ]);

        return response()->json([
            'token' => $user->createToken('auth-token')->plainTextToken,
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        $this->guard()->logout();
        
        return response()->json([
            'message' => 'logout',
        ], 200);
    }

    public function guard($guard = 'web')
    {
        return Auth::guard($guard);
    }


    public function getUser(Request $req){
        return Auth::user();
    }
}
