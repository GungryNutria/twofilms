const password = document.getElementById("password");
const img = document.getElementById("ojo");

const verOcultarPassword = () => {
    if (password.type === "password") {
        password.type = "text";
        img.src = "src/assets/eye-open-svgrepo-com.svg";
    } else {
        password.type = "password";
        img.src = "src/assets/eye-close-svgrepo-com.svg";
    }
}