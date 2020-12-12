<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Admin as AdminDB;

class AdminLoginController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //除了 login 其餘 function 都要經過 api 及 refresh.token 的 middleware 檢查
        $this->middleware(['admapi','refresh.token'], ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        //驗證
        $validator = Validator::make($credentials, [
            'email'   => 'required|email',
            'password' => 'required|min:4',
        ]);

        //驗證失敗返回訊息
        if ($validator->fails()) {
            return response()->json(['error' => '帳號密碼錯誤'], 400);
        }

        //透過Auth取得JWT token
        if (! $token = auth('admapi')->attempt($credentials)) {
            return response()->json(['error' => '授權失敗'], 401);
        }

        //將token拋出
        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth('admapi')->user());
    }

    /**
     * Get the Admins list.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $admins = AdminDB::paginate(5);
        return response()->json($admins);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        //找出登入者資料
        // $usser = auth('admapi')->user();

        //JWT RAW data
        // $payload = auth('api')->payload();

        //重新更新token
        // $newtoken = auth('api')->refresh();
        // return $this->respondWithToken($newtoken);

        //抓取是否有返回token
        // $token = request(['token']);

        //如果沒使用者存在則給出錯誤訊息
        // if(!auth('admapi')->user()){
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        //將該token列入失效名單
        // auth('admapi')->invalidate();

        //登出
        auth('admapi')->logout();
        return response()->json(['message' => 'Successfully logged out'], 200);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        $newToken = auth('admapi')->refresh(true, true);
        return $this->respondWithToken($newToken);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'user' => auth('admapi')->user(), //將使用者資料一起帶出
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('admapi')->factory()->getTTL(),
        ]);
    }
}
