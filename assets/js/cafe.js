function validation(){
		var name=document.getElementById('inputName').value;
		var email=document.getElementById('inputEmail').value;
		var password=document.getElementById('inputPassword').value;
		var address=document.getElementById('inputAddress').value;
		var message=document.getElementById('inputtextarea').value;

		if(name=='' || email=='' || password==''|| address=='' || message==''){
		alert('You missed some fields!');

		document.getElementById('demo').innerHTML="All fields are required!";
		return false;
		}

		else if(name.length<5){
			document.getElementById('demo').innerHTML="User Name has at least 5 characters!";
			return false;
		}

		else if(email.length<15){
			document.getElementById('demo').innerHTML="User Email has at least 15 characters!";
			return false;
		}

		else if(password.length<8){
			document.getElementById('demo').innerHTML="Password field has at least 8 characters!";
			return false;
		}

		else if(address.length<10){
			document.getElementById('demo').innerHTML="Address field has at least 10 characters!";
			return false;
		}
		else if(message.length<15){
			document.getElementById('demo').innerHTML="Message field has at least 15 characters";
			return false;
		}
		else{
		return true;
		}
	}
// end form validation

// open hour from footer
	$(document).ready(function(){
			$("#op").mouseenter(function(){
				alert("Time : 7 A.M to 9 P.M "+" Date : Tuesday - Sunday");
			});
		});
// end open hour from footer

// navbar toggler 
// function myFunction(x) {
// 	x.classList.toggle("change");
//   }

