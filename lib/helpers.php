<?php


class Helper {

    public static function mdhash($data) {
        $salt = "56354asda1dsfas";
        if($data === null) $data = "";
        return md5($data.$salt);
    }

    public static function genPayload($user) {
        
    }

    public static function Response($data) {
        header("Access-Control-Allow-Origin: *");
        $c = count($data);
        $r = array( "result" => true, "data" => $data, "count" => $c );
        echo json_encode($r);
    }

    public static function ResponseError($message) {
        $r = array("result" => false, "message" => $mesage );
        
        echo json_encode($r);
    }

   
    
}

?>