<?php

use Illuminate\Support\Facades\Input;

class HomeController extends BaseController {

    public function index()
    {
        return View::make('index');
	}

    public function search()
    {
        $phrase = Input::get('phrase');

        // TODO find usage

        return $phrase;
    }
}
