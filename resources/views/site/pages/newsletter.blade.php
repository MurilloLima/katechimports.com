<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/site/images/icon/favicon-48X48.png') }}" type="image/png" sizes="48x48">
    <link rel="icon" href="{{ asset('assets/site/images/icon/favicon-96X96.png') }}" type="image/png" sizes="96x96">
    <link rel="icon" href="{{ asset('assets/site/images/icon/favicon-144X144.png') }}" type="image/png" sizes="144x144">
    <title>Katech Imports</title>
    <!-- Bootstrap Min Css -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/bootstrap.min.css') }}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/font-awesome.min.css') }}">
    <!-- Material Design Font Css -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/material-design-iconic-font.min.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/vendor/animate.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/plugins/magnific-popup.css') }}">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/plugins/jquery-ui.min.css') }}">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/css/plugins/plugins.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Signika+Negative:wght@300;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-image: url(assets/site/images/bg/bg-2.png);
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: cover;
            /* background-color: #A8CF45; */
        }

        h1 {
            font-family: 'Oswald', sans-serif;
            font-family: 'Signika Negative', sans-serif;
            font-size: 32px;
            color: white;
            margin-top: 30px;
            font-weight: 600;
        }

        .bg-gree {
            background-color: #A8CF45;
            border: 0;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 800px;
            margin: auto;
            font-family: Arial;
            color: #fff;
        }

        .title-cadastre {
            font-family: 'Oswald', sans-serif;
            font-family: 'Signika Negative', sans-serif;
            background-color: #A8CF45;
            color: #4B4B4D;
            border-radius: 6px;
            font-weight: 600;
        }
    </style>

    <style>
        div#loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('{{url('assets/admin/dist/img/4.gif')}}') 50% 50% no-repeat white;
        }
    </style>
</head>

<body>
    <div id="loader"></div>
    <div class="container">
        <div class="row center vh-100">
            <div class="col-md-6">
                <img src="{{ asset('assets/site/images/icon/icon-cart.png') }}" width="80" alt="">
                <h1>O melhor e-commerce <br>
                    do Brasil está <br>
                    em construção! <br><br>
                    Aguarde! <br>
                    ... <br>
                    <img src="{{ asset('assets/site/images/icon/icons-footer.png') }}" width="100" alt="">

                </h1>
            </div>
            <div class="col-md-6 text-center">
                <p class="title-cadastre">Cadastre-se aqui, e receba novidades!</p>
                @include('site.includes.alerts')
                <form action="{{ route('site.send') }}" method="get">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" placeholder="Seu nome" style="text-align: center"
                            name="nome" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" placeholder="E-mail" style="text-align: center"
                            name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control phone_with_ddd mb-2" placeholder="Contato"
                            style="text-align: center" name="contato" required>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-dark bg-gree">Enviar</button>
                    </div>
                    <img src="{{ asset('assets/site/images/logo/logo-3.png') }}" alt="" class="mt-5 mb-3" width="150">
                    <br><br>
                    <a href="https://www.instagram.com/katechimports/"><i class="fa fa-instagram fa-2x"
                            style="color: #A8CF45;"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=5599982023038"><i class="fa fa-whatsapp fa-2x"
                            style="color: #A8CF45;"></i></a>
                </form>
            </div>
        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('assets/admin/plugins/jquery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- datatable --}}
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>
    <script>
        $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
      $("#example3").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
    </script>
    <script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
          bsCustomFileInput.init();
        });
    </script>
    <script src="{{ asset('assets/admin/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{ asset('assets/admin/dist/js/pages/dashboard2.js') }}"></script>

    <script src="{{ asset('assets/admin/dist/js/jquery.mask.js')}}"></script>
    <script>
        $('.year').mask('0000');
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.time2').mask('00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00)00000-0000'); //(99)99999-9999
        $('.phone_us').mask('(000) 0000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.rg').mask('99.999.999-9');    // Máscara para RG<br/>
        $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.money2').mask("#.##0,00", {reverse: true});
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
        }
    });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {reverse: true});
        $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
        $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                pattern: /[\/]/,
                fallback: '/'
                },
                placeholder: "__/__/____"
            }
            });
        $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
    
    </script>
    <script>
        // Este evendo é acionado após o carregamento da página
    jQuery(window).load(function() {
        //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
        jQuery("#loader").fadeOut("slow");
    });
    </script>
    <script>
        $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });
  
      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
    </script>
    {{-- troca class cpf para cnpj --}}
    <script type="text/javascript">
        const value = document.querySelector('#pfj');
        function addCpf(cpf) {
            value.classList.remove('cnpj');
            value.classList.add(cpf);
        }

        function addCnpj(cnpj) {
            value.classList.remove('cpf');
            value.classList.add(cnpj);
        }
    </script>


</body>

</html>