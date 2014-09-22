<?php namespace Finder\Main;


class Finder {

    /**
     * All episode listings with Production from \ to
     *
     * @var array
     */
    protected $seasons = array(
        'All' => [101, 277],
    );

    public function getData()
    {

        $content = '';

        for($i = $this->seasons['All'][0]; $i <= $this->seasons['All'][1]; $i++)
        {
            if( $i != 102 )
            {
                if( $response = fopen('http://www.chakoteya.net/NextGen/' . $i . '.htm', 'r') )
                {
                    while( !feof($response) )
                    {
                        $content .= fread($response, 8192);
                    }
                    fclose($response);
                }
            }
        }

        return $content;
    }

} 