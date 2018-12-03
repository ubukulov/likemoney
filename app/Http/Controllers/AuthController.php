<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Psy\Exception\ErrorException;

class AuthController extends Controller
{
    public function signUp(Request $request)
    {
        $data = $request->all();
        if (self::exists($data['email'])) {
            return response()->json([
                'success' => false,
                'message' => 'Пользователь с такими данными уже зарегистрирован.'
            ], 422);
        } else {
            DB::beginTransaction();
            try{
                $user = User::create([
                    'email' => $data['email'], 'first_name' => $data['first_name'],
                    'password' => Hash::make($data['password']), 'created_at' => Carbon::now()
                ]);

                UserProfile::create([
                    'user_id' => $user->id, 'phone' => $data['phone'], 'city_id' => 1, 'created_at' => Carbon::now()
                ]);

                DB::commit();

                \Auth::login($user);

                return redirect('/');

//                return response()->json([
//                    'success' => true,
//                    'message' => 'Пользолватель успешно зарегистрован.'
//                ], 200);
            } catch (ErrorException $exception) {
                DB::rollBack();
                dd($exception);
            }
        }
    }

    public static function exists($email)
    {
        $user = User::where(['email' => $email])->first();
        if ($user) {
            return true;
        }

        return false;
    }

    public function signIn(Request $request)
    {
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return redirect('/');
        }

        return response()->json([
            'success' => false,
            'message' => 'Пользовател с такими данными не найдено.'
        ], 422);
    }
}
