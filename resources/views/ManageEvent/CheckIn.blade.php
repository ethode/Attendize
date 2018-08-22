<!doctype html>
<html>
<head>
    <title>
        @lang("Attendee.check_in", ["event"=>$event->title])
    </title>

    {!! HTML::script('vendor/vue/dist/vue.min.js') !!}
    {!! HTML::script('vendor/vue-resource/dist/vue-resource.min.js') !!}

    {!! HTML::style('assets/stylesheet/application.css') !!}
    {!! HTML::style('assets/stylesheet/check_in.css') !!}
    {!! HTML::script('vendor/jquery/dist/jquery.min.js') !!}

    @include('Shared/Layouts/ViewJavascript')
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            background: url("data:image/svg+xml,%3C?xml version='1.0' encoding='utf-8'?%3E %3C!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E %3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 259 315' style='enable-background:new 0 0 259 315;' xml:space='preserve'%3E %3Cstyle type='text/css'%3E .st0%7Bfill-opacity:0;%7D .st1%7Bfill:none;stroke:%231E2587;%7D %3C/style%3E %3Crect x='1' class='st0' width='257.5' height='314'/%3E %3Crect x='85' y='169' class='st0' width='139.5' height='145'/%3E %3Cpath class='st1' d='M141,185l27.5-16l28,16 M141,185v32.5 M141,185l27.5,16.5 M141,217.5l-28-16l-28,16 M141,217.5l-28,16 M141,217.5l27.5,16 M141,217.5v32 M85,217.5l28,16 M85,217.5v32l28,16 M113,233.5v32 M168.5,233.5v-32 M168.5,233.5l28-16 M168.5,233.5l28,16 M168.5,233.5v32 M168.5,201.5l28-16.5 M196.5,185v32.5 M196.5,217.5l28,16 M168.5,265.5l-27.5-16 M168.5,265.5 l28,16 M168.5,265.5V298L141,314 M168.5,265.5l-27.5,16 M141,249.5l-28,16 M113,265.5V298l28,16 M113,265.5l28,16 M196.5,249.5 l28-16 M196.5,249.5v32 M224.5,233.5v32l-28,16 M141,314v-32.5'/%3E %3Crect x='1' y='88' class='st0' width='139.5' height='145'/%3E %3Cpath class='st1' d='M57,104l27.5-16l28,16 M57,104v32.5 M57,104l27.5,16.5 M57,136.5l-28-16l-28,16 M57,136.5l-28,16 M57,136.5 l27.5,16 M57,136.5v32 M1,136.5l28,16 M1,136.5v32l28,16 M29,152.5v32 M84.5,152.5v-32 M84.5,152.5l28-16 M84.5,152.5l28,16 M84.5,152.5v32 M84.5,120.5l28-16.5 M112.5,104v32.5 M112.5,136.5l28,16 M84.5,184.5l-27.5-16 M84.5,184.5l28,16 M84.5,184.5V217 L57,233 M84.5,184.5l-27.5,16 M57,168.5l-28,16 M29,184.5V217l28,16 M29,184.5l28,16 M112.5,168.5l28-16 M112.5,168.5v32 M140.5,152.5v32l-28,16 M57,233v-32.5'/%3E %3Crect x='119' class='st0' width='139.5' height='145'/%3E %3Cpath class='st1' d='M175,16l27.5-16l28,16 M175,16v32.5 M175,16l27.5,16.5 M175,48.5l-28-16l-28,16 M175,48.5l-28,16 M175,48.5 l27.5,16 M175,48.5v32 M119,48.5l28,16 M119,48.5v32l28,16 M147,64.5v32 M202.5,64.5v-32 M202.5,64.5l28-16 M202.5,64.5l28,16 M202.5,64.5v32 M202.5,32.5l28-16.5 M230.5,16v32.5 M230.5,48.5l28,16 M202.5,96.5l-27.5-16 M202.5,96.5l28,16 M202.5,96.5V129 L175,145 M202.5,96.5l-27.5,16 M175,80.5l-28,16 M147,96.5V129l28,16 M147,96.5l28,16 M230.5,80.5l28-16 M230.5,80.5v32 M258.5,64.5 v32l-28,16 M175,145v-32.5'/%3E %3C/svg%3E") repeat;
            background-color: #0C1045;
            background-attachment: fixed;
        }
    </style>
</head>
<body id="app">
<header>
    <div class="menuToggle hide">
        <i class="ico-menu"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="attendee_input_wrap">
                    <div class="input-group">
                                  <span class="input-group-btn">
                                 <button @click="showQrModal" title="Scan QR Code" class="btn btn-default qr_search" type="button"><i
                                              class="ico-qrcode"></i></button>
                                </span>
                        {!!  Form::text('attendees_q', null, [
                    'class' => 'form-control attendee_search',
                            'id' => 'search',
                            'v-model' => 'searchTerm',
                            '@keyup' => 'fetchAttendees | debounce 500',
                            '@keyup.esc' => 'clearSearch',
                            'placeholder' => trans("ManageEvent.checkin_search_placeholder")
                ])  !!}


                    </div>

                    <span v-if='searchTerm' @click='clearSearch' class="clearSearch ico-cancel"></span>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="attendeeList">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="attendee_list">
                    <h4 class="attendees_title">
                        <span v-if="!searchTerm">
                            @lang("ManageEvent.all_attendees")
                        </span>
                        <span v-else v-cloak>
                            @{{searchResultsCount}} @lang("ManageEvent.result_for") <b>@{{ searchTerm }}</b>
                        </span>
                    </h4>

                    <div style="margin: 10px;" v-if="searchResultsCount == 0 && searchTerm" class="alert alert-info"
                         v-cloak>
                        @lang("ManageEvent.no_attendees_matching") <b>@{{ searchTerm }}</b>
                    </div>

                    <ul v-if="searchResultsCount > 0" class="list-group" id="attendee_list" v-cloak>
                        <li
                        @click="toggleCheckin(attendee)"
                        v-for="attendee in attendees"
                        class="at list-group-item"
                        :class = "{arrived : attendee.has_arrived || attendee.has_arrived == '1'}"
                        >
                            @lang("Attendee.name"): <b>@{{ attendee.first_name }} @{{ attendee.last_name }} </b> &nbsp; <span v-if="!attendee.is_payment_received" class="label label-danger">@lang("Order.awaiting_payment")</span>
                        <br>
                            @lang("Order.reference"): <b>@{{ attendee.order_reference + '-' + attendee.reference_index }}</b>
                        <br>
                            @lang("Order.ticket"): <b>@{{ attendee.ticket }}</b>
                        <a href="" class="ci btn btn-successfulQrRead">
                            <i class="ico-checkmark"></i>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="hide">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</footer>

{{--QR Modal--}}
<div role="dialog" id="QrModal" class="scannerModal" v-show="showScannerModal" v-cloak>
    <div class="scannerModalContent">

        <a @click="closeScanner"  class="closeScanner" href="javascript:void(0);">
        <i class="ico-close"></i>
        </a>
        <video id="scannerVideo" playsinline autoplay></video>

        <div class="scannerButtons">
                    <a @click="initScanner" v-show="!isScanning" href="javascript:void(0);">
                    @lang("Attendee.scan_another_ticket")
                    </a>
        </div>
        <div v-if="isScanning" class="scannerAimer">
        </div>

        <div v-if="scanResult" class="scannerResult @{{ scanResultType }}">
            <i v-if="scanResultType == 'success'" class="ico-checkmark"></i>
            <i v-if="scanResultType == 'error'" class="ico-close"></i>
        </div>

        <div class="ScanResultMessage">
                    <span class="message" v-if="!isScanning">
                        @{{{ scanResultMessage }}}
                    </span>
                    <span v-else>
                        <div id="scanning-ellipsis">@lang("Attendee.scanning")<span>.</span><span>.</span><span>.</span></div>
                    </span>
        </div>
        <canvas id="QrCanvas" width="800" height="600"></canvas>
    </div>
</div>
{{-- /END QR Modal--}}

<script>
Vue.http.headers.common['X-CSRF-TOKEN'] = '{{ csrf_token() }}';
</script>

@include("Shared.Partials.LangScript")
{!! HTML::script('vendor/qrcode-scan/llqrcode.js') !!}
{!! HTML::script('assets/javascript/check_in.js') !!}
</body>
</html>
