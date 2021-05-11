<?php

final class SecondGreatestAlgorithm 
{

    public static function findByMagic(array $arr)
    {
    
        sort($arr);
        
        return $arr[sizeof($arr)-2];
    }
    

    public  static function  findByLoop(array $arr)
    {
    
        //If array is empty then return
        if(empty($arr)) {
            return;
        }
    
        /*
         * Initialize max and second max with negative value
         */
        $max = -1;
        $secondMax = -1;
        
        //Traverse an array
        foreach($arr as $number) {
            
            //If it's greater than the value of max
            if($number > $max) {
                
                $secondMax = $max;
                $max = $number;
            }
            
            //If array number is greater than secondMax and less than max
            if($number > $secondMax && $number < $max) {
                $secondMax = $number;
            }
        }
        
        return $secondMax;
    }
}

