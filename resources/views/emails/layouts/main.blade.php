<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>{{ config('app.name') }} Email</title>
    <style type="text/css">
        html {
            height: 100%;
            box-sizing: border-box;
            font-size: 14px;
            color: #2c3144;
        }
        *, *:before, *:after {
            box-sizing: inherit;
        }
        .email_body {
            font-family: 'Avenir', Helvetica, Arial, sans-serif;
            position: relative;
            margin: 0;
            padding-bottom: 6rem;
            min-height: 100%;
            background: #f5f8fa;
        }
        content {
            min-height: 100%;
        }
        .main-content {
            border: 1px solid #d7e2e9;
            border-radius: 5px;
            width: 100%;
            max-width: 700px;
            background: #ffffff;
            margin: 10px auto;
            position: relative;
            box-shadow: 8px 8px 30px #c7c7c7;
            -webkit-box-shadow: 8px 8px 30px #c7c7c7;
            -moz-box-shadow: 8px 8px 30px #c7c7c7;
        }
        #content-header {
            border-bottom: 1px solid #d7e2e9;
            padding: 15px;
            position: relative;
        }
        #content-body {
            padding: 15px;
        }
        header {
            height: auto;
            color: white;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
        }
        header img {
            margin-top: 30px;
        }
        footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 120px;
            text-align: center;
            background: #48c6ff;
            background: -webkit-linear-gradient(left, #45deff, #5276ff);
            background: -o-linear-gradient(right, #45deff, #5276ff);
            background: -moz-linear-gradient(right, #45deff, #5276ff);
            background: linear-gradient(to right, #45deff, #5276ff);
            color: white;
        }
        footer #text {
            padding: 10px;
        }
        footer a {
            color: #FFFFFF;
        }
        .btn {
            display: inline-block;
            padding: 10px 12px;
            margin-bottom: 0;
            font-size: 12px;
            font-weight: 800;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            text-decoration: none;
        }
        .btn:focus, .btn:active:focus, .btn.active:focus {
            outline: thin dotted;
            outline-offset: -2px;
        }
        .btn:hover, .btn:focus {
            color: #333;
            text-decoration: none;
        }
        .btn:active, .btn.active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        }
        .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
            pointer-events: none;
            cursor: not-allowed;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            box-shadow: none;
            -moz-box-shadow: none;
            opacity: .65;
        }
        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
            color: #333;
            background-color: #ebebeb;
            border-color: #adadad;
        }
        .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
            background-image: none;
        }
        .btn-default.disabled, .btn-default[disabled], fieldset[disabled] .btn-default, .btn-default.disabled:hover, .btn-default[disabled]:hover, fieldset[disabled] .btn-default:hover, .btn-default.disabled:focus, .btn-default[disabled]:focus, fieldset[disabled] .btn-default:focus, .btn-default.disabled:active, .btn-default[disabled]:active, fieldset[disabled] .btn-default:active, .btn-default.disabled.active, .btn-default[disabled].active, fieldset[disabled] .btn-default.active {
            background-color: #fff;
            border-color: #ccc;
        }
        .btn-default .badge {
            color: #fff;
            background-color: #333;
        }
        .btn-primary {
            color: #fff;
            background-color: #428bca;
            border-color: #357ebd;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #3276b1;
            border-color: #285e8e;
        }
        .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
            background-image: none;
        }
        .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active {
            background-color: #428bca;
            border-color: #357ebd;
        }
        .btn-primary .badge {
            color: #428bca;
            background-color: #fff;
        }
        .btn-success {
            color: #fff;
            background-color: #65df7a;
            border-color: #65df7a;
        }
        .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success {
            color: #fff;
            background-color: #47a447;
            border-color: #47a447;
        }
        .btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success {
            background-image: none;
        }
        .btn-success.disabled, .btn-success[disabled], fieldset[disabled] .btn-success, .btn-success.disabled:hover, .btn-success[disabled]:hover, fieldset[disabled] .btn-success:hover, .btn-success.disabled:focus, .btn-success[disabled]:focus, fieldset[disabled] .btn-success:focus, .btn-success.disabled:active, .btn-success[disabled]:active, fieldset[disabled] .btn-success:active, .btn-success.disabled.active, .btn-success[disabled].active, fieldset[disabled] .btn-success.active {
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
        .btn-success .badge {
            color: #5cb85c;
            background-color: #fff;
        }
        .btn-info {
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da;
        }
        .btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info {
            color: #fff;
            background-color: #39b3d7;
            border-color: #269abc;
        }
        .btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info {
            background-image: none;
        }
        .btn-info.disabled, .btn-info[disabled], fieldset[disabled] .btn-info, .btn-info.disabled:hover, .btn-info[disabled]:hover, fieldset[disabled] .btn-info:hover, .btn-info.disabled:focus, .btn-info[disabled]:focus, fieldset[disabled] .btn-info:focus, .btn-info.disabled:active, .btn-info[disabled]:active, fieldset[disabled] .btn-info:active, .btn-info.disabled.active, .btn-info[disabled].active, fieldset[disabled] .btn-info.active {
            background-color: #5bc0de;
            border-color: #46b8da;
        }
        .btn-info .badge {
            color: #5bc0de;
            background-color: #fff;
        }
        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236;
        }
        .btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .open .dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #ed9c28;
            border-color: #d58512;
        }
        .btn-warning:active, .btn-warning.active, .open .dropdown-toggle.btn-warning {
            background-image: none;
        }
        .btn-warning.disabled, .btn-warning[disabled], fieldset[disabled] .btn-warning, .btn-warning.disabled:hover, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning:hover, .btn-warning.disabled:focus, .btn-warning[disabled]:focus, fieldset[disabled] .btn-warning:focus, .btn-warning.disabled:active, .btn-warning[disabled]:active, fieldset[disabled] .btn-warning:active, .btn-warning.disabled.active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning.active {
            background-color: #f0ad4e;
            border-color: #eea236;
        }
        .btn-warning .badge {
            color: #f0ad4e;
            background-color: #fff;
        }
        .btn-danger {
            color: #fff;
            background-color: #f86c6a;
            border-color: #f86c6a;
        }
        .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #d2322d;
            border-color: #d2322d;
        }
        .btn-danger:active, .btn-danger.active, .open .dropdown-toggle.btn-danger {
            background-image: none;
        }
        .btn-danger.disabled, .btn-danger[disabled], fieldset[disabled] .btn-danger, .btn-danger.disabled:hover, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger:hover, .btn-danger.disabled:focus, .btn-danger[disabled]:focus, fieldset[disabled] .btn-danger:focus, .btn-danger.disabled:active, .btn-danger[disabled]:active, fieldset[disabled] .btn-danger:active, .btn-danger.disabled.active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger.active {
            background-color: #d9534f;
            border-color: #d43f3a;
        }
        .btn-danger .badge {
            color: #d9534f;
            background-color: #fff;
        }
        .btn-link {
            font-weight: normal;
            color: #428bca;
            cursor: pointer;
            border-radius: 0;
        }
        .btn-link, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            -moz-box-shadow: none;
        }
        .btn-link, .btn-link:hover, .btn-link:focus, .btn-link:active {
            border-color: transparent;
        }
        .btn-link:hover, .btn-link:focus {
            color: #2a6496;
            text-decoration: underline;
            background-color: transparent;
        }
        .btn-link[disabled]:hover, fieldset[disabled] .btn-link:hover, .btn-link[disabled]:focus, fieldset[disabled] .btn-link:focus {
            color: #999;
            text-decoration: none;
        }
        .btn-lg, .btn-group-lg>.btn {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33;
            border-radius: 6px;
        }
        .btn-sm, .btn-group-sm>.btn {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }
        .btn-xs, .btn-group-xs>.btn {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }
        .btn-block {
            display: block;
            width: 100%;
            padding-right: 0;
            padding-left: 0;
        }
        .btn-block+.btn-block {
            margin-top: 5px;
        }
        .label {
            display: inline;
            padding: 5px 10px;
            font-size: 75%;
            font-weight: bold;
            line-height: 2;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 13px;
        }
        .statuslabel {
            line-height: 1.25;
        }
        .label, .label.label-default {
            background-color: #FFFFFF;
        }
        .label.label-inverse {
            background-color: #212121;
        }
        .label.label-primary {
            background-color: #9c27b0;
        }
        .label.label-success {
            background-color: #04ce6e;
        }
        .label.label-info {
            background-color: #00bcd4;
        }
        .label.label-warning {
            background-color: #ff9800;
        }
        .label.label-danger {
            background-color: #ff5360;
        }
        .label.label-rose {
            background-color: #e91e63;
        }
        table {
            background-color: transparent;
        }
        th {
            text-align: left;
        }
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
        }
        .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>th, .table>caption+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>td, .table>thead:first-child>tr:first-child>td {
            border-top: 0;
        }
        .table>tbody+tbody {
            border-top: 2px solid #dddddd;
        }
        .table .table {
            background-color: #ffffff;
        }
        .table-condensed>thead>tr>th, .table-condensed>tbody>tr>th, .table-condensed>tfoot>tr>th, .table-condensed>thead>tr>td, .table-condensed>tbody>tr>td, .table-condensed>tfoot>tr>td {
            padding: 5px;
        }
        .table-bordered {
            border: 1px solid #dddddd;
        }
        .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
            border: 1px solid #dddddd;
        }
        .table-bordered>thead>tr>th, .table-bordered>thead>tr>td {
            border-bottom-width: 2px;
        }
        .table>thead>tr>th {
            border-bottom-width: 1px;
            font-size: 15px;
            font-weight: 400;
        }
        .table-responsive {
            overflow-x: auto;
            min-height: 0.01%;
        }
        .table td {
            padding: 10px;
            font-size: 14px;
            font-weight: 400;
        }
        .table th {
            font-weight: 600;
        }
    </style>
    <style type="text/css">
        .heart {
            fill: white;
            width: 15px;
        }
        .highlight-word {
            color: #FF4500;
        }
        .regards {
            font-weight: 300;
            font-size: 13px;
        }
        .email-disclaimer {
            font-size: 14px;
            color: #b0b1b2;
        }
        textarea {
            font-size: 14px;
        }
        .textarea-error {
            border-color: #FF4500 !important;
            border-width: 2px;
        }
        .error {
            color : #FF4500;
        }
    </style>
</head>
<body class="email_body">
<header>
    <div id="title">
        @if(isset($bepunct->config_email_logo))
            <img src="{{ Storage::disk('image')->url($bepunct->config_email_logo) }}" width="200px">
        @else
            <img src="{{asset('/img/bepunct_logo.png')}}" width="200px" />
        @endif
    </div>
</header>
<content>
    @yield('content')
    <div class="last-content" style="max-width: 500px;margin:40px auto 50px auto;">
        <div style="text-align: center; margin-bottom: 30px">
            <span class="email-disclaimer">This is a system generated email, do not reply to this email</span>
            <span class="email-disclaimer">If you have any questions, please contact your administrator</span>
        </div>
    </div>
</content>
<footer>
    <div id="text" style="margin-top: 10px">
        <label> Powered By </label><br />
        <img src="{{asset('/img/bepunct_logo_white.png')}}" width="120px" /><br /><br />
        <label>Made with &#10084; by <a target="_blank" href="http://www.teratotech.com/">Terato Tech</a>
        </label>
    </div>

</footer>
</body>
</html>