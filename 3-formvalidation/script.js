

function validateForm() {

    let required = document.querySelector('.required').value;
    let maxLength = document.querySelector('.maxLength8').value;
    let minMaxLengthReq = document.querySelector('.minMaxReq').value;
    let minMaxLengthNotReq = document.querySelector('.minMaxNotReq').value;
    let letters = /^[A-Za-z]+$/;
    let lettersOnly = document.querySelector('.lettersOnly').value;
    let requiredButtonYes = document.querySelector('.yes').checked;
    let requiredRadioYes = document.querySelector('.requiredRadioYes').value;
    let emailValid = document.querySelector('.emailAddress').value;

    if (required === "") {
        console.log(required);
        alert("Required field must be filled out");
        return false;
    }

    if (maxLength.length > 8){
        console.log(maxLength.length);
        alert("Character length must be no more than 8 characters");
        return false;
    }

    if (minMaxLengthReq.length < 10 && minMaxLengthReq.length > 25 || minMaxLengthReq === ""){
        console.log(minMaxLengthReq.length);
        alert("Field Required, character length must be 10 or more and less than 25 characters");
        return false;
    }

    if (minMaxLengthNotReq !== "") {
        if (minMaxLengthNotReq.length < 10 || minMaxLengthNotReq.length > 25){
            alert("Character length must be 10 or more and less than 25 characters");
            return false;
        }
    }

    if(!lettersOnly.match(letters)) {
        alert("Characters must only contain letters");
        return false;
    }

    if (requiredButtonYes){
        if (requiredRadioYes === "") {
            alert("You clicked 'yes' to the radio buttons, the field is required");
            return false;
        }
    }

    if(emailValid !== "") {
        let isValid = validateEmail(emailValid)
        if(isValid === false) {
            alert ('Invalid email address input')
            return false;
        }

    }

    alert('all Fields Valid')
    return true;

}

function validateEmail(email) {
    let emailFormat = /\S+@\S+\.\S+/;
    let correctFormat =  emailFormat.test(email);
        if (correctFormat === true) {
            let twoAts = /^[^\s@]+@[^\s@]+$/;
            return twoAts.test(email);
        }
        return false;
}

document.querySelector('.btn').addEventListener('click' , (e) => {
    e.preventDefault();
    validateForm();
})