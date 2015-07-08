<?php
/**
 * Created by PhpStorm.
 * User: Hutanu
 * Date: 7/8/15
 * Time: 8:57 PM
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    public function returnHelloWorld(){
        $response = array();

        $response['Msg'] = "Hello Robert";

        return json_encode($response);
    }

    public function getCurrentData(){
        $response = array();

        $date = new \DateTime();

        $response['currentDate'] = $date->format('Y-m-d H:i');
        $response['Msg'] = "routing is working";

        return json_encode($response);

    }

}
