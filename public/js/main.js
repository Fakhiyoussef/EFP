let dateUser = document.getElementById("dateNaiss");
let age = document.getElementById("age");
let dateNow = new Date();
dateUser.addEventListener("change", function () {
    age.value = dateNow.getFullYear() - new Date(dateUser.value).getFullYear();
});

