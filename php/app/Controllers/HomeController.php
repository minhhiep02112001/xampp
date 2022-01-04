<?php
    namespace  App\Controllers;

    use App\Models\User;
    use App\Core\Controller;

    class HomeController extends Controller
    {
        function __construct()
        {
            $this->index();
        }
        public function index(){
            if(isset($_GET['admin'])){
                echo ($_GET['admin']);
            }
            $user = User::all();

            return $this->view('index' , ['users'=>'Chu Minh Hiệp']);
        }
    }