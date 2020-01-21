import listaUsuarios from './lista-usuarios.js';
import draw from "./draw-chart.js";

export default function formulario(){

  const form = document.querySelector("form");

  const handleSubmit = (event) => {
    event.preventDefault();

    const nome = document.getElementById("nome").value;
    const sobrenome = document.getElementById("sobrenome").value;
    const participacao = document.getElementById("participacao").value;

    fetch('http://localhost:80/teste/criarUsuario', {
      method: 'POST',
      mode: "same-origin",
      credentials: "same-origin",
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        "nome": nome,
        "sobrenome": sobrenome,
        "participacao": participacao
      })
    }).then(response => response.text()).then(() => {
      listaUsuarios("update");
      draw();
      document.getElementById("nome").value = '';
      document.getElementById("sobrenome").value = '';
      document.getElementById("participacao").value = '';
      document.getElementById("nome").focus();
    })
  }

  form.addEventListener("submit", handleSubmit);
}