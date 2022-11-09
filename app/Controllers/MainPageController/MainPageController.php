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
        $users = User::findAll();

        $user = User::find(1);

        var_dump($user);
        
        $this->view->renderView("mainPageController.php", [
            'users' => $users,
        ]);
    }
}