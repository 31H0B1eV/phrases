<?php namespace Finder\Main;


class Finder {

   public function getData($from, $to)
    {

        $content = '';

        for($i = $from; $i <= $to; $i++)
        {
            if( $i != 102 )
            {
                if( $response = fopen('assets/' . $i . '.htm', 'r') )
                {
                    $content .= stream_get_contents($response);
                    fclose($response);
                }
            }
        }

        return $content;
    }
} 