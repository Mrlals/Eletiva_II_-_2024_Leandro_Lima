<x-app-layout>
    <h5 class="mt-3">Bem vindo ao sistema de Pacotes de Viagens!</h5>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
          var data = google.visualization.arrayToDataTable([
              ['Pacotes', 'Quantidade Vendida'],
              @foreach ($graficoDados as $dado)
                  ['{{ e($dado['nome']) }}', {{ $dado['quantidade'] }}],
              @endforeach
          ]);

          var options = {
              title: 'Quantidade de Pacotes Vendidos'
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
      }
    </script>

    <div class="d-flex justify-content-center">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
</x-app-layout>