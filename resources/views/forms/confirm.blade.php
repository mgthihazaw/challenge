@extends('app')

@section('title') {{ $title }}│{{ config('app.name') }} @endsection


@section('content')
<div class="content">

    <!-- main -->
    <div class="main">
        <div class="h1ttl">
        <h1>{{ $title }}</h1>
        </div><!-- h1ttl -->

        <div class="mainbox">
        <form method="post" action="{{ route('entry.complete') }}">
                @csrf
        <input type="hidden" name="subject" value="{{ $data->subject->name }}">
                <input type="hidden" name="opinion" value="{{ $data->opinion }}">
                <input type="hidden" name="company" value="{{ $data->company }}">
                <input type="hidden" name="section" value="{{ $data->section }}">
                <input type="hidden" name="name" value="{{ $data->name }}">
                <input type="hidden" name="ruby" value="{{ $data->ruby }}">
                <input type="hidden" name="tel" value="{{ $data->tel }}">
                <input type="hidden" name="mailaddress" value="{{ $data->mailaddress }}">
                <div class="entry_detail">
                    <div id="form_inq">
                        <div class="h2ttl">
                            <h2>お問い合わせ項目</h2>
                        </div>
                        <div class="table_area">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>お問い合わせ内容</th>
                                        <td>
                                            {{ $data->subject->description }}{{-- i-giftについて --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>内容<br>(できるだけ具体的に<br>お書き下さい)</th>
                                        <td>
                                            {{ $data->opinion }}{{-- 高山のテスト --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--  #form_inq-->

                    <div id="form_info">
                        <div class="h2ttl">
                            <h2>お客さまの情報</h2>
                        </div>
                        <div class="table_area">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>会社名 / 団体名<br></th>
                                        <td>
                                            {{ $data->company }} {{-- 高山潤 --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>部署名</th>
                                        <td>
                                            {{ $data->section }} {{-- マンダレー支社 --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>お名前</th>
                                        <td>
                                            {{ $data->name }} {{-- 高山　潤 --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ふりがな</th>
                                        <td>
                                            {{ $data->ruby }}{{-- たかやまじゅん --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>
                                            {{ $data->tel }} {{-- 08012345678 --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <td>
                                            {{ $data->mailaddress }} {{-- test@scala-next.com --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- #form_info -->

                    <div class="btn_area">
                    <a href="#" id="back" onclick="goBack()"><input type="button" value="戻る" class="btn btn_back"></a>
                        <input type="submit" value="送　信" class="btn btn_entry">
                    </div>

                </div>
                <!-- /.entry_detail -->
            </form>

        </div><!-- /.mainbox -->

    </div>
    <!-- /main -->

</div>
@endsection

@push('scripts')
<script>
    function goBack() {
       window.history.back();
    }
</script>
@endpush

