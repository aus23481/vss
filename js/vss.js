/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//service option array
var boptions = [];
localStorage.name = 0;
localStorage.price = 0;
localStorage.date = 0;
localStorage.guest = 0;
localStorage.suite = 0;
localStorage.option = 0;

$.backstretch(["assets/bg3.jpg"]);
$(".other").backstretch(["assets/images1.jpg", "assets/images2.jpg", "assets/images3.jpg", "assets/images4.jpg", "assets/images5.jpg", "assets/images6.jpg"], {
    fade: 750,
    duration: 5000
});

$("#arrivaldate.datetime").datepicker({
    // showOtherMonths: true,
    // selectOtherMonths: true,
    //changeMonth: true,
    // changeYear: true,
    //showButtonPanel: true,
    dateFormat: 'MM dd, yy',
    minDate: 0
});

$("#departuredate").datepicker({
    minDate: '+1m',
    dateFormat: 'MM dd, yy',
    beforeShow: function() {
        //get date startDate is set to
        var startDate = $("#arrivaldate.datetime").datepicker('getDate');
        //if a date was selected else do nothing
        if (startDate != null) {
            startDate.setMonth(startDate.getMonth() + 1);
            $(this).datepicker('option', 'minDate', startDate);
        }
    },
    onSelect: function() {
        //alert("hi");
        $("#spn-arrival").text($('#arrivaldate').val());
        $("#spn-departure").text($('#departuredate').val());
    }
});

$(".subform-btn-ok button").on("click", function(event) {
    $(".sub-form-container").fadeOut("slow"); //hide();
    $(".main-form-container").fadeIn("slow");//show();
   // alert(event.target.id.split("_")[0]);
    if(event.target.id.split("_")[0] == "name") localStorage.name = 1;
    if(event.target.id.split("_")[0] == "date") localStorage.date = 1;
    if(event.target.id.split("_")[0] == "price") localStorage.price = 1;
    if(event.target.id.split("_")[0] == "guest") localStorage.guest = 1;
    if(event.target.id.split("_")[0] == "suite") localStorage.suite = 1;
    if(event.target.id.split("_")[0] == "option") localStorage.option = 1;
   
    
    fillMasterForm();
});

$(".subform-btn-cancel button").on("click", function(event) {
    $(".sub-form-container").fadeOut("slow"); //hide(50);
    $(".main-form-container").fadeIn("slow"); //show(50);
    if(event.target.id.split("_")[0] == "name") localStorage.name = 0;
    if(event.target.id.split("_")[0] == "date") localStorage.date = 0;
    if(event.target.id.split("_")[0] == "price") localStorage.price = 0;
    if(event.target.id.split("_")[0] == "guest") localStorage.guest = 0;
    if(event.target.id.split("_")[0] == "suite") localStorage.suite = 0;
    if(event.target.id.split("_")[0] == "option") localStorage.option = 0;
   
    resetMasterForm();
});

$(".subform-btn-ok-f button").on("click", function(event) {
    $(".sub-form-container").fadeOut("slow"); //hide();
    $(".main-form-container").fadeIn("slow");//show();
   
    if(event.target.id.split("_")[0] == "name") localStorage.name = 1;
    if(event.target.id.split("_")[0] == "date") localStorage.date = 1;
    if(event.target.id.split("_")[0] == "price") localStorage.price = 1;
    if(event.target.id.split("_")[0] == "guest") localStorage.guest = 1;
    if(event.target.id.split("_")[0] == "suite") localStorage.suite = 1;
    if(event.target.id.split("_")[0] == "option") localStorage.option = 1;
    fillMasterForm();
});

$(".subform-btn-cancel-f button").on("click", function(event) {
    $(".sub-form-container").fadeOut("slow"); //hide(50);
    $(".main-form-container").fadeIn("slow"); //show(50);
    if(event.target.id.split("_")[0] == "name") localStorage.name = 0;
    if(event.target.id.split("_")[0] == "date") localStorage.date = 0;
    if(event.target.id.split("_")[0] == "price") localStorage.price = 0;
    if(event.target.id.split("_")[0] == "guest") localStorage.guest = 0;
    if(event.target.id.split("_")[0] == "suite") localStorage.suite = 0;
    if(event.target.id.split("_")[0] == "option") localStorage.option = 0;
    resetMasterForm();
});

$(".name-container, .date-container, .price-container, .guest-container, .suite-container, .option-container").on("click", function() {
    //alert($(this).attr("id"));
    $(".sub-form-container").fadeIn("slow"); //show(50);
    $(".main-form-container").fadeOut("slow");//hide(50);
    //hide all subforms
    $(".name-form-container, .date-form-container, .price-form-container, .guest-form-container, .suite-form-container, .option-form-container").hide();
    //show form container of clicked field
    $("." + $(this).attr("id")).fadeIn("slow"); //show(50);
    $("."+ $(this).attr("id")).find("button[name='ok']").addClass("btnhover");


});

//remove btnhover while on cancel
$("button[name='cancel']").on("mouseover mousemove",function(){

    $("button[name='ok']").removeClass("btnhover");


});

//Fill Master form  
function fillMasterForm(){
    
    
    if($("#name").val()!=""&&localStorage.name == 1) $("#span_name").text($("#name").val());
    else $("#span_name").text("Name");
    if($("#spn-arrival").text()!=""&&$("#spn-departure").text()!=""&&localStorage.date == 1)
    $("#span_date").text($("#spn-arrival").text()+" - "+$("#spn-departure").text());
    else  $("#span_date").text("Date");
    
    if(localStorage.price == 1)
    $("#span_price").text($("#amount").val().split("per")[0]);  
    else  $("#span_price").text("Price Range"); 
    
    if(localStorage.guest == 1){
        var tguest = parseInt($('#adult').val()) + parseInt($('#children').val());
        if(tguest == 1)  $("#guest_span").text(tguest+" Guest"); // 
        else if(tguest > 1) $("#guest_span").text(tguest+" Guests"); //
    } else $("#guest_span").text("Number of Guests"); //
    
    /*if($('#input[value="Family"]').prop("checked")==true)
    $("#span_room_type").text($('#input[value="Family"]').val());
    if($('#input[value="Business"]').prop("checked")==true)
    $("#span_room_type").text($('#input[value="Business"]').val());
    if($('#input[value="Family"]').prop("checked")==true&&$('#input[value="Business"]').prop("checked")==true)
    */
   
    
    if(localStorage.suite == 1){
        $("#span_bedroom").text($("#bedroom").val()+" Bedroom Guest Suite");
        $("#span_room_type").text(getRoomTypeValues());
        if($('input[name=parking]').prop("checked")==true)
        $("#span_parking").text("Parking" );
        if($('input[name=petfriendly]').prop("checked")==true)
        $("#span_parking").text("Pets" );
        if($('input[name=petfriendly]').prop("checked")==true&&$('input[name=parking]').prop("checked")==true)
        $("#span_parking").text("Parking, Pets" );
        $("#suiteinfo").show();
    }
    
    if(localStorage.option == 1)
    $("#optioninfo").show();
    
}

//Empty master form

function resetMasterForm(){
    
    $("#span_name").text("Name");
    //$("#name").val("");
    $("#span_date").html("Date");
    $("#span_price").text("Price Range");
    $("#guest_span").text("Number of Guests");
    $("#span_bedroom").text("Size of Suite");
    $("#suiteinfo").hide();
    $("#optioninfo").hide();
}


//price range step

$(function() {
    $("#slider-range").slider({
        range: true,
        min: 1770,
        max: 9990,
        step: 30,
        values: [2000, 6030],
        slide: function(event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1] + " per 30 nights");
            
            $("#amount1").val("$" + parseInt(ui.values[0] / 30) + " - $" + parseInt(ui.values[1] / 30) + " per night");
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1) + " per 30 nights");

    $("#amount1").val("$" + parseInt((($("#slider-range").slider("values", 0)) / 30)) +
        " - $" + parseInt(($("#slider-range").slider("values", 1)) / 30) + " per night");
     
});


//guest

$(function() {

    $(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');

    $(".button").on("click", function() {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }

        $button.parent().find("input").val(newVal);

    });

});

//options and amenities count and others update on runtime

$(".option-form-container input").on("click", function() {
    // alert($(this).attr("id"));
    var id = $(this).attr("id");
    //alert(id);
    if ($("#" + id).prop("checked")) boptions.push(id);
    else {
        if (boptions.indexOf(id) >= 0) boptions.splice(boptions.indexOf(id), 1);
    }
    $("#option_amenities_count_span").text($('input[name="options[]"]:checked').length);
    // console.log(boptions);
    // 
    $("#optioninfo").show();
    //alert(boptions.toString());
});

function getRoomTypeValues(){
       var checked = []
       $("input[name='suite[]']:checked").each(function (){
           checked.push($(this).val());
       });
   return checked.toString().replace(",",", ");
}

$("div").delegate(".guest-form-container .inc", "click", function() {
    var tguest = parseInt($('#adult').val()) + parseInt($('#children').val());
    if(tguest == 1)  $("#guest_span").text(tguest+" Guest");
    else if(tguest > 1) $("#guest_span").text(tguest+" Guests");
   
});

$("div").delegate(".guest-form-container .dec", "click", function() {
    var tguest = parseInt($('#adult').val()) + parseInt($('#children').val());
    if(tguest == 1)  $("#guest_span").text(tguest+" Guest");
    else if(tguest > 1) $("#guest_span").text(tguest+" Guests");
});

$("div").delegate(".suite-form-container .inc", "click", function() {
    
    $("#span_bedroom").text($('#bedroom').val()+" Bedroom Guest Suite");
    
    if($('#input[value="Family"]').prop("checked")==true)
    $("#span_room_type").text($('#input[value="Family"]').val());
    if($('#input[value="Business"]').prop("checked")==true)
    $("#span_room_type").text($('#input[value="Business"]').val());
    if($('#input[value="Family"]').prop("checked")==true&&$('#input[value="Business"]').prop("checked")==true)
    $("#span_room_type").text("Family, Business");
    
    if($('input[name=parking]').prop("checked")=="Yes")
    $("#span_parking").text("Parking" );
    if($('input[name=petfriendly]').prop("checked")=="Yes")
    $("#span_parking").text("Pet" );
    if($('input[name=petfriendly]').prop("checked")=="Yes"&&$('input[name=parking]').prop("checked")=="Yes")
    $("#span_parking").text("Parking, Pet" );
    $("#suiteinfo").show();

});

$("div").delegate(".suite-form-container .dec", "click", function() {
    $("#span_bedroom").text($('#bedroom').val()+" Bedroom Guest Suite");
    $("#suiteinfo").show();

});

$("#option_amenities_count_span").text($('input[name="options[]"]:checked').length);
//$("#guest_span").text($('#adult').val());

//suite type

$("div").delegate(".suite-form-container .inc, .suite-form-container input", "click change", function() {
    if($('#input[value="Family"]').prop("checked")==true)
    $("#span_room_type").text($('#input[value="Family"]').val());
    if($('#input[value="Business"]').prop("checked")==true)
    $("#span_room_type").text($('#input[value="Business"]').val());
    if($('#input[value="Family"]').prop("checked")==true&&$('#input[value="Business"]').prop("checked")==true)
    $("#span_room_type").text("Family, Business");
    
    
    if($('#prefer_location').val()!="")
    $("#span_suite_location").text($('#prefer_location').val());
    else  $("#span_suite_location").text("Anywhere");
    
    if($('input[name=parking]').prop("checked")==true)
    $("#span_parking").text("Parking" );
    if($('input[name=petfriendly]').prop("checked")==true)
    $("#span_parking").text("Pets" );
    if($('input[name=petfriendly]').prop("checked")==true&&$('input[name=parking]').prop("checked")==true)
    $("#span_parking").text("Parking, Pets" );

    $("#suiteinfo").show();

});


//on form submit
$("#request_reserve_btn").on("click", function(e) {

    var validated = true;
    
    var data = $("#reserve_form").serialize();
    //validation
    if ($("#name").val().length < 3) {
        alert("Invalid Name");
        validated = false;
        //return;
    }
    if (isValidEmailAddress($("#email").val()) == false) {
        alert("Invalid Email");
         validated = false;
    }
    if ($("#email").val() !== $("#cemail").val()) {
        alert("Email and Confirm Email not matched");
        validated = false;
    }
    if ($("#phone").val().length < 10) {
        alert("Invalid phone");
        validated = false;
    }
    if ($("#adult").val() <= 0) {
        alert("Invalid Guest Value");
        validated = false;
    }
    if ($("#bedroom").val() <= 0) {
        alert("Invalid bedroom Value");
        validated = false;
    }
    if ($("#bathroom").val() <= 0) {
        alert("Invalid bathroom Value");
         validated = false;
    }

    //Ajax call
  if(validated){
      $(".loading").show();
         $.ajax({
            type: "GET",
            url: _baseurl + "/booking/add",
            data: data + "&amount=" + $("#amount").val() + "&soptions=" + boptions.toString(), // {'music_id': id, '_token': _token, 'title': title, 'price': price, 'user_id': user_id},
            success: function(data) {
                //alert(data);
                $("#status_message").text("Inquiry Request has been sent").show().delay(5000).fadeOut();
                if (parseInt(data) >= 1) {
                   
                    resetMasterForm();
                    setTimeout(function(){
                            $(".main-form-container").show();
                            $(".sub-form-container").hide();
                            $(".loading").hide();
                     },100);  
                    
                    
                }
            }
        });
        //end of ajax call
  } //validated if 
  else
  {
     
     
      
      
      setTimeout(function(){
             $(".main-form-container").show();
             $(".sub-form-container").hide();
      },100);  
      
  }

 

});

//email validate     
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    return pattern.test(emailAddress);
};

//Check Name alpha character only
$("#name").on("keyup change blur",function(){
    var alphaExp = /^[a-zA-Z ]+$/;
    if($("#name").val().match(alphaExp))
    {
         $("#name").removeClass("border-color-warning");
    }
    else{
        $("#name").addClass("border-color-warning");
    }
    
});

//check email

$("#email").on("keyup change blur",function(){
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
    if(pattern.test($("#email").val()))
    {
         $("#email").removeClass("border-color-warning");
    }
    else{
        $("#email").addClass("border-color-warning");
    }
    
});

//confirm email

$("#cemail").on("keyup change blur",function(){
    
    if($("#email").val() == $("#cemail").val() )
    {
         $("#cemail").removeClass("border-color-warning");
    }
    else{
        $("#cemail").addClass("border-color-warning");
    }
    
})

//phone number only

$("#phone").on("keyup change blur",function(){
    var alphaExp = /^[0-9+ -]+$/;
    if($("#phone").val().match(alphaExp))
    {
         $("#phone").removeClass("border-color-warning");
    }
    else{
        $("#phone").addClass("border-color-warning");
    }
    
});