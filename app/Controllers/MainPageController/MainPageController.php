<?php 
declare(strict_types=1);

namespace App\Controllers\MainPageController;

use App\Controllers\Controller;
use App\Models\User;

class MainPageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $users = $this->db->query("SELECT * FROM `users`;", [], User::class);
        
        echo "<pre>";
        var_dump($users);
        
        // $this->view->renderView("mainPageController.php");
    }
}