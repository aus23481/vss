<div id="status_message"></div>
<div id="header_wrapper">
    <div id="header">
        <div id="logo"><img src="assets/logo.gif" alt="Vancouver Short Stay">
        </div>
        <div style="position: absolute; right: 20px; top: 0px;background-image: url(assets/transparentbg2.png);margin-top:20px;padding:0px 10px;  border-radius: 10px; -moz-border-radius: 10px;">
            <div id="contactinfo">
                <!--644 Victoria Park East &nbsp; North Vancouver, BC<br />
               V7L 3G4 Canada &nbsp; <a href="/directions">Get Directions</a>-->
                <p style="text-align: right;">
                    <br><img src="assets/canada.gif" alt="Canadian Phone Number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.604.710.3527
                    <br>
                    <img src="assets/usa.gif" alt="American Phone Number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.877.380.6120
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="assets/britain.gif" alt="British Phone Number">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.800.032.3371
                    <br>
                    <a href="mailto:reservations@vancouvershortstay.com">reservations@vancouvershortstay.com</a>
                    <br>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div id="nav"><a style="padding: 50px;" href="http://www.vancouvershortstay.com">Home</a><a style="padding: 50px;" href="http://www.vancouvershortstay.com/about">About</a><a style="padding: 50px;" href="http://www.vancouvershortstay.com/furnished-apartments-penthouse-north-vancouver">Furnished Rentals</a><a style="padding: 50px;" href="http://www.vancouvershortstay.com/events">Blog</a><a style="padding: 50px;" href="http://www.vancouvershortstay.com/contact">Contact</a>
    </div>
    <div style="border: 1px solid rgb(31, 39, 126); padding: 5px 10px; height: 540px; position: relative; background-image: url(assets/transparentbg.png); border-bottom-left-radius: 10px; -moz-border-radius-bottomleft: 10px; border-bottom-right-radius: 10px; -moz-border-radius-bottomright: 10px;">
        <div class="clear"></div>
        <center>
            <h1>The Real Deal on Short Stay and Long Term Estate in Vancouver, BC Canada - Apartment Rentals, Guest and B2B Services</h1>
        </center>
        <div class="other"></div>
        <div id="signup_form" style="position: absolute; top: 60px; right: 20px; bottom: 20px; background-color: white; border-radius: 10px; -moz-border-radius: 10px;">
            <!-- Signup Form -->
            <div style="background-color: green;padding:10px;font-size:20px; color:#ffffff;border-top-left-radius: 10px;	-moz-border-radius-topleft: 10px; border-top-right-radius: 10px; -moz-border-radius-topright:10px;">
                <center>Inquiry Form</center>
            </div>
            <form id="reserve_form">
                {!!csrf_field()!!}
                <div class="main-form-container">
                    <div id="name-form-container" class="name-container input-header"> <span id="span_name">Name</span> </div>
                    <div id="date-form-container" class="date-container input-header"> <span id="span_date"> Dates </span> </div>
                    <div id="price-form-container" class="price-container input-header"><span id="span_price"> Price Range </span> </div>
                    <div id="guest-form-container" class="guest-container input-header">  <span id="guest_span">Number of Guests </span>  </div>
                    <div id="suite-form-container" class="suite-container input-header">
                        <div> <span id="span_bedroom"> Size of Suite</span>  </div>
                        <div id="suiteinfo" class="hide">
                                <div class="small-font"><span id="span_room_type"></span></div>
                                <div class="small-font"><span id="span_suite_location"></span></div>
                                <div class="small-font"> <span id="span_parking"></span></div>
                        </div>        
                    </div>
                    <div id="option-form-container" class="option-container input-header">
                        <div>Options and Amenities</div>
                        <div id="optioninfo" class="small-font hide"><span id="option_amenities_count_span">0</span> Selected</div>
                    </div>
                    <img src="assets/loading.gif" class="loading">
                    <div id="request_reserve_btn" class="option-container input-header-button"> Request Reservation </div>
                </div>
                <!-- End of form container -->
                <div class="sub-form-container">
                    <div class="name-form-container">
                        <div> <input placeholder="Full Name" id="name" pattern="[a-zA-Z_ ]{6,25}" name="name" required type="text"></div>
                        <div> <input placeholder="Email" id="email" name="email" required type="text"></div>
                        <div> <input placeholder="Confirm Email" id="cemail" name="cemail" required type="text"></div>
                        <div> <input placeholder="Phone Number" id="phone" name="phone" required type="text"></div>
                        <div>
                            <div class="chk-input"><input name="bookngforother" type="checkbox"> </div>
                            <div class="chk-txt-iambooking">I am booking on behalf of someone</div>
                        </div>
                        <div class="subform-btn">
                            <div class="subform-btn-ok-f"><button id="name_btn_ok" type="button" name="ok" value="OK"> OK </button></div>
                            <div class="subform-btn-cancel-f"><button id="name_btn_cancel" type="button" name="cancel" value="Cancel"> Cancel</button></div>
                        </div>
                    </div>
                    <!-- end of Name Sub Form container -->
                    <div class="date-form-container">
                        <div class="label-row">Arrival Date</div>
                        <div> <input readonly="" class="datetime" placeholder="Arrival Date" id="arrivaldate" name="arrivaldate" type="text"></div>
                        <div class="label-row">Departure Date</div>
                        <div> <input readonly="" class="datetime" placeholder="Departure Date" id="departuredate" name="departuredate" type="text"></div>
                        <div id="date-range" class="label-row txtcenter"><span id="spn-arrival"></span> - <span id="spn-departure"></span> </div>
                        <div class="subform-btn">
                            <div class="subform-btn-ok-f"><button id="date_btn_ok" type="button" name="ok" value="OK"> OK </button></div>
                            <div class="subform-btn-cancel-f"><button id="date_btn_ok" type="button" name="cancel" value="Cancel"> Cancel</button></div>
                        </div>
                    </div>
                    <!-- end of Name Sub Form container -->
                    <div class="price-form-container">
                        <div class="label-row hide">Price Range $1779 - $9990</div>
                        <div> </div>
                        <div>
                            <!--<input type="range" name="pricerange" id="pricerange" value="1779" min="1779" max="9990"> -->
                            <label>
                     <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                     </label>
                            <div id="slider-range"></div>
                            <label>
                     <input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;">
                     </label>
                        </div>
                        <div class="subform-btn">
                            <div class="subform-btn-ok-f"><button id="price_btn_ok" type="button" name="ok" value="OK"> OK </button></div>
                            <div class="subform-btn-cancel-f"><button id="price_btn_ok" type="button" name="cancel" value="Cancel"> Cancel</button></div>
                        </div>
                    </div>
                    <!-- end of price range container -->
                    <div class="guest-form-container">
                        <div class="numbers-row">
                            <label for="name">Adult</label>
                            <input type="text" name="adult" id="adult" value="1">
                        </div>
                        <div class="numbers-row">
                            <label for="name">Children[2-19]</label>
                            <input type="text" name="children" id="children" value="1">
                        </div>
                        <div class="numbers-row">
                            <label for="name">Infants[0-2]</label>
                            <input type="text" name="infants" id="infants" value="1">
                        </div>
                        <div class="subform-btn" >
                            <div class="subform-btn-ok-f"><button id="guest_btn_ok" type="button" name="ok" value="OK"> OK </button></div>
                            <div class="subform-btn-cancel-f"><button id="guest_btn_ok" type="button" name="cancel" value="Cancel"> Cancel</button></div>
                        </div>
                    </div>
                    <!-- end of Name Sub Form container -->
                    <div class="suite-form-container">
                        <div class="numbers-row">
                            <label for="name">Bedroom</label>
                            <input type="text" name="bedroom" id="bedroom" value="1">
                        </div>
                        <div class="numbers-row">
                            <label for="name">Bathroom</label>
                            <input type="text" name="bathroom" id="bathroom" value="1">
                        </div>
                        <div class="vss-row">
                            <input type="checkbox" id="suite_family" name="suite[]" value="Family"> <label for="suite"> Family Suite  </label>
                            <br />
                            <input type="checkbox" id="suite_business" name="suite[]" value="Business"><label for="suite"> Business Ready  </label>
                        </div>
                        <div class="vss-row">
                            <br />
                            <input placeholder="Preferred Location" type="text" name="prefer_location" id="prefer_location">
                        </div>
                        <div class="vss-row">
                            <span> Yes </span><span> No </span> <br/>
                            <input type="radio" name="parking" value="Yes"> <input type="radio" name="parking" value="No"> <label for="suite"> Parking  </label>
                            <br />
                            <input type="radio" name="petfriendly" value="Yes"><input type="radio" name="petfriendly" value="No"><label for="suite"> Pet Friendly  </label>
                        </div>
                        <div class="subform-btn" style="margin-top: -10px;">
                            <div class="subform-btn-ok-f"><button id="suite_btn_ok" type="button" name="ok" value="OK"> OK </button></div>
                            <div class="subform-btn-cancel-f"><button id="suite_btn_ok" type="button" name="cancel" value="Cancel"> Cancel</button></div>
                        </div>
                    </div>
                    <!-- end of Name Sub Form container -->
                    <div class="option-form-container">
                        <div class="label-row">Options</div>
                        <div class="row"> <input name="options[]" id="1" type="checkbox">Concierge Service </div>
                        <div class="row">
                            <div class="left"> <input id="2" name="options[]" type="checkbox">Pool </div>
                            <div class="right"><input name="options[]" id="10" type="checkbox">Hot Tub</div>
                        </div>
                        <div class="row">
                            <div class="left"> <input id="3" name="options[]" type="checkbox">Wifi </div>
                            <div class="right"><input name="options[]" id="11" type="checkbox">Cable TV</div>
                        </div>
                        <div class="row">
                            <div class="left"> <input id="4" name="options[]" type="checkbox">Netflix </div>
                            <div class="right"><input name="options[]" id="12" type="checkbox">Gym</div>
                        </div>
                        <div class="row">
                            <div class="left"> <input id="5" name="options[]" type="checkbox">Sauna </div>
                            <div class="right"> <input name="options[]" id="13" type="checkbox">Steam Room</div>
                        </div>
                        <div class="row">
                            <div class="left"> <input id="6" name="options[]" type="checkbox">Balcony </div>
                            <div class="right"><input name="options[]" id="14" type="checkbox">Bike Room</div>
                        </div>
                        <div class="row">
                            <div class="left"> <input id="7" name="options[]" type="checkbox">A/C </div>
                            <div class="right"> <input name="options[]" id="15" type="checkbox">Hide-a-bed</div>
                        </div>
                        <div class="row">
                            <div class="left"> <input id="8" name="options[]" type="checkbox">No Stairs </div>
                            <div class="right "><span class="hide"><input id="16" name="options[]" type="checkbox">Others</span></div>
                        </div>
                        <div class="row"> <input name="options[]" id="9" type="checkbox">Wheelchair <span style="padding-left: 65%;">Accessible</span></div>
                        <div> <input id="special_request" name="special_request" style="color:black;" placeholder="Any Special Requests?" type="text"></div>
                        <div class="subform-btn">
                            <div class="subform-btn-ok-f"><button id="option_btn_ok" type="button" name="ok" value="OK"> OK </button></div>
                            <div class="subform-btn-cancel-f"><button id="option_btn_ok" type="button" name="cancel" value="Cancel"> Cancel</button></div>
                        </div>
                    </div>
                    <!-- end of Name Sub Form container -->
                </div>
                <!-- End of sub form container -->
        </div>
    </div>
    </form>
    <div class="clear"></div>
    <div style="background-image: url(assets/transparentbg2.png);margin:40px 0px;padding:20px; 0px;  border-radius: 10px; -moz-border-radius: 10px;">
        <h2>About Vancouver Short Stay - Who We Are, Ethics and Values and Staff Info</h2>
        <p>At <strong>Vancouver Short Stay</strong> our <strong>furnished rentals</strong> are second to none for location, price and comfort. We reach for and actively pursue the best in quality, cleanliness, amenities, and services.</p>
        <p>We do not just have amazing core values, but our leadership team is just as strong. We pride ourselves here at <strong>Vancouver Short Stay</strong> in providing our Guests with the best service possible.
            <ul>&diams; <strong>Daniel Pennell</strong>, CEO - Co-founder of Vancouver Short Stay in 2002
                <br>&diams; <strong>Robin Younge</strong>, Reservations - New to Vancouver Short Stay furnished apartments in 2013
            </ul>
            </li>
        </p>
        <h2>Apartments for Rent in Vancouver, BC, Canada - 1, 2 and 3 Bedroom and Penthouse Suites </h2>
        <p>Our <strong>1 bedroom, 2 bedroom and 3 bedroom suites</strong> are 1,000 sq. ft. and have all of the <strong>amenities</strong> you would expect of a <strong>luxury hotel</strong>. Our suites are fully furnished and include furniture for the living room, dining room and bedroom. All of our suites come with a full kitchen as we want you to feel so comfortable that it feels like you haven't left home. Our <strong>penthouse suites</strong> have the same offerings, and are a bit larger and more private.</p>
        <p>Our suites are located in various buildings on <strong>Victoria Park in North Vancouver</strong>. Even if you are specifically looking for a place in Vancouver, we are only a few minutes away. Our location is amazing; there are many <strong>shops and restaurants</strong> to explore just one block from our suites. We are also close to the Seabus station in Lonsdale and are a quick trip to the heart of <strong>downtown Vancouver</strong>. Our location is perfect for <strong>individuals</strong>, <strong>families</strong> and <strong>corporations</strong>. You can stay for a short time, on a <strong>temporary basis,</strong> or <strong>extend your stay</strong> for as long as you need. We are the perfect solution and offer <strong>monthly rentals to all of our guests.</strong>
        </p>
        <p>
            <div style="float:left;">
                <li>
                    <strong>Amenities</strong>
                    <ul>&diams; High Speed Wireless Internet
                        <br>&diams; Stove, Fridge, & Iron
                        <br>&diams; Microwave & Toaster
                        <br>&diams; Coffee maker, Pots & Kettle
                        <br>&diams; China, Cutlery
                    </ul>
                </li>
            </div>
            <div style="float:left;">
                <strong>Guest Services</strong>
                <li>
                    <ul>&diams; Housekeeping
                        <br>&diams; Shuttle Transportation
                    </ul>
                    <ul></ul>
                </li>
            </div>
            <div style="float:left;">
                <strong>B2B Services</strong>
                <li>
                    <ul>&diams; Multi Family Property Sales</ul>
                    <ul></ul>
                </li>
            </div>
        </p>
        <div class="clear">&nbsp;</div>
        <h2>Fun Things to Do in Vancouver - Events, Attractions and Vancouver Short Stay Updates</h2>
        <p>We frequently write about <a href="http://www.vancouvershortstay.com/events" title="Vancouver events">Vancouver events</a>, happenings and fun things to do in the city and surrounding areas. If you want to know what we are up to, check out <a href="#">our news</a> for our latest updates.</p>
        <h2>Planning a Short Term or Long Trip to Vancouver for Vacation ,Travel, Business, Family Visit, Lions Gate Hospital Treatment, Relocating or Immigrating</h2>
        <p>Whether you are <strong>planning a short term or long trip  to Vancouver, BC</strong> for any reason, we will make sure you have everything you, your family or co-workers need. We house guests from all over the word; from Iran to UK to China and everywhere else. We have even housed people already from Vancouver who are between houses or need somewhere to stay due to an <strong><a href="#">insurance claim</a></strong> due to fire, flood, storms and beyond. No matter what your reason is, or where you are from we have the perfect accommodation for you right here in Vancouver.</p>
        <h2>Pet Friendly Accommodation Vancouver - Boutique Hotel, Motel, Inn, B&B, Hostel, Relatives or Friends</h2>
        <p>Pets are ok! We offer <strong>pet friendly accommodation in Vancouver</strong> so you are welcome to <strong>bring your dog or cat with you</strong> on your travels. We are a great alternative to hotels, motels, inns, bed and breakfasts and even staying with friends or family and encourage you to view our <strong>beautiful furnished rentals</strong>. All of our guests enjoy a one of a kind experience when they stay with us because they get the best of both worlds. When you rent an apartment with us, you have your own <strong>private housing</strong> that feels just like home. We will do your laundry, provide fresh linens daily and have a growing list of <strong><a href="">guest services</a></strong>, all provided for your own comfort. Your stay can be <strong>monthly</strong>, <strong>temporary</strong>, <strong>short term</strong> or even <strong>long term</strong>; we are very flexible.</p>
        <h3>Contact Us for More Information About Our Furnished Apartment Rentals in Vancouver</h3>
        <p><strong>We are your top choice for real places to stay in Vancouver, BC Canada and are a leading provider of furnished rentals</strong>. Check out what some of our <a href="http://www.vancouvershortstay.com/testimonials">recent guests have to say</a> about their time with us. <a href="http://www.vancouvershortstay.com/furnished-apartments-penthouse-north-vancouver">Browse our rooms for rent</a>, <a href="http://www.vancouvershortstay.com/reservations">make your reservation</a> and enjoy your stay in one of our spacious, quiet and relaxing suites. We are <strong>pet friendly</strong> too! If you are a home owner, or are interested in <strong>multi-family sales</strong>, please contact us for more information. If you have any questions please <a href="mailto:info@vancouvershortstay.ca">email us</a> or call us at 1-877-380-6120. We are happy to help.</p>
        <div class="clear">&nbsp;</div>
    </div>
    <div id="footer_wrapper_thankyou">
        We value your <a href="#">privacy</a>. We will never share your email address with third parties.
        <br> There is never a cost or obligation for making your reservation with Vancouver Short Stay.
        <div class="cc_icons">
            <div class="cc_wrapper"> <span class="cc_amex cc_logo"></span> <span class="cc_mc cc_logo"></span> <span class="cc_visa cc_logo"></span> <span class="cc_interac cc_logo"></span> </div>
        </div>
        <div class="clear">&nbsp;</div>
    </div>
</div>