<?php

/**
 * Booking Controller takes input from web for booking Inquiry
 * @Location : /app/http/controllers/
 * @route : /booking/add, ...
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\User;
use App\Booking;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller {

    //
    public function __construct() {
        
    }

    public function index() {

        //print "Hello World";
    }

    /**
     * add user booking inquiry info into booking and user table
     * @param  form input
     * @return insertion status
     */
    public function addBookingInfo() {

        //print_r($_REQUEST);
        $input = array();
        //find if user already exists
        $user = User::where('email', '=', $_REQUEST["email"])->get();
        $userexists = $user->count();
        if ($userexists)
            $user->id = User::where('email', $_REQUEST["email"])->value('id');
       
        //if user exists no need to save just extract user id 
        if (!$userexists) {
            $userdata = array(
                'name' => $_REQUEST["name"],
                'email' => $_REQUEST["email"],
                'phone' => $_REQUEST["phone"],
                'password' => md5("123"),
            );

            $user = User::create($userdata);
        }


        if ($user->id) {

            //amount extract to save into db
            $a = $_REQUEST["amount"];
            $pfa = explode("-", $a)[0];
            $pfb = explode("-", $a)[1];
            $pfa = (int) str_replace("$", "", $pfa);
            $pfb = (int) str_replace("$", "", $pfb);

            // Saving booking data
            $bookingdata = array(
                'user_id' => $user->id,
                'arrival_date' => date("Y-m-d H:i:s", strtotime($_REQUEST["arrivaldate"])),
                'departure_date' => date("Y-m-d H:i:s", strtotime($_REQUEST["departuredate"])),
                'price_from' => $pfa,
                'price_to' => $pfb,
                'guest_info' => $_REQUEST["adult"],
                'room_info' => $_REQUEST["bedroom"],
                'options' => $_REQUEST["soptions"]
            );

            $book = Booking::create($bookingdata);
            //Convert options string
            $options = $this->convertOption($_REQUEST["soptions"]);
            $otherroominfo = "";
            if($_REQUEST["parking"]=="Yes") $otherroominfo .= "Parking";
            if($_REQUEST["petfriendly"]=="Yes") $otherroominfo .= "Pet";
            if($_REQUEST["parking"]=="Yes"&&$_REQUEST["petfriendly"]=="Yes") $otherroominfo = "Parking, Pets";
            $prefer_location = $_REQUEST["prefer_location"];
            if(empty($prefer_location)) $prefer_location = "Anywhere";
            
           $suiteinfo = "";
           if(isset($_REQUEST["suite"][0]))
            $suiteinfo = $_REQUEST["suite"][0];
           if(isset($_REQUEST["suite"][1]))
            $suiteinfo = $_REQUEST["suite"][1];
           if(isset($_REQUEST["suite"][0])&&isset($_REQUEST["suite"][0]))
            $suiteinfo = $_REQUEST["suite"][0].", ".$_REQUEST["suite"][1];
           $special_request = $_REQUEST["special_request"];            
            
            $input = $_REQUEST;
            //Mail to VSS info
            Mail::send('feedbackmail', ["name" => $_REQUEST["name"], "email" => $_REQUEST["email"], "phone" => $_REQUEST["phone"], "arrivaldate" => $_REQUEST["arrivaldate"], "departuredate" => $_REQUEST["departuredate"], "amount" => $_REQUEST["amount"], "guestinfo" => "Adult:" . $_REQUEST["adult"] . ", Children:" . $_REQUEST["children"] . ", infants:" . $_REQUEST["infants"], "roominfo" =>$_REQUEST["bedroom"]. " Bedroom" . ", ". $_REQUEST["bathroom"]." Bathroom" , "options" => $options,"otherroominfo"=>$otherroominfo,"prefer_location"=>$prefer_location,"suiteinfo"=>$suiteinfo,"special_request"=>$special_request], function($message) use($input) {
                $message->to('reservations@vancouvershortstay.com', "reservations@vancouvershortstay.com")->from($_REQUEST["email"])->subject("VSS Booking New Query");
            });

            print $book->id;
        }
        //*/    
    }

    /**
     * Convert to Options string
     * @param  options
     * @return Options string
     */
    /*     * ********************************************************************* */
    public function convertOption($options) {

        $options = explode(",", $options);
        $opt = array();
        foreach ($options as $option) {
            if ($option == 1)
                array_push($opt, "Concierge Service");
            elseif ($option == 2)
                array_push($opt, "Pool");
            elseif ($option == 3)
                array_push($opt, "WiFi");
            elseif ($option == 4)
                array_push($opt, "Netflix");
            elseif ($option == 5)
                array_push($opt, "Sauna");
            elseif ($option == 6)
                array_push($opt, "Balcony");
            elseif ($option == 7)
                array_push($opt, "A/C");
            elseif ($option == 8)
                array_push($opt, "No Stairs");
            elseif ($option == 9)
                array_push($opt, "Wheel Chair Accessible");
            elseif ($option == 10)
                array_push($opt, "Hot Tub");
            elseif ($option == 11)
                array_push($opt, "Cable TV");
            elseif ($option == 12)
                array_push($opt, "GYM");
            elseif ($option == 13)
                array_push($opt, "Steam Room");
            elseif ($option == 14)
                array_push($opt, "Bike Room");
            elseif ($option == 15)
                array_push($opt, "Hide-a-bed");
            else
                array_push($opt, "Others");
        }
        return implode(" | ", $opt);
    }

    /** ********************************************************************* */
    
    public function test(){
        print "Hello Test";
    }
}

//end of class
