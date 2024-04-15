const btn_login_mudar = document.querySelector("#btn-login-mudar");
const btn_cadastro_mudar = document.querySelector("#btn-cadastro-mudar");
const container = document.querySelector(".container");

btn_cadastro_mudar.addEventListener('click', () => {
    container.classList.add("btn-cadastro-mode");

});

btn_login_mudar.addEventListener('click', () => {
    container.classList.remove("btn-cadastro-mode");

});

// condição da data ============== cadastro const dataatual = document.getElementById("date"); ===========//
