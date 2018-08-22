<html>
    <head>

        <title>@yield('title')</title>

        @include('Shared/Layouts/ViewJavascript')

        @include('Shared.Partials.GlobalMeta')

        <!--JS-->
       {!! HTML::script('vendor/jquery/dist/jquery.min.js') !!}
        <!--/JS-->

        <!--Style-->
       {!!HTML::style('assets/stylesheet/application.css')!!}
        <!--/Style-->

        @yield('head')

        <style>

            body {
                background: url("data:image/svg+xml,%3C?xml version='1.0' encoding='utf-8'?%3E %3C!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E %3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 259 315' style='enable-background:new 0 0 259 315;' xml:space='preserve'%3E %3Cstyle type='text/css'%3E .st0%7Bfill-opacity:0;%7D .st1%7Bfill:none;stroke:%231E2587;%7D %3C/style%3E %3Crect x='1' class='st0' width='257.5' height='314'/%3E %3Crect x='85' y='169' class='st0' width='139.5' height='145'/%3E %3Cpath class='st1' d='M141,185l27.5-16l28,16 M141,185v32.5 M141,185l27.5,16.5 M141,217.5l-28-16l-28,16 M141,217.5l-28,16 M141,217.5l27.5,16 M141,217.5v32 M85,217.5l28,16 M85,217.5v32l28,16 M113,233.5v32 M168.5,233.5v-32 M168.5,233.5l28-16 M168.5,233.5l28,16 M168.5,233.5v32 M168.5,201.5l28-16.5 M196.5,185v32.5 M196.5,217.5l28,16 M168.5,265.5l-27.5-16 M168.5,265.5 l28,16 M168.5,265.5V298L141,314 M168.5,265.5l-27.5,16 M141,249.5l-28,16 M113,265.5V298l28,16 M113,265.5l28,16 M196.5,249.5 l28-16 M196.5,249.5v32 M224.5,233.5v32l-28,16 M141,314v-32.5'/%3E %3Crect x='1' y='88' class='st0' width='139.5' height='145'/%3E %3Cpath class='st1' d='M57,104l27.5-16l28,16 M57,104v32.5 M57,104l27.5,16.5 M57,136.5l-28-16l-28,16 M57,136.5l-28,16 M57,136.5 l27.5,16 M57,136.5v32 M1,136.5l28,16 M1,136.5v32l28,16 M29,152.5v32 M84.5,152.5v-32 M84.5,152.5l28-16 M84.5,152.5l28,16 M84.5,152.5v32 M84.5,120.5l28-16.5 M112.5,104v32.5 M112.5,136.5l28,16 M84.5,184.5l-27.5-16 M84.5,184.5l28,16 M84.5,184.5V217 L57,233 M84.5,184.5l-27.5,16 M57,168.5l-28,16 M29,184.5V217l28,16 M29,184.5l28,16 M112.5,168.5l28-16 M112.5,168.5v32 M140.5,152.5v32l-28,16 M57,233v-32.5'/%3E %3Crect x='119' class='st0' width='139.5' height='145'/%3E %3Cpath class='st1' d='M175,16l27.5-16l28,16 M175,16v32.5 M175,16l27.5,16.5 M175,48.5l-28-16l-28,16 M175,48.5l-28,16 M175,48.5 l27.5,16 M175,48.5v32 M119,48.5l28,16 M119,48.5v32l28,16 M147,64.5v32 M202.5,64.5v-32 M202.5,64.5l28-16 M202.5,64.5l28,16 M202.5,64.5v32 M202.5,32.5l28-16.5 M230.5,16v32.5 M230.5,48.5l28,16 M202.5,96.5l-27.5-16 M202.5,96.5l28,16 M202.5,96.5V129 L175,145 M202.5,96.5l-27.5,16 M175,80.5l-28,16 M147,96.5V129l28,16 M147,96.5l28,16 M230.5,80.5l28-16 M230.5,80.5v32 M258.5,64.5 v32l-28,16 M175,145v-32.5'/%3E %3C/svg%3E") repeat;
                background-color: #0C1045;
            }

            h2 {
                text-align: center;
                margin-bottom: 31px;
                text-transform: uppercase;
                letter-spacing: 4px;
                font-size: 23px;
            }
            .panel {
                background-color: #ffffff;
                background-color: rgba(255,255,255,.95);
                padding: 15px 30px ;
                border: none;
                color: #333;
                box-shadow: 0 0 5px 0 rgba(0,0,0,.2);
                margin-top: 40px;
            }

            .panel a {
                color: #333;
                font-weight: 600;
            }

            .logo {
                text-align: center;
                margin-bottom: 20px;
            }

            .logo img {
                width: 200px;
            }

            .signup {
                margin-top: 10px;
            }

            .forgotPassword {
                font-size: 12px;
                color: #ccc;
            }
        </style>
    </head>
    <body>
        <section id="main" role="main">
            <section class="container">
                @yield('content')
            </section>

        </section>
        <div style="text-align: center; color: white" >
        </div>

        @include("Shared.Partials.LangScript")
        {!!HTML::script('assets/javascript/backend.js')!!}
    </body>
    @include('Shared.Partials.GlobalFooterJS')
</html>
