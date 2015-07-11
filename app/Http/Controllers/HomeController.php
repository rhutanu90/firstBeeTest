<?php
/**
 * Created by PhpStorm.
 * User: Hutanu
 * Date: 7/8/15
 * Time: 8:57 PM
 */

namespace App\Http\Controllers;

use App\User;
use DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    public function returnHelloWorld(){
        $response = array();

       // die(phpinfo());
        $response['Msg'] = "Hello Robert";

        $server = 'tcp:k67fbb5wd8.database.windows.net';
        $user = 'beeboardUser@k67fbb5wd8';
        $pwd = 'Robert$123';
        $db = 'demoBeeBoard_DB';

        try{
            $conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(Exception $e){
            $response['MSG2'] = print_r($e);
        }

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
