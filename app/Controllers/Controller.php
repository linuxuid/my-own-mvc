<?php 
declare(strict_types=1);

namespace App\Controllers;

use Route\View;
use Services\DB\DB;

abstract class Controller 
{
    /** @var object */
    protected object $view;

    /** @var object */
    protected object $db;
    
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../resources/Templates');
        $this->db = new DB();
    }

}