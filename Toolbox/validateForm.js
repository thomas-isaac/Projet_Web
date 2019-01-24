function validateForm() {
			var index;
			var upp = false;
			var num = false;
			var pwd = document.forms["myForm"]["pwd"].value;
			var confPwd = document.forms["myForm"]["confPwd"].value;
			var charac;

			if(pwd != confPwd){
				alert("Passwords do not match");
				return false;
			}
			for(index = 0; index < pwd.length; index++) {
				charac = pwd.charAt(index);
				if(!isNaN(charac)) {
					num = true;
				}
				else if(charac == charac.toLocaleUpperCase()) {
					upp = true;
				}
				else {
				}
			}
			if(upp == false || num == false){
				alert("Password must contain at least one uppercase character and one numerical value");
				return false;
			}
			else{
				return true;
			}
 }
