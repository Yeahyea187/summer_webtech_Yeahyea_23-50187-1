
const form = document.querySelector("form");

form.addEventListener("submit", function (event) {
    event.preventDefault(); 

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const age = document.getElementById("age").value.trim();
    const course = document.getElementById("course").value;


    if (name === "") {
        alert("Please enter your full name.");
        return;
    }

    if (email === "") {
        alert("Please enter your email.");
        return;
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    if (age === "" || isNaN(age) || age < 0 || age > 120) {
        alert("Please enter a valid age between 0 and 120.");
        return;
    }

    if (course === "") {
        alert("Please select a course.");
        return;
    }

    alert(`Form submitted successfully!`);


});
