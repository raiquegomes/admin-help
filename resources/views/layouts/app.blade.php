<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('panel/assets/css/main/app.css') }}">
        <link rel="stylesheet" href="{{ asset('panel/assets/css/main/app-dark.css') }}">
        <link rel="stylesheet" href="{{ asset('panel/assets/css/shared/iconly.css') }}">

        <link rel="shortcut icon" href="{{ asset('panel/assets/images/logo/favicon.svg') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('panel/assets/images/logo/favicon.png') }}" type="image/png">

        <link rel="stylesheet" href="{{ asset('panel/assets/css/widgets/todo.css')}}">
        <link rel="stylesheet" href="{{ asset('panel/assets/extensions/dragula/dragula.min.css')}}">

        <script type="text/javascript" src="{{ asset('js/jquery-3.6.1.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div id="app">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <div id="main">
                @if (isset($header))

                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>{{ $header }}</h3>
                            <p class="text-subtitle text-muted">{{ $subtitle }}</p>
                        </div>
                    </div>
                </div>
                @endif
                
                <div class="page-content">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @stack('modals')
        @livewireScripts
        <script src="{{ asset('js/tableHTMLExport.js') }}"></script>
        <script>
            // BAIXAR CORTES P&F
            $('#txt_pf').on('click',function(){
                $("#cut_pf").tableHTMLExport({
                
                type:'txt',
                
                filename:'CORTE_P&F.txt',
                
                separator:';',
                newline:'\r\n',
                trimContent:true,
                quoteFields:false,
                // CSS selector(s)
                
                ignoreColumns:'',
                
                ignoreRows:'',
                
                htmlContent:false,
                
                consoleLog:false,       
                
                });
            });

            $('#txt_ae').on('click',function(){
                $("#cut_ae").tableHTMLExport({
                
                type:'txt',
                
                filename:'CORTE_A&E.txt',
                
                separator:';',
                newline:'\r\n',
                trimContent:true,
                quoteFields:false,
                // CSS selector(s)
                
                ignoreColumns:'',
                
                ignoreRows:'',
                
                htmlContent:false,
                
                consoleLog:false,       
                
                });
            });
            //MASK DATE
            $(function () {
                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
                //Money Euro
                $('[data-mask]').inputmask()
            });

        // If you want to use tooltips in your project, we suggest initializing them globally
        // instead of a "per-page" level.
        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        }, false);
    </script>
        <script src="{{ asset('panel/assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('panel/assets/js/app.js') }}"></script>
        <script src="{{ asset('panel/assets/extensions/dragula/dragula.min.js')}}"></script>
        <script src="{{ asset('panel/assets/js/pages/ui-todolist.js')}}"></script>
        <script src="{{ asset('js/jquery.inputmask.min.js')}}"></script>
    </body>
</html>
