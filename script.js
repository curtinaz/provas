document.querySelector("#register_btn").addEventListener("click", change)
document.querySelector("#register_btn2").addEventListener("click", change)

var query = location.href.split('#')

function change() {
    var formLogin = document.querySelector("#login-form");
    formLogin.classList.toggle("off");
    var formRegister = document.querySelector("#register-form");
    formRegister.classList.toggle("off");
} // faz o usuario poder mudar entre o registro e o login

// se o usuario entrar no login e estiver com o id #register, ele se mantem na página de cadastro

function changeTitle(newTitle) {
    document.title = `${newTitle}`;
}

if (query[1] == "register") {
    document.title = 'Registre-se';
    change();
}



document.querySelector(".modal-menu").addEventListener("click", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    menuToggle.classList.toggle("on");
    const modalMenu = document.querySelector(".modal-menu");
    modalMenu.classList.toggle("on");
})

console.log("teste");