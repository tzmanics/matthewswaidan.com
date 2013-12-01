<?php
class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function add() {
      # make sure user is logged in to post
        if(!$this->user){
            Router::redirect("/users/login");
        } else {

            # setup view & title
            $this->template->content = View::instance('v_posts_add');
            $this->template->title = "New Post";

            # load js files
            $client_files_body = Array(
                "/js/jquery.form.js",
                "/js/posts_add.js"
            );

            $this->template->client_files_body = Utils::load_client_files($client_files_body);

            #render view
            echo $this->template;
            }
        }

     public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('posts', $_POST);

        # Quick and dirty feedback
        echo "Your post has been added. <a href='/posts/add'>Add another</a>";

    }

} # end of the class