document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const checkin = document.getElementById("checkin").value;
        const checkout = document.getElementById("checkout").value;

        if (!name || !email || !checkin || !checkout) {
            alert("Please fill in all required fields.");
            event.preventDefault();
        }
    });
});
