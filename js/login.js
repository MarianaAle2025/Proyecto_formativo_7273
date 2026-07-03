function login() {

    const user = document.getElementById("user").value.trim();
    const pass = document.getElementById("pass").value.trim();
    const error = document.getElementById("error");

    const userCorrecto = "admin";
    const passCorrecto = "1234";

    if (user === userCorrecto && pass === passCorrecto) {

        // limpiar error si existía
        error.innerText = "";

        // guardar sesión
        localStorage.setItem("login", "true");

        // guardar usuario
        localStorage.setItem("usuario", user);

        // ir al dashboard
        window.location.href = "dashboard.html";

    } else {
        error.innerText = "❌ Usuario o contraseña incorrectos";
    }
}