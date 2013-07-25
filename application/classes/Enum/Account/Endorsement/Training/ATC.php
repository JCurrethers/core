<?php

defined('SYSPATH') or die('No direct script access.');

class Enum_Account_Endorsement_Training_ATC extends Enum_Account_Endorsement {
    const INS1 = 1;
    const INS2 = 2;
    const INS3 = 3;
    
    public static function getDescription($id){
        switch($id){
            case self::INS1:
            case self::INS2:
                return "Instructor";
            case self::INS3:
                return "Senior Instructor";
            default:
                return parent::getDescription($id);
        }
    }
}