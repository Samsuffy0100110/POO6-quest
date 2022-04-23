<?php 

class Speedometer
{
    
    public const KILOMETERS = 1.60;
    public const MILES = 0.621;

    public static function convertKmToMiles(int $kms): int
    {
        
        return floatval($kms * self::MILES);
        
    }

    public static function convertMilesToKms(int $miles): int
    {

        return $miles * self::KILOMETERS;

    }

  
  
}