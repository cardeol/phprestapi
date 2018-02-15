<?php

use \Illuminate\Database\Eloquent\Model as Model;

class UserToken extends \Illuminate\Database\Eloquent\Model  {


	protected $table = "usertokens";

     protected $dates = [
        'date_expiration'
     ];
    
}

?>