<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        // redirecting to index page 
        $this->load->view('welcome_message');
    }

    public function view() {
        //  getting the post request save it in a varaible 
        $address = $this->input->post('address');
        //       put the address in the api call and get the infomation from it 
        $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=false');

// Convert the JSON to an array
        $geo = json_decode($geo, true);
//check if status is ok and get lattitude and longitude from array 
        if ($geo['status'] == 'OK') {
            // Get Lat & Long
            $lat = $geo['results'][0]['geometry']['location']['lat'] . "<br>";
            $long = $geo['results'][0]['geometry']['location']['lng'];
        }
        //put lat and long from previous array and put it in the api 2  "secclickfix api"
        $xml = file_get_contents("https://seeclickfix.com/open311/v2/services.json?lat=$lat&long=$long");
       // return the result in an array and decode it 
        $arrayOfEmails = json_decode($xml);
        //save the array in an another array and passed it to the view
        $data['data'] = $arrayOfEmails;
        $this->load->view("view", $data);
    }

}
