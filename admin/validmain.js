
    function validation() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var mobile = document.getElementById('mobile').value;
      if (name == "") {
        document.getElementById('nameError').innerHTML = "*** Please Enter the Name ***";
        return false;
      }
      if (!isNaN(name)) {
        document.getElementById('nameError').innerHTML = "*** Please Enter only Character as Name ***";
        return false;
      }
      if (email == "") {
        document.getElementById('emailError').innerHTML = " *** Please Enter the Email Id *** ";
        return false;
      }
      if (email.indexOf('@') <= 1) {
        document.getElementById('emailError').innerHTML = " *** Please Enter  @ at valid position  *** ";
        return false;
      }
      if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
        document.getElementById('emailError').innerHTML = " *** Please Enter  . at valid position  *** ";
        return false;
      }
      if (isNaN(mobile)) {
        document.getElementById('mobileError').innerHTML = " *** Please Enter  Valid mobile number  *** ";
        return false;
      }
      if ((mobile.length < 10) || (mobile.length > 10)) {
        document.getElementById('mobileError').innerHTML = " *** Please Enter  10 digits only  *** ";
        return false;
      }
      if((mobile.charAt(0) != 9) && (mobile.charAt(0) != 8) && (mobile.charAt(0) !=7)){
        document.getElementById('mobileError').innerHTML = " *** Please Enter  9 or 8 or 7 starting digits only  *** ";
        return false;
      }

    }