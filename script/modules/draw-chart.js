export default function draw() {
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data;
    const arrayList = new Array();
    arrayList.push(["Nome", "Participação"]);
    fetch("backend/lista_usuario.php").then(response => response.json()).then(body => {
      body.forEach((item) => {
        const { nome, sobrenome, participacao } = item;
        arrayList.push([`${nome} ${sobrenome}`, participacao]);
      });

      data = google.visualization.arrayToDataTable(arrayList);

      var options = {
        pieHole: 0.5,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    });
  }
}