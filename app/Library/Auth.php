<?php 

namespace App\Library;

use Illuminate\Support\Facades\DB;

class Auth 
{
    public static function authenticate($username, $password)
    { 
        $user = DB::table('user')->where('username', $username)->first();

        if (!empty($user)) { 
            if (password_verify($password, $user->password)) {
                if ($user->level >= 2) { 
                    $village_admin = DB::table('village_admin')->where('id_user', $user->id)->first();
                    $id_village    = $village_admin->id_village;
                } else {
                    $id_village = '';
                }

                session([
                    'user' => [
                        'username'   => $user->username,
                        'name'       => $user->name,
                        'level'      => $user->level,
                        'id_village' => $id_village
                    ]
                ]);

                return array(
                    'status' => 1,
                    'data' => $user
                );
            } else {
                return array(
                    'status' => 0,
                    'data' => []
                );
            } 
        } else {
            return array(
                'status' => 0,
                'data' => []
            );
        }
    }
}
