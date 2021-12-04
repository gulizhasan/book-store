document.addEventListener("DOMContentLoaded", begin);
function begin() {
  const btn = document.getElementById("send");
  btn.addEventListener("click", carryChecks); //do function carryChecks on button click

  function checkCard() {
    //checks if the card number input matches the given criteria
    
    const ccnum = document.getElementById("card").value;
    const patt1 = /^(?:5[1-5][0-9]{14})$/;

    if (ccnum.match(patt1)) {
      return true;
    } else return false;
  }

  function checkDate() {
    //checks if the card has expired

    let expMonth = document.getElementById("month").value; //gets month input from the form
    let expYear = document.getElementById("year").value; //gets year input from the form

    let today = new Date(); // gets the current date
    let expDate = new Date();

    expDate.setFullYear(expYear, expMonth, 1); //sets the date format to year/month/day and sets 1 as default

    if (today > expDate) {
      return false;
    } else {
      return true;
    }
  }

  function checkCode() {
    //checks if the cvv input consists of 3 or 4 consecutive digits

    const securityCode = document.getElementById("security").value; //gets the cvv
    const patt2 = /^(?:[0-9]{3,4})$/; //checks if it matches the criteria

    if (securityCode.match(patt2)) {
      //if cvv matches, returns true, if not, false

      return true;
    } else return false;
  }

  function carryChecks() {
    //checks if all 3 of the checks are equal to true

    if (checkCard() == false || checkDate() == false || checkCode() == false) {
      document.getElementById("hidden").value = -1;
      alert("Invalid card, please try again."); //shows an alert if any of the checks are equal to false
    } else {
      document.getElementById("hidden").value = 1;
    }
  }
}
