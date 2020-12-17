// Validation of First Name
function verify_first_name() {
    user_first_name = document.getElementById("user_first_name").value;
    var letters = /^[A-Za-z]+$/;
    if (user_first_name.match(letters)) {
        return true;
    } else {
        return false;
    }
}

// Validation of Last Name
function verify_last_name() {
    user_last_name = document.getElementById("user_last_name").value;
    var letters = /^[A-Za-z]+$/;
    if (user_last_name.match(letters)) {
        return true;
    } else {
        return false;
    }
}

// Validation of Mobile Number
function verify_mobile() {
    user_mobile = document.getElementById("user_mobile").value;
    mob_length = user_mobile.length;
    var mob_numbers = /^[0-9]+$/i;
    if (user_mobile.match(mob_numbers)) {
        if (mob_length == 10) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Validation of Office Number
function verify_office() {
    user_office = document.getElementById("user_office").value;
    office_length = user_office.length;
    var mob_numbers = /^[0-9]+$/i;
    if (user_office.match(mob_numbers)) {
        return true;
    } else {
        return false;
    }
}

// Validation of Email Address
function verify_email() {
    const regex_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    user_email = document.getElementById("user_email").value;
    user_email.toLowerCase();
    if (user_email.match(regex_email)) {
        return true;
    } else {
        return false;
    }
}

// Validation of Password
function verify_password() {
    user_password = document.getElementById("user_password").value;
    password_length = user_password.length;
    var letters_numbers = /^[a-z0-9]+$/i;
    if (password_length < 13 && password_length > 7) {
        if (user_password.match(letters_numbers)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// Validation of Confirm Password
function verify_conpassword() {
    user_password = document.getElementById("user_password").value;
    user_conpassword = document.getElementById("user_conpassword").value;

    if (user_password == user_conpassword) {
        if (user_conpassword == "") {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

// Calculation of Age
function calculateAge() {
    user_day = document.getElementById("user_day").value;
    user_month = document.getElementById("user_month").value;
    user_year = document.getElementById("user_year").value;
    var today = new Date()
    current_year = today.getFullYear();
    current_month = today.getMonth() + 1;
    current_day = String(today.getDate()).padStart(2, '0');
    // console.log(`Date of Birth: ${user_day},${user_month},${user_year}`);
    // console.log(`Today's Date: ${current_day},${current_month},${current_year}`);

    month_list = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
    if (user_day > current_day) {
        current_month = current_month - 1
        current_day = current_day + month_list[user_month - 1]
    }

    if (user_month > current_month) {
        current_month = current_month + 12;
        current_year = current_year - 1;
    }

    // # calculate date, month, year 
    calculated_date = current_day - user_day;
    calculated_month = current_month - user_month;
    calculated_year = current_year - user_year;

    // # print present age 
    date_to_be_entered = String(calculated_year + '.' + calculated_month + ' years');
    document.getElementById('user_age').value = date_to_be_entered;
}

// Validation of Age Calculation
function verify_AgeCal() {
    user_age_cal = document.getElementById("user_age").value;
    user_conpassword = document.getElementById("user_conpassword").value;

    if (user_age_cal == "") {
        return false;
    } else {
        return true;
    }
}

// Validation of Gender
function verify_Gender() {
    try {
        var gender = document.querySelector('input[type=radio]:checked');
        if (gender == null) {
            return false;
        } else {
            return true;
        }
    } catch (err) {
        return false;
    }
}

// Validation of Interest
function verify_interest() {
    var interest_list = new Array();
    var x = document.getElementsByName("interest");
    for (var i = 0; i < x.length; i++) {
        if (x[i].checked) {
            interest_list.push(x[i].value);
        }
    }
    if (interest_list.length == 0) {
        return false;
    } else {
        return true;
    }
}

// Validation of About You
function verify_about() {
    user_about = document.getElementById("about").value;
    //var about = /^(?!\d+$)(?:[a-zA-Z0-9][a-zA-Z0-9 @&$]*)?$/;
    //var about = /\s/;
    //var about = /^[A-Za-z0-9@&_*]+$/;
    if (user_about == "") {
        return false;
    } else {
        return true;
    }
}


// Validation Function for Form
function verify_data() {
    isName1 = verify_first_name();
    isName2 = verify_last_name();
    isMobile = verify_mobile();
    isOffice = verify_office();
    isEmail = verify_email();
    isPassword = verify_password();
    isConPassword = verify_conpassword();
    isAgeCal = verify_AgeCal();
    isGender = verify_Gender();
    isInterest = verify_interest();
    isAbout = verify_about();

    var missing_details = new Array();

    if (isName1 == false) {
        missing_details.push('Enter First Name (Only Alphabets Allowed)\n');
    }
    if (isName2 == false) {
        missing_details.push('Enter Last Name (Only Alphabets Allowed)\n');
    }
    if (isMobile == false) {
        missing_details.push('Enter Mobile Number (10 Digit Number Only)\n');
    }
    if (isOffice == false) {
        missing_details.push('Enter Office Number (Only Numbers Allowed)\n');
    }
    if (isEmail == false) {
        missing_details.push('Enter Email Address (Should be valid Email)\n');
    }
    if (isPassword == false) {
        missing_details.push('Enter Password (Range between 8-12, Only\n   Alphanumeric characters, No Special Characters)\n');
    }
    if (isConPassword == false) {
        missing_details.push('Enter Confirm Password (Should be same as Password)\n');
    }
    if (isAgeCal == false) {
        missing_details.push('Enter Date of Birth (Select from given Dropdown\n');
    }
    if (isGender == false) {
        missing_details.push('Select Gender\n');
    }
    if (isInterest == false) {
        missing_details.push('Select Interest (Select atleast 1)\n');
    }
    if (isAbout == false) {
        missing_details.push('Enter About You\n');
    }

    if (missing_details.length == 0) {
        alert("Proceed to Step 2?\nPartners Preference Form");
    } else {
        missing_details.splice(0, 0, 'Enter Missing Details in the Form:\n');
        stri = missing_details.join(' ').trim();
        alert(stri);
    }

    missing_details = [];

    if (((isName1) && (isName2) && (isMobile) && (isOffice) && (isOffice) && (isPassword) && (isConPassword)) && (isAgeCal) && (isGender) &&
        (isInterest) && (isAbout) == true) {
        window.location.href = "partners_preference_form.html";
    }
}