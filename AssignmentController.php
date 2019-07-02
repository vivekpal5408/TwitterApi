<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
use DB;

class AssignmentController extends BaseController
{
    public function index(){
        User::chunk(100, function ($users) {
            $k = 0;
            foreach ($users as $user) {
              // might be more logic here
                echo $user->id.'<br>';
                echo $user->name.'<br>';
            
            }
        });
    }


}
?>