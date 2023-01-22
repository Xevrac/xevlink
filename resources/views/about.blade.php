@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
<br><br>

<div class='about-contents'>
        <dl>
        <p>Build Information</p>
        <dt>Version: {{env('POLR_VERSION')}}</dt>
        <dt>Release date: {{env('POLR_RELDATE')}}</dt>
        <dt>Instance: {{env('APP_NAME')}} installed on {{env('POLR_GENERATED_AT')}}<dt>
    </dl>    

    <p>{{env('APP_NAME')}} is powered by Polr 2, an open source, minimalist link shortening platform. Polr is not associated with Xevlink; in addition Xevlink is a modified, technically updated version of Polr 2 that is fully upgraded with modern compatibility for the latest benefits of Laravel, PHP , and dependencies.</p>
<p>Discover more of my projects from <a href="https://docs.xevrac.com">Docs</a>.</p><br>
    <dt>Credit: <a href="https://github.com/cydrobolt/polr">Polr</a> Github page. Polr is licensed under the GNU GPL License.</dt>

</div>

</div>

@endsection

