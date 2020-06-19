<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      {{$title}} - MrWhite
    </title>
    <link rel="icon" type="image/png" href="{{URL::to('image/logo2.png')}}">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{URL::to('css/material-dashboard.min.css?v=2.0.1')}}">
    <link href="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css" rel='stylesheet' />
    <link href="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css" rel='stylesheet' media='print' />
    <!-- iframe removal -->
      <script type="text/javascript">
        if (document.readyState === 'complete') {
            if (window.location != window.parent.location) {
              const elements = document.getElementsByClassName("iframe-extern");
              while (elemnts.lenght > 0) elements[0].remove();
                // $(".iframe-extern").remove();
            }
        };
      </script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
        <!-- End Google Tag Manager -->
  </head>
  <body >
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Panggil Sidebar -->
  @include('admin.part.sidebar')

  @yield('content')

  @include('admin.part.footer')

</body>

  <!--   Core JS Files   -->
<script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/bootstrap-material-design.min.js')}}"></script>

<!-- plugin for line charts -->
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

<script type="text/javascript" src="{{URL::to('js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script type="text/javascript" src="{{URL::to('js/moment.min.js')}}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-datetimepicker.min.js')}}"></script>

<!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
<script type="text/javascript" src="{{URL::to('js/nouislider.min.js')}}"></script>
<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-selectpicker.js')}}"></script>

<!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-tagsinput.js')}}"></script>

<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script type="text/javascript" src="{{URL::to('js/bjasny-bootstrap.min.js')}}"></script>
<!-- Plugins for presentation and navigation  -->
<script type="text/javascript" src="{{URL::to('js/modernizr.js')}}"></script>

<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script type="text/javascript" src="{{URL::to('js/material-dashboard.js')}}"></script>



<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script type="text/javascript" src="{{URL::to('js/arrive.min.js')}}"></script>

<!-- Forms Validations Plugin -->
<script type="text/javascript" src="{{URL::to('js/jquery.validate.min.js')}}"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script type="text/javascript" src="{{URL::to('js/chartist.min.js')}}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script type="text/javascript" src="{{URL::to('js/jquery.bootstrap-wizard.js')}}"></script>

<!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
<script type="text/javascript" src="{{URL::to('js/bootstrap-notify.js')}}"></script>

<!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
<script type="text/javascript" src="{{URL::to('js/jquery-jvectormap.js')}}"></script>

<!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script type="text/javascript" src="{{URL::to('js/jquery.select-bootstrap.js')}}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script type="text/javascript" src="{{URL::to('js/jquery.datatables.js')}}"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script type="text/javascript" src="{{URL::to('js/sweetalert2.js')}}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script type="text/javascript" src="{{URL::to('js/fullcalendar.min.js')}}"></script>

<!-- table sorting -->
<script>
  $(document).ready(function() {
    $('#dataProduk').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }
    });

    var table = $('#dataProduk').DataTable();

  });

  $(document).ready(function() {
    $('.table-kategori').DataTable({
      "lengthMenu": [
        [10, 50, 100, -1],
        [10, 50, 100, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }
    });

    var table = $('.table').DataTable();

  });

  $(document).on('click','.show-modal', function(){
    $('#id').text($(this).data('id'));
    $('#barc').text($(this).data('barcode'));
    $('#nama').text($(this).data('nama'));
    $('#harga').text($(this).data('harga'));
    $('#desc').text($(this).data('deskripsi'));
    $('#gambar').val($(this).data('gambar')).src;

    //punya banner
    $('#banner_id').text($(this).data('id'));
    $('#banner_name').text($(this).data('name'));
    $('#banner_pic').text($(this).data('gambar'));
    $('#tampil').text($(this).data('date_show'));
    $('#sudah').text($(this).data('date_off'));
    $('#link').text($(this).data('link'));
    $('#show').modal('show');
  });


</script>

<!-- Edit Modal -->
<script>
$(document).on('click','.edit-modal', function(){

  //punya banner
  $('#ban_id').val($(this).data('id'));
  $('#ban_name').val($(this).data('name'));
  $('#ban_pic').src($(this).data('gambar'));
  $('#shwdate').val($(this).data('date_show').getDate());
  $('#offdate').val($(this).data('date_off'));
  $('#ur_link').val($(this).data('link'));
  $('#edit').modal('show');

  $('#nama').val($(this).data('name'));
  $('#editface').modal('show');
});
</script>
<!-- Delete Modal -->
<script>
$(document).on('click','.delete-modal', function(){
  $('#banid').val($(this).data('id'));
  $('#delete').modal('show');
});
$(document).on('click','.delete-hair', function(){
  $('#hairperawatan').val($(this).data('parent'));
  $('#hairid').val($(this).data('id'));
  $('#deletehair').modal('show');
});
$(document).on('click','.delete-face', function(){
  $('#faceperawatan').val($(this).data('parent'));
  $('#faceid').val($(this).data('id'));
  $('#deleteface').modal('show');
});
</script>

<!-- Store -->
<script>
$(document).ready(function() {
  $("#bukalapak").change(function () {
      if (this.checked) {
          //menampilkan a text box
          $("#bukalapakk").show();
      } else {
          //hide the text box
          $("#bukalapakk").hide();
      }

  });
});
$(document).ready(function() {
  $("#tokopedia").change(function () {
      if (this.checked) {
          //menampilkan a text box
          $("#tokopediaa").show();
      } else {
          //hide the text box
          $("#tokopediaa").hide();
      }

  });
});
</script>

<!-- Perawatan -->
<script>
function yourfunction(radioid) {
  if(radioid == 1) {
   	document.getElementById('brand_hair').style.display = 'block';
    document.getElementById('brand_face').style.display = 'none';
    document.getElementById('bahan_hair').style.display = 'block';
    document.getElementById('bahan_face').style.display = 'none';
  }
  else if(radioid == 2) {
    document.getElementById('brand_hair').style.display = 'none';
    document.getElementById('brand_face').style.display = 'block';
    document.getElementById('bahan_hair').style.display = 'none';
    document.getElementById('bahan_face').style.display = 'block';
  }
}
</script>
<!-- input gambar -->
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>

<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

<!-- Sweet Alert 2 -->
<!-- <script>
  $('#delete').click(function() {
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel plx!",
      closeOnConfirm: false,
      closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
    });
</script> -->

<!-- Calendar -->
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-07-18',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'Peluncuran',
          start: '2018-07-01',
        },
        {
          title: 'Diskon Besar',
          start: '2018-07-07',
          end: '2018-07-10'
        },
        {
          id: 999,
          title: 'Diskon Kecil',
          start: '2018-07-09T16:00:00'
        },
        {
          id: 999,
          title: 'Diskon Kecil',
          start: '2018-07-16T16:00:00'
        },
        {
          title: 'Konferensi',
          start: '2018-07-11',
          end: '2018-07-13'
        },
        {
          title: 'Meeting',
          start: '2018-07-12T10:30:00',
          end: '2018-07-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-07-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-07-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-07-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-07-12T20:00:00'
        },
        {
          title: 'Diskon',
          start: '2018-07-28'
        }
      ]
    });

  });

</script>
</html>
