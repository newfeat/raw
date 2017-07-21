<?php

namespace App;


class User extends Model
{
    const COOKIE_NAME = 'MYSESSID';

    protected static $table = 'users';

    public static function authenticate($email, $password)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE email = :email LIMIT 1';
        $db = Db::instance();
        $data = $db->query($sql, static::class, [':email' => $email]);
        if (!empty($data)) {
            if (password_verify($password, $data['password'])) {
                return $data['id'];
            }
        }
        return false;
    }

    public static function saveUserSession($user, $hash)
    {

        $sth = $dbh->prepare('INSERT INTO user_sessions (user_id, hash) VALUES (:user_id, :hash)');
        return $sth->execute([':user_id' => $user, ':hash' => $hash]);
    }

    public static function getCurrentUser()
    {
        $hash = $_COOKIE[COOKIE_NAME] ?? null;
        if (empty($hash)) {
            return null;
        }
        $dbh = new PDO ('mysql:host=localhost;dbname=auth', 'root', '');
        $sth = $dbh->prepare('SELECT * FROM user_sessions WHERE hash=:hash');
        $sth->execute([':hash' => $hash]);
        $data = $sth->fetch();
        if (empty($data)) {
            return null;
        }

        $sth = $dbh->prepare('SELECT * FROM users WHERE id=:id');
        $sth->execute([':id' => $data['user_id']]);
        $currentuser = $sth->fetch();
        return $currentuser['email'];
    }
}
