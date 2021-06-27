@extends('layouts.app')
@extends('layout/main')
@section('title','Portal Wisata Sleman by Firewall.Co')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<div class="sidenav">
  <a href="/admin">Home</a>
  <a href="/admin/sejarah">Tambah Sejarah</a>
  <a href="/admin/rekreasi">Tambah Rekreasi</a>
  <a href="/admin/kuliner">Tambah Kuliner</a>
  <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ubah Konten
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/sejarahedit">Ubah Konten Sejarah</a>
    <a class="dropdown-item" href="/kulineredit">Ubah Konten Kuliner</a>
    <a class="dropdown-item" href="/rekreasiedit">Ubah Konten Rekreasi</a>
  </div>
</div>
</div>

<div class="main">
  <div class="panel">
    <div id="chartPengunjung"></div>
  </div>
</div>
   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script>
    Highcharts.chart('chartPengunjung', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Pengunjung Bulanan pada website'
    },
    subtitle: {
        text: 'Portal Wisata Sleman'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Pengunjung'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} pengunjung</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Prambanan',
        data: [49, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54]

    }, {
        name: 'Candi Ratuboko',
        data: [83, 78, 98, 93, 106, 84, 105, 104, 91, 83, 106, 92]

    }, {
        name: 'Sate Klathak',
        data: [48, 38, 39, 41, 47, 48, 59, 59, 52, 65, 59, 51]

    }, {
        name: 'Sindukusuma',
        data: [42, 33, 34, 39, 52, 75, 57, 60, 47, 39, 46, 51]

    }]
});</script>
@endsection