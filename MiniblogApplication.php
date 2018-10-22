<?php   

class MiniblogApplication extends Application
{
    protected $login_action = array( 'user', 'signin' );

    public function getRootDir()
    {
        return dirname( __FILE__ );
    }

    protected function registerRoutes()
    {
        return array(
            '/'
                => array( 'controller' => 'microposts', 'action' => 'index' ),
            '/member/:user_name'
                => array( 'controller' => 'microposts', 'action' => 'member' ),
            '/member/:user_name/microposts/:id'
                => array( 'controller' => 'microposts', 'action' => 'show' ),
            '/user/:action'
                => array( 'controller' => 'user' ),
            '/microposts/post'
                => array( 'controller' => 'microposts', 'action' => 'post' ),
            '/follow'
                => array( 'controller' => 'user', 'action' => 'follow' ),
        );
    }

    protected function configure()
    {
        $this->db_manager->connect( 'master', array(
            'dsn'       => 'mysql:dbname=miniblog;host=localhost',
            'user'      => 'root',
            'password'  => '',
        ) );
    }
}