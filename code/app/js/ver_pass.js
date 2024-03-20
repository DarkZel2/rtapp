const pass = document.getElementById("pass");
const icon = document.getElementById("icon");

icon.addEventListener("click", e => {
    if (pass.type === "password") {
        pass.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    } else {
        pass.type = "password";
        icon.classList.add("bi-eye");
        icon.classList.remove("bi-eye-slash");
    }
});

const pass2 = document.getElementById("pass2");
const icon2 = document.getElementById("icon2");

icon2.addEventListener("click", e => {
    if (pass2.type === "password") {
        pass2.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    } else {
        pass2.type = "password";
        icon.classList.add("bi-eye");
        icon.classList.remove("bi-eye-slash");
    }
});