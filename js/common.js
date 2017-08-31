
/*
 * http://codesnippets.joyent.com/posts/show/1917
*/
function isValidEmailAddress(email)
{
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if(filter.test(email))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function is5DigitZip(zip)
{
	var filter = /^\d{5}$/;
	
	if(filter.test(zip))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function checkEmailForm(emailForm)
{
	var email = null;
	var zip = null;
	
	if(typeof emailForm.elements.email != 'undefined')
		email = emailForm.elements.email.value;
	
	if(typeof emailForm.elements.zip != 'undefined')
		zip = emailForm.elements.zip.value;
	
	if(email != null)
	{
		if(!isValidEmailAddress(email))
		{
			alert("Please Enter a Valid Email Address");
			return false;
		}
	}
	
	if(zip != null)
	{
		/*if(!is5DigitZip(zip))
		{
			alert("Please Enter a Valid Zip Code");
			return false;
		} */
	}
	return true;
}

if((typeof jQuery != 'undefined'))
{
	$(document).ready(function()
	{
		/*
		setTimeout(function()
		{
			img = new Image(); // for the inactive image
			right = 0;
			top = 0;
			img.src = "images/dtd2/unicorn.png";
			var cssObj = {
				'width' : '500px',
				'position' : 'fixed',
				'top' : '0px',
				'right' : '0px',
				'z-index' : 100
			}
			$(img).css(cssObj);
			$("body").append(img);
			intervalID = setInterval(moveImage, 100);
		},1000)
		*/
	});

	function moveImage()
	{
		right += 200;
		if(right > screen.availWidth)
			right = 0;
			
		$(img).css('right', right + 'px');
	}
}