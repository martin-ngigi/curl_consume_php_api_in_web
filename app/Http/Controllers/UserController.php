<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $url = "https://dummyjson.com/users";

    //
    public function indexMethod(){

        //$url = "https://dummy.restapiexample.com/api/v1/employees";
        $user_data = $this->callAPI("GET", $this->url, false);
        return view('index' , compact('user_data') );

    }

    public function addUserPageMethod(){
        return view('add_user');
    }

    public function user_add_method(Request $request){
        $url_2 = $this->url."/add";
        //get data array from add_user.blade.php
        $data_array = array (
            "firstName" => $request->first_name,
            "lastName" => $request->last_name,
            "age"=>$request->age
        );

        //callAPI method
        $make_call = $this -> callAPI("POST", $url_2, json_encode($data_array));

        //var_dump($make_call);

        //return a redirection to the original page with a success message
        return redirect()->back()->with('message', "User ".$request['first_name'] ." was added successfully");


    }


    public function callAPI($method, $url, $data){
        //init curl
        $curl = curl_init();

        switch ($method) {
            case 'GET':
                // Set the curl URL option
                curl_setopt($curl, CURLOPT_URL, $url);

                // This option will return data as a string instead of direct output
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                break;
            case "POST":
                curl_setopt($curl, CURLOPT_POST, true); //true is same as 1
                if($data){
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;

        }

        //OPTIONS
        curl_setopt($curl, CURLOPT_URL, $url);
        //set headers
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            // 'Content-Type: application/json',
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        //Execute
        $result = curl_exec($curl);
        //convert result from json to normal
        $result=json_decode($result);
        // if($result === FALSE)
        if(!$result){
            die('Error: Connection failed to connect');
        }

        //close curl
        curl_close($curl);
        return $result;

    }

    public function getData(){

        // Initiate curl session in a variable (resource)
        $curl_handle = curl_init();

        $url = "https://dummy.restapiexample.com/api/v1/employees";

        // Set the curl URL option
        curl_setopt($curl_handle, CURLOPT_URL, $url);

        // This option will return data as a string instead of direct output
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

        // Execute curl & store data in a variable
        $curl_data = curl_exec($curl_handle);

        curl_close($curl_handle);

        // Decode JSON into PHP array
        $response_data = json_decode($curl_data);

        // All user data exists in 'data' object
        $user_data = $response_data->data;

        // Extract only first 5 user data (or 5 array elements)
        $user_data = array_slice($user_data, 0, 4);

        return view('index' , compact('user_data') ); // use "compact('user_data')" to pass data to index.blade


    }

}
