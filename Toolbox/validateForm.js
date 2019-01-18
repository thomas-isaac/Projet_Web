function validateForm() {
			var index;
			var upp = false;
			var num = false;
			var pwd = document.forms["myForm"]["fname"].value;
			var charac;

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
			if(upp == num == false){
				alert("Password must contain at least one uppercase character and one numerical value");
				return false;
			}
 }
