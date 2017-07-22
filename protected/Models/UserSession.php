<?php

namespace App\Models;

use App\Db;
use App\Model;

class UserSession extends Model
{
    protected static $table = 'user_sessions';

    public static function saveUserSession($user, $hash)
    {
        $sql = 'INSERT INTO ' . static::$table . ' (user_id, hash) VALUES (:user_id, :hash)';
        $db = Db::instance();
        return $db->execute($sql, [':user_id' => $user, ':hash' => $hash]);
    }

    public static function getDataCurrentUser()
    {
        $hash = $_COOKIE['MYSESSID'] ?? null;
        if (empty($hash)) {
            return null;
        }

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE hash=:hash LIMIT 1';
        $db = Db::instance();
        $data = $db->query($sql, static::class, [':hash' => $hash]);

        if (empty($data)){
            return null;
        }

        return array_shift($data);

    }
}
