<?php

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model
{
    protected static $table = 'users';

    public static function findByEmail($email)
    {
        $sql = 'SELECT * FROM ' . static::$table. ' WHERE email=:email LIMIT 1';
        $db = Db::instance();
        $data = $db->query($sql, static::class, [':email' => $email]);
        if (empty($data)){
            return false;
        }
        return array_shift($data);
    }


    public static function authenticate($email, $password)
    {
        $data = User::findByEmail($email);
        if (!empty($data)) {
            if (password_verify($password, $data->password)) {
                return $data->id;
            }
        }
        return false;
    }


    public static function getCurrentUser()
    {
        $data = \App\Models\UserSession::getDataCurrentUser();

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id LIMIT 1';

        $db = Db::instance();

        $currentuser = $db->query($sql, static::class, [':id' => $data->user_id]);
        return $currentuser;
    }
}
