<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitrah</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/helpers.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/helpers.min.js"></script>
</head>
<body>
@include('navbar')
<div class="container media media-body">


<div class="container bg-success text-white">
    <h1>Fitrah</h1> 
</div>
<form method="POST" action="/fitrah/tambah-fitrah">
    @csrf
 

<div class="bg-success text-white">
  <label for="nama">nama</label>
  <input id="nama" type="text" name="nama" value="">
  <p id="nama_view"></p>
</div>
<div class="bg-warning text-white">
  <label for="estetika">estetika</label>
  <input id="estetika" type="text" name="estetika" value="">
  <p id="estetika_view"></p>
</div>
<div class="bg-danger text-white">
  <label for="perkembangan">perkembangan</label>
  <input id="perkembangan" type="text" name="perkembangan" value="">
  <p id="perkembangan_view"></p>
</div>
<div class="bg-success text-white">
  <label for="iman">iman</label>
  <input id="iman" type="text" name="iman" value="">
  <p id="iman_view"></p>
</div>
<div class="bg-primary text-white">
  <label for="bakat">bakat</label>
  <input id="bakat" type="text" name="bakat" value="">
  <p id="bakat_view"></p>
</div>
<div class="bg-warning text-white">
  <label for="belajar">belajar</label>
  <input id="belajar" type="text" name="belajar" value="">
  <p id="belajar_view"></p>
</div>
<div class="bg-danger text-white">
  <label for="sosial">sosial</label>
  <input id="sosial" type="text" name="sosial" value="">
  <p id="sosial_view"></p>
</div>
<div class="bg-success text-white">
  <label for="jasmani">jasmani</label>
  <input id="jasmani" type="text" name="jasmani" value="">
  <p id="jasmani_view"></p>
</div>
<div class="bg-primary text-white">
  <label for="seksualitas">seksualitas</label>
  <input id="seksualitas" type="text" name="seksualitas" value="">
  <p id="seksualitas_view"></p>
</div>
    <button class="bg-success" type="submit" id="simpan">save</button>
</form>
<div class="">
  <canvas id="myChart"></canvas>
</div>

<script>
      var nama;
      var estetika;
      var perkembangan;
      var iman;
      var bakat;
      var belajar;
      var sosial;
      var jasmani;
      var seksualitas;
      var chart;
        $('body').on('click', '#simpan', function(event){
            nama=$('#nama').val();
            $('#nama_view').text(nama);
            estetika=$('#estetika').val();
            $('#estetika_view').text(estetika);
            perkembangan=$('#perkembangan').val();
            $('#perkembangan_view').text(perkembangan);
            iman=$('#iman').val();
            $('#iman_view').text(iman);
            bakat=$('#bakat').val();
            $('#bakat_view').text(bakat);
            belajar=$('#belajar').val();
            $('#belajar_view').text(belajar);
            sosial=$('#sosial').val();
            $('#sosial_view').text(sosial);
            jasmani=$('#jasmani').val();
            $('#jasmani_view').text(jasmani);
            seksualitas=$('#seksualitas').val();
            $('#seksualitas_view').text(seksualitas);
            console.log(nama);
            console.log(estetika);
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
    label: 'My First Dataset',
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
        })
</script>
    


<script src="https://cdn.jsdelivr.net/npm/chart.js">

</script>

<script>

</script>
</div>
</body>
</html>