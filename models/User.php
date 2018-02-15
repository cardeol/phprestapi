<?php

use \Illuminate\Database\Eloquent\Model as Model;

class User extends \Illuminate\Database\Eloquent\Model  {

    protected $table = "users";
    protected $hidden = array('password', 'activation_code');

     protected $dates = [
        'birthdate'
     ];
    
}

?>