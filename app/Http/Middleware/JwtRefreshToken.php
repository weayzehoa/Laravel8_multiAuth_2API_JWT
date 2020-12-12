<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException as TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException as TokenExpiredException;

class JwtRefreshToken extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        try {
            //檢查是否有使用者通過驗證
            $user = JWTAuth::parseToken()->authenticate();

            // //Token TTL 到期時間
            // $expireTime = JWTAuth::payload()['exp'];
            // // 如果 Token 到期時間小於5分鐘，重新產生一個新的 Token 並附帶在 header 送出，讓前端重新抓取.
            // if (($expireTime - time()) < 5*60 && ($expireTime - time()) > 0) {
            //     $refreshed = JWTAuth::refresh(JWTAuth::getToken());
            //     $user = JWTAuth::setToken($refreshed)->toUser();
            //     $request->headers->set('Authorization', 'Bearer '.$refreshed);

            //     // 輸出到BODY測試
            //     return response()->json([
            //         'code' => 200,
            //         'user' => $user,
            //         'access_token' => $refreshed,
            //         'token_type' => 'bearer',
            //         'expires_in' => JWTAuth::factory()->getTTL(),
            //     ]);
            // }

        } catch (Exception $e) {
            //檢查 Token 是否無效
            if ($e instanceof TokenInvalidException){
                $status     = 401;
                $message    = 'This token is invalid. Please Login';
                return response()->json(compact('status','message'),401);
            //檢查 Token 是否到期
            }else if ($e instanceof TokenExpiredException){
                try
                {
                    // 如果 Token 到期，重新產生一個新的 Token 並附帶在 header 送出，讓前端重新抓取.
                    $refreshed = JWTAuth::refresh(JWTAuth::getToken());
                    $user = JWTAuth::setToken($refreshed)->toUser();
                    $request->headers->set('Authorization','Bearer '.$refreshed);

                    // 輸出到BODY測試
                    // return response()->json([
                    //     'code' => 200,
                    //     'user' => $user,
                    //     'access_token' => $refreshed,
                    //     'token_type' => 'bearer',
                    //     'expires_in' => JWTAuth::factory()->getTTL(),
                    // ]);

                }catch (JWTException $e){
                    // Token 無法被 refresh
                    return response()->json([
                        'code'   => 103,
                        'message' => 'Token cannot be refreshed, please Login again'
                    ]);
                }
            }else{
                //找不到 Token.
                $message = 'Authorization Token not found';
                return response()->json(compact('message'), 404);
            }
        }
        return $next($request);
    }
}
