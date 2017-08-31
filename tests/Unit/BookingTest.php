<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Booking;
use App\User;

class BookingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBookingAdd()
    {
       
        $status = "";
        $userdata = array(
                'name' => "test".time(),
                'email'     => "test22".time()."@test.com",
                'phone'     => time(),
                'password'  => md5("123"),
                
            );
         
            $user = User::create($userdata);
           
            if($user->id) { 
                    $bookingdata = array(
                        'user_id' => $user->id,
                        'arrival_date'     => date("Y-m-d H:i:s",time()),
                        'departure_date'     => date("Y-m-d H:i:s",time()),
                        'price_from'  => 1000,
                        'price_to'  => 2000,
                        'guest_info' =>'dfdfdf'.time(),
                        'room_info' => 'room_info'.time(),
                        'options' => 'dfd'.time()

                    );
            $book = Booking::create($bookingdata);
           
            if($book->id>0) $status = "inserted";
        
            }
        
        
        
         $this->assertEquals("inserted", $status); 
    }
 /************************************************************************************/   
     public function testRootUrl()
    {
         return [
            ['/', 200],
        ];
    }
    
 /************************************************************************************/   
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
