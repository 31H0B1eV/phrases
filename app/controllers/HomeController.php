<?php

use Finder\Main\Finder;
use Illuminate\Support\Facades\Input;

class HomeController extends BaseController {

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
//        $phrase = Input::get('phrase');
        $result = new Finder;

        return $result->getData();
    }
}
