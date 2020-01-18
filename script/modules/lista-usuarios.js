export default function listaUsuarios(){
  const tbodyTable = document.querySelector(".table tbody");
  fetch("backend/lista_usuario.php")
    .then(response => response.json())
      .then(body => {
        body.forEach(item => {
          const tr = `<tr>
                        <th scope="row">${item.id}</th>
                        <td>${item.nome}</td>
                        <td>${item.sobrenome}</td>
                        <td>${item.participacao}%</td>
                      </tr>`;
          tbodyTable.innerHTML += tr;
        });
      });
}
