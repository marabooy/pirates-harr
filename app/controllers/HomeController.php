<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function postAnalyze()
    {
        $input = Input::get("choice");
        $datasets = Input::get("dataset");
        $myarray = array_unique($input);

        $myarray =array_filter($myarray);


        // Fetching data for each entry:
        if (empty($datasets)) {
            $popData = new PopModel();
            $mypopData2 = $popData->whereIn("id", $myarray)->get();
            //Sending data to page:

            $resultsArray = array();
            $resultsArray["poverty"] = $mypopData2;

            return \View::make("pages.results")->with("countyData", $resultsArray);
        } else {
            $resultsArray = array();
            $resultsArray2 = array();
            foreach ($datasets as $datachoice) {
                if ($datachoice == "poverty") {
                    $popData = new PopModel();
                    $mypopData2 = $popData->whereIn("id", $myarray)->get();
                    $resultsArray["poverty"] = $mypopData2;

                } else if ($datachoice == "morbidity") {
                    $morbData = new MorbModel();
                    $morbData2 = $morbData->whereIn("id", $myarray)->get();
                    $resultsArray["morbidity"] = $morbData2;

                } else if ($datachoice == "education") {
                    $eduData = new EduModel();
                    $eduData2 = $eduData->whereIn("id", $myarray)->get();
                    $resultsArray["education"] = $eduData2;

                }
            }
            //    dd($resultsArray);

            //Pass all:
            $popData = new PopModel();
            $mypopData2 = $popData->whereIn("id", $myarray)->get();
            $resultsArray2["poverty"] = $mypopData2;
            $morbData = new MorbModel();
            $morbData2 = $morbData->whereIn("id", $myarray)->get();
            $resultsArray2["morbidity"] = $morbData2;
            $eduData = new EduModel();
            $eduData2 = $eduData->whereIn("id", $myarray)->get();
            $resultsArray2["education"] = $eduData2;


            return \View::make("pages.results")->with("countyData", $resultsArray)->with("allCounties", $resultsArray2);
        }


    }

    public function getAnalyze()
    {
        $popData = new PopModel();
        $mypopData2 = $popData::all();
        return \View::make("pages.analyzer")->with("countyData", $mypopData2);
    }

    public function getRandomData()
    {

        $mypopData2 = PopModel::all();

        $mypopData = $mypopData2->toArray();

        //Picking 3 sets of 4 Random Keys:
        $set1 = array_rand($mypopData, 4);


        //Using Keys to get three distinct arrays of data:
        $array1 = array($mypopData[$set1[0]], $mypopData[$set1[1]], $mypopData[$set1[2]], $mypopData[$set1[3]]);


        return \View::make("pages.homemain")
            ->with("dataArray1", $array1);

    }

    public function showMap()
    {
        return View::make('pages.leaflets');
    }

}