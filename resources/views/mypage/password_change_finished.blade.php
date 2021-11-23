<!-- パスワード変更完了ページ -->

<!-- layout.blade.php読み込み -->
@extends('layouts.layout')

<!-- ページタイトル -->
@section('title','パスワード変更完了 ｜ 幼児無料プリントサイト ぷちはぐ')

@section('content')

<div id="contents">

    <section class="box1">

        <h1 class="contCaption">MY DATA UPDATE</h1>
        <h2 class="contSubCaption">パスワードの変更完了</h2>
        <div class="message-user-kaiin">
            <p>パスワードの変更が完了いたしました。 <br> ご登録いただきましたメールアドレス宛に変更完了メールを送信させていただいております。
            </p>
            <p>※10分ほど経過してもメールが届かない場合、以下の可能性があります。</p>
            <ul>
                <li>*迷惑メールなどの受信設定をされている</li>
                <li>*メールサーバーが混み合っている </li>
                <li>*登録されたメールアドレスに間違いがある</li>
            </ul>
        </div>

        <div class="sectionInner2">
            <div class="tourokujouhou">
                <div class="container">
                    <a href="{{ route('showMypage') }}" class="reset-submit">マイページへ</a><br>
                </div>
            </div>
        </div>

    </section>

</div><!--/#contents-->
@endsection