const form = document.querySelector('.contactform');

form.addEventListener('submit', e => {
    e.preventDefault();

    const name = form.name.value;
    const phone = form.phone.value;
    const email = form.email.value;
    const message = form.message.value;

    if (name == '') {
        alert("Enter a Name!");
        form.name.style.borderColor = "red";
        return false;
    }

    if (phone == "") {
        alert("Enter a Phone Number!");
        form.phone.style.borderColor = "red";
        return false;
    }

    if (email == "") {
        alert("Enter a Email Address!");
        form.email.style.borderColor = "red";
        return false;
    }

    if (message == "") {
        alert("Enter a Message!");
        form.message.style.borderColor = "red";
        return false;
    }

    form.submit();
});