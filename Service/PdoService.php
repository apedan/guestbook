<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 10/2/13
 * Time: 1:16 AM
 * To change this template use File | Settings | File Templates.
 */

namespace GuestBook;

use PDO;

class PdoService {

    public static function getPdoClass(){
        $pdo = new PDO('mysql:host=localhost;dbname=guest_book;charset=utf8', "root", "");
        return $pdo;
    }

}