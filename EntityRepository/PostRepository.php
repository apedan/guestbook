<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 10/2/13
 * Time: 1:07 AM
 * To change this template use File | Settings | File Templates.
 */

namespace GuestBook;

use GuestBook\PdoService;
use GuestBook\Post;

/**
 * Репозиторий постов
 * Class Post
 * @package GuestBook
 */
class PostRepository {

    public $pdo;

    function __construct()
    {
        $this->pdo = PdoService::getPdoClass();
    }

    public function createPost(Post $post){
        $this->pdo->prepare(
            'INSERT INTO `guest_book`.`post`
            (`title`, `body`)
            VALUES (:title, :body);');
        $this->pdo->bindParam(':title', $post->getTitle(), PDO::PARAM_STR, 255);
        $this->pdo->bindParam(':body', $post->getBody(), PDO::PARAM_TEXT);
        $this->pdo->execute();
    }

    public function findAll(){
        return $this->pdo->query('SELECT * FROM post;')->fetchAll(\PDO::FETCH_ASSOC);
    }
}

