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
                                            i-giftについて
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>内容<br>(できるだけ具体的に<br>お書き下さい)</th>
                                        <td>
                                            高山のテスト
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
                                            高山潤
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>部署名</th>
                                        <td>
                                            マンダレー支社
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>お名前</th>
                                        <td>
                                            高山　潤
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ふりがな</th>
                                        <td>
                                            たかやまじゅん
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>
                                            08012345678
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <td>
                                            test@scala-next.com
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- #form_info -->

                    <div class="btn_area">
                        <a href="./EntryForm.html"><input type="button" value="戻る" class="btn btn_back"></a>
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