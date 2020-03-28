@extends('app')

@section('title') {{ $title }}│{{ config('app.name') }} @endsection

@section('content')
<div class="content finish">
    <!-- main -->
    <div class="main">
        <div class="h1ttl">
        <h1>{{ $title }}</h1>
        </div>
        <div class="mainbox">

            <div class="outline_box">
                <h3>お問い合わせありがとうございました。</h3>
                <p>担当者より追ってご連絡をさせていただきます。</p>
                <p>
                    なお、お問い合わせの内容によっては回答できない場合もございます。<br>
                    予めご了承ください。
                </p>
            </div>

        </div><!-- /.mainbox -->
    </div>
    <!-- /.main -->
</div>
@endsection