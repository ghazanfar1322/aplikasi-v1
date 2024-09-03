<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<title>TEST PAGE</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/helpers.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/helpers.min.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
@include('navbar')

<table style="width:70%">
  <tr>
    <th>nama</th>
    <th>estetika</th> 
    <th>perkembangan</th>
    <th>iman</th>
    <th>bakat</th>
    <th>belajar</th>
    <th>sosial</th>
    <th>jasmani</th>
    <th>seksualitas</th>
    <th></th>
  </tr>
  @foreach($fitrah as $f)
  <tr>
    <td>{{$f-> name}}</td>
    <td>{{$f-> estetika}}</td>
    <td>{{$f-> perkembangan}}</td>
    <td>{{$f-> iman}}</td>
    <td>{{$f-> bakat}}</td>
    <td>{{$f-> belajar}}</td>
    <td>{{$f-> sosial}}</td>
    <td>{{$f-> jasmani}}</td>
    <td>{{$f-> seksualitas}}</td>
    <td>
      <button class="btn-view" data-id="{{$f-> id}}">lihat grafik</button>
    </td>
  </tr>
  @endforeach
  </tr>
</table>

<a href="fitrah"><button type='button'>fitrah</button></a>


<div class="">
  <canvas id="myChart"></canvas>
</div>

<script>
$(document).ready(function() {
  var chart;
  $('body').on('click', '.btn-view', function(event) {
    var id=$(this).data('id');
    var nilai=@json($fitrah);
    var fitrah=nilai.find(item=>item.id==id);
    console.log(fitrah);
    var nama=fitrah.nama;
      var estetika=fitrah.estetika;
      var perkembangan=fitrah.perkembangan;
      var iman=fitrah.iman;
      var bakat=fitrah.bakat;
      var belajar=fitrah.belajar;
      var sosial=fitrah.sosial;
      var jasmani=fitrah.jasmani;
      var seksualitas=fitrah.jasmani;
      const ctx = document.getElementById('myChart');
            if(chart){
              chart.destroy();
            }
  const data = {
  labels: [
    'estetika',
    'perkembangan',
    'iman',
    'bakat',
    'belajar',
    'sosial',
    'jasmani',
    'seksualitas',
  ],
  datasets: [{
    label: 'Grafik Fitrah',
    data: [estetika, perkembangan, iman, bakat, belajar, sosial, jasmani, seksualitas],
    fill: true,
    backgroundColor: 'rgba(255, 99, 132, 0.2)',
    borderColor: 'rgb(255, 99, 132)',
    pointBackgroundColor: 'rgb(255, 99, 132)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(255, 99, 132)'
  }]
};
  chart=new Chart(ctx, {
    type: 'radar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  });
});

</script>

</body>
</html>