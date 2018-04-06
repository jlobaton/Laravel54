<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
    {!! Html::script('js/jquery.min.js') !!}


    {!! Html::script('js/jquery.dataTables.min.js') !!}

    {!! Html::script('js/dataTables.bootstrap.min.js') !!}
    {!! Html::script('js/dataTables.buttons.min.js') !!}
    {!! Html::script('js/buttons.flash.min.js') !!}
    {!! Html::script('js/pdfmake.min.js') !!}
    {!! Html::script('js/buttons.html5.min.js') !!}
    {!! Html::script('js/dataTables.select.min.js') !!}
    {!! Html::script('js/vfs_fonts.js') !!}

    {!! Html::script('js/moment.min.js') !!}
    {!! Html::script('js/jquery.backstretch.min.js') !!}
    {!! Html::script('js/retina-1.1.0.min.js') !!}
	{!! Html::script('js/script.js') !!}

    {!! Html::script('js/fullcalendar.js') !!}
    {!! Html::script('lang/fullcalendar.es.js') !!}
    {!! Html::script('js/jquery.price_format.min.js') !!}
    {!! Html::script('js/bootstrap-datetimepicker.min.js') !!}
    {!! Html::script('plugins/bootstrap-datepicker.js') !!}
    {!! Html::script('plugins/bootstrap-datepicker.es.js') !!}
    {!! Html::script('js/jquery.timepicker.min.js') !!}
    {!! Html::script('js/sweetalert/sweetalert.min.js') !!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>


<script type="text/javascript">

    $(document).ready(function() {


        var ctx = document.getElementById("barChart");
var barChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Notas 6+7", "Notas 1 a 4", "Neta"],
    datasets: [{
        label: '{{ $datos[0]["nombre"]->nom_pregunta }}',
        data: [{{ $datos[0]["satisfaccion"] }}, {{ $datos[1]["satisfaccion"] }}, {{ $datos[2]["satisfaccion"]}}],
        backgroundColor: [
          'red',
          'red',
          'red'
        ],
        borderWidth: 2
      },
      {
        label: '{{ $datos[1]["nombre"]->nom_pregunta }}',
        data: [{{ $datos[0]["insatisfaccion"] }}, {{ $datos[1]["insatisfaccion"] }}, {{ $datos[2]["insatisfaccion"]}}],
        backgroundColor: [
          'green',
          'green',
          'green'
        ],
        borderWidth: 2
      },
      {
        label: '{{ $datos[2]["nombre"]->nom_pregunta }}',
        data: [{{ $datos[0]["neta"] }}, {{ $datos[1]["neta"] }}, {{ $datos[2]["neta"]}}],
        backgroundColor: [
          'yellow',
          'yellow',
          'yellow'
        ],
        borderWidth: 2
      },
      {
        label: '{{ $datos[3]["nombre"]->nom_pregunta }}',
        data: [27, 34, -23],
        backgroundColor: [
          'blue',
          'blue',
          'blue'
        ],
        borderWidth: 2
      }
    ]
  },
  options: {
    scales: {
      yAxes: [{
        stacked: true,
        ticks: {
          beginAtZero: true
        }
      }],
      xAxes: [{
        stacked: true,
        ticks: {
          beginAtZero: true
        }
      }]

    }
  }
    });


    });
</script>
