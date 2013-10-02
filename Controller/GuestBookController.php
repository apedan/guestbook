<?php
/**
 * Created by JetBrains PhpStorm.
 * User: apedan
 * Date: 10/2/13
 * Time: 1:06 AM
 * To change this template use File | Settings | File Templates.
 */

namespace GuestBook;

use GuestBook\PostRepository;

class GuestBookController {

    public $twig;

    function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function indexAction(){
        $repository = new PostRepository();
        print $this->twig->render('index.html.twig', array('posts' => $repository->findAll()));
    }
}