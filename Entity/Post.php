<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 10/2/13
 * Time: 1:07 AM
 * To change this template use File | Settings | File Templates.
 */

namespace GuestBook;

/**
 * Сущность поста в гостевую книгу
 * Class Post
 * @package GuestBook
 */
class Post {

    /**
     * Название
     * @var
     */
    public $title;

    /**
     * Текст
     * @var
     */
    public $body;

    /**
     * Дата создания
     * @var
     */
    public $createAt;

    function __construct($data)
    {
        $this->populate($data);
    }

    public function populate($data = array())
    {
        foreach ($data as $field => $value) {
            if (property_exists($this, $field)) {
                $this->$field = $value;
            }
        }
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

}
