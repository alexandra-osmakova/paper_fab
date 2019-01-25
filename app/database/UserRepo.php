<?php

namespace App\Database;

require "db.php";

use RedBeanPHP\R;
use App\Util\Encoder;

class UserRepo {
    public function getAll() {
        return R::findAll("users");
    }

    public function getByLogin($login) {
        return R::findOne("users", "WHERE login=:login", ["login" => $login]);
    }

    public function getById($id) {
        return R::load("users", $id);
    }

    public function create($user) {
        R::store($user);
    }

    public function update($user) {
        R::store($user);
    }

    public function delete($user) {
        R::trash($user);
    }


}