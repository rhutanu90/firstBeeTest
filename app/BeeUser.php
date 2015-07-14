<?php
/**
 * Created by PhpStorm.
 * User: Hutanu
 * Date: 7/12/15
 * Time: 2:22 PM
 */


namespace App;

use Illuminate\Database\Eloquent\Model;

class BeeUser extends Model{

    protected $table = "BEEUSER";

    protected $primaryKey = "ID_BEEUSER";

    protected $fillable = ['USERNAME', 'PASSWORD', 'FIRST_NAME', 'LAST_NAME', 'EMAIL', 'PHONE', 'STATUS', 'DELETED'];

    public $timestamps = true;

}
