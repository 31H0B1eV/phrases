<?php

use Finder\Form\InputForm;
use Finder\Main\Finder;
use Illuminate\Support\Facades\Input;

class HomeController extends BaseController {

    private $inputForm;

    /**
     * All episode listings with Production from \ to
     *
     * @var array
     */
    protected $seasons = array(
        [101, 126],
        [127, 148],
        [150, 174],
        [175, 200],
        [201, 226],
        [227, 252],
        [253, 277],
    );

    function __construct(InputForm $inputForm)
    {
        $this->inputForm = $inputForm;
    }

    /**
     * Index page controller
     * @return mixed
     */
    public function index()
    {
        return View::make('index');
	}

    /**
     * Call search action
     * @return searching result
     */
    public function search()
    {
        try
        {
            $this->inputForm->validate(Input::all());
        }
        catch (FormValidationException $e)
        {
            return Redirect::home()->withErrors($e->getErrors());
        }

        $phrase = Input::get('phrase');
        $data = '';
        $result = new Finder;

        foreach($this->seasons as $episode)
        {
            $data .= $result->getData($episode[0], $episode[1]);
        }

        $count = $this->substri_count($data, $phrase);

        return View::make('done', compact('count'));
    }

    /**
     * case insensitive substr_count()
     * @param $haystack
     * @param $needle
     * @return int
     */
    function substri_count($haystack, $needle)
    {
        return substr_count(strtoupper($haystack), strtoupper($needle));
    }
}
