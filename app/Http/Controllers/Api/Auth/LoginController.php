<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    private $client;


    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {

        $http = new GuzzleHttpClient;

        $user= $request->validate([
            'email' => 'email|required',
            'password' => 'required',
            'is_login' => '0'

        ]);

//        if(!auth()->attempt($loginData)){
//            return response(['message'=>'invalid credentials']);
//        }
//        $accessToken = auth()->user()->createToken('authToken')->accessToken;
//        return response(['user'=>auth()->user(), 'access_token' =>$accessToken]);

//
//        $user = [
//            'email' => $request->email,
//            'password' => $request->password,
////            'role_id' => 3,
////            'is_login' => '0'
////            'is_active' => '1',
////            'is_verified' => '1'
//        ];
//
        $check = DB::table('ucr_users')->where('email', $request->email)->first();
//
//
        if ($check->is_login == '0') {
                    if (Auth::attempt($user)) {
                        $this->is_login(Auth::id());
                        $response = $http->post('http://ucreation.com/oauth/token', [
                            'form_params' => [
                                'grant_type' => 'password',
                                'client_id' => $this->client->id,
                                'client_secret' => $this->client->secret,
                                'username' => $request->email,
                                'password' => $request->password,
                                'scope' => '*'
                            ]
                        ]);
                        return json_decode((string) $response->getBody(), true);
                    } else {
                        return response([
                            'message' => 'Login Failed'
                        ]);
                    }
        } else {
            return response([
                'message' => 'Account is already logged in.'
            ]);
        }

    }
    public function logout(){
        $user = Auth::user();
        $accessToken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update(['revoked' => true]);
        $user->update([
            'is_login' => '0',
        ]);
        $accessToken->revoke();
        return response([
            'message' => 'Logged Out',
        ]);
    }
        private function is_login(int $id)
    {
        $user = User::findOrFail($id);
        return $user->update([
            'is_login' => '1',
        ]);
    }
}
