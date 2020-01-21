<?php


class Posts extends Controller
{

    /**
     * Posts constructor.
     */
    public function __construct()
    {
        $this->postModel = $this->model('post');
    }

    public function index(){
        $data = array(
            'title' => 'Welcome to Posts',
            'content' => 'Posts view is loaded'
        );
        $this->view('posts/index', $data);
    }
}