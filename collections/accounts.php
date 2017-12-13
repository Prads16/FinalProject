<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account';

    //This is the function to write to find user by ID for login.
    //Don't forget to return the object see findOne in the collection class
    public static function findUserbyUsername($username)
    {
            $tableName = get_called_class();
            $sqlquery = 'SELECT * FROM ' . $tableName . ' WHERE email ="' . $username.'"';
         //grab the only record for find one and return as an object
            $recordsSet = self::getResults($sqlquery);
            if (is_null($recordsSet)) 
            {
                return FALSE;
            } 
            else 
            {
                return $recordsSet[0];
            }
    }
}

?>
