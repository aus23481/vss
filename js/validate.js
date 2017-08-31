
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function trim(str) {
	if(str.substr(0,1) == " ") {str=str.substr(1);}
	if(str.substr(str.length-1,1) == " ") {str=str.substr(0,str.length-1);}
	return str
}

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Please Enter a Valid Email Address")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Please Enter a Valid Email Address")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Please Enter a Valid Email Address")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Please Enter a Valid Email Address")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Please Enter a Valid Email Address")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Please Enter a Valid Email Address")
		    return false
		 }

		 if (str.indexOf(" ")!=-1){
		    alert("Please Enter a Valid Email Address")
		    return false
		 }

 		 return true					
	}


function ValidateForm(){
	var emailID = document.getElementById('email');
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter a Valid Email Address")
		emailID.focus();
		return false;
	}
	if (echeck(emailID.value)==false){
		emailID.focus();
		return false;
	}
	return true
 }
 
function ValidateForm2(){
	var emailID=document.frmEmail2.email
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter a Valid Email Address")
		emailID.focus();
		return false;
	}
	if (echeck(emailID.value)==false){
		emailID.focus();
		return false;
	}
	return true;
 }
 
function ValidateEmailSignupForm(){
	var emailID = document.getElementById('email');
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter a Valid Email Address");
		emailID.focus();
		return false;
	}
	if (echeck(emailID.value)==false){
		emailID.focus();
		return false;
	}
	return true;
 }
 
 
function ValidateFullSignupForm(){
	var emailID = document.getElementById('email');
	var zipID = document.getElementById('zip');
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter a Valid Email Address")
		emailID.focus();
		return false;
	}
	if (echeck(emailID.value)==false){
		emailID.focus();
		return false;
	}

	if ((zipID.value==null)||(zipID.value=="")){
		alert("Please Enter Your Zip Code");
		zipID.focus();
		return false;
	}
	
function ValidateSuppressEmailSignupForm(){
	var emailID=document.frmMain.email
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter a Valid Email Address")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.focus()
		return false
	}
	return true
 }
	
	/*
	if (document.frmMain.country.value == "USA"){
		if (zipID.value.length != 5 ) {
			alert("Please Enter 5 Digit Zip Codes for the USA")
			zipID.focus()
			return false
		}
		var digits="0123456789"
		for(i=0; i<5; i++) {
	    	if (digits.indexOf(zipID.value.charAt(i))<0) {
				alert("Zip must be numbers")
    			zipID.focus()
    			return false
			}
		}
	}
	
	if (document.frmMain.country.value == "ALL"){
		if (zipID.value.length < 5 || zipID.value.length > 6) {
			alert("Please Enter 5 or 6 Digit Zip Code")
			zipID.focus()
			return false
		}
	}
	*/
	return true;
  }
 
 
function ValidateFormAdvertise(){
	var emailID=document.frmEmail2.Email
	
	if ((document.frmEmail2.ContactName.value==null)||(document.frmEmail2.ContactName.value=="")){
		alert("Please Enter a Contact Name")
		document.frmEmail2.ContactName.focus()
		return false
	}
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter a Valid Email Address")
		emailID.focus()
		return false
	}
		
	if ((document.frmEmail2.Phone.value==null)||(document.frmEmail2.Phone.value=="")){
		alert("Please Enter a Phone Number")
		document.frmEmail2.Phone.focus()
		return false
	}
	
	if (echeck(emailID.value)==false){
		emailID.focus()
		return false
	}
	return true
 }
 
 
function ValidateFormRefer(){
	// var emailID1=trim(document.frmMain.your_email.value);
	// var emailID2=trim(document.frmMain.friend_email1.value);
	// var emailID3=trim(document.frmMain.friend_email2.value);
	// var emailID4=trim(document.frmMain.friend_email3.value);
	// var emailID5=trim(document.frmMain.friend_email4.value);
	
	// if ((emailID1==null)||(emailID1=="")){
		// alert("Please Enter a Valid Email Address")
		// document.frmMain.your_email.focus()
		// return false
	// }
	// if (echeck(emailID1)==false){
		// document.frmMain.your_email.focus()
		// return false
	// }
	
	// if ((emailID2==null)||(emailID2=="")){
		// alert("Please Enter a Valid Email Address")
		// document.frmMain.friend_email1.focus()
		// return false
	// }
	// if (echeck(emailID2)==false){
		// document.frmMain.friend_email1.focus()
		// return false
	// }
	
	// if ((document.frmMain.your_name.value==null)||(document.frmMain.your_name.value=="")){
		// alert("Please Enter Your Name")
		// document.frmMain.your_name.focus()
		// return false
	// }
	
	// if ((emailID2==emailID3)&&(emailID3!="")) {
		// alert("Please Enter a Unique Email per Line")
		// return false
	// }
	
	// if ((emailID2==emailID4)&&(emailID4!="")) {
		// alert("Please Enter a Unique Email per Line")
		// return false
	// }
	
	// if ((emailID2==emailID5)&&(emailID5!="")) {
		// alert("Please Enter a Unique Email per Line")
		// return false
	// }
	
	// if ((emailID3==emailID4)&&(emailID4!="")) {
		// alert("Please Enter a Unique Email per Line")
		// return false
	// }
	
	// if ((emailID3==emailID5)&&(emailID5!="")) {
		// alert("Please Enter a Unique Email per Line")
		// return false
	// }
	
	// if ((emailID4==emailID5)&&(emailID5!="")) {
		// alert("Please Enter a Unique Email per Line")
		// return false
	// }
	
	return true
 }
 
 function validZip2() {
   var ZipID=document.frmPref.ZIP
   
   len=ZipID.value.length
   digits="0123456789"
   if(len == 5) {
	  for(i=0; i<5; i++) {
	    if (digits.indexOf(ZipID.value.charAt(i))<0) {
			alert("Zip must be numbers")
    		ZipID.focus()
    		return false
		}
		return true
	  }
   }


   if(len == 6) {
	   return true
   }

	   alert("Zip is not the correct length")
	   ZipID.focus()
	   return false
}

	function validZip() {
		if ((document.frmPref.ZIP.value==null)||(document.frmPref.ZIP.value=="")){
		alert("Please Enter Your Zip Code")
		document.frmPref.ZIP.focus()
		return false
	}
	return true
 }
 
 
 
 function validProfile() {
	 var ZipID=document.frmPref.ZIP
	 var new_email1=document.frmPref.new_email1
	 var new_email2=document.frmPref.new_email2
	 
	 if(new_email1.value.length != 0 || new_email2.value.length != 0) {
		 if(new_email1.value != new_email2.value) {
			 alert("The email addresses do not match!")
			 return false
		 }
		 if(echeck(new_email1.value)==false) {
			 return false
		 }
	 }
	 if(new_email1.value.length == 0 && ZipID.value.length == 0) {
		 return false
	 }
	 
	 return true
 }
