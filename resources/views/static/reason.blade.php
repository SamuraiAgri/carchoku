<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1075">
  <meta name="description" content="【公式】中古車を売り続けて40年。お得な中古車を格安販売中！1万台以上の販売実績！">
  <meta name="csrf-token" content="s3AkNgvjhvI4X3WkToYJazRMdETB2ADgdQ7kDACh">
  <link rel="stylesheet" href="{{ asset('css/top.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/common/header.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/common/footer.css') }}" >
  <link rel="stylesheet" href="{{ asset('css/common/left.css') }}" >
  <title>【カーチョク】お得な中古車を格安販売中！</title>
  <meta name="theme-color" content="#006934">
</head>
<body>
@include('common.header')
<div class="wrapper">
  <article class="clearfix">
  @include('common.left')
  <section class="main">
  </section><!-- /.main -->
  </article>
  <p class="pagetop"><a href="#top">Page top</a></p>
<div class="os-contact-wrap">
  <div class="os-contact">
    <div class="os-contact_row">
      <div class="os-contact_box">
        <p class="os-contact_box-hd">お電話のお問い合わせ</p>
        <p class="os-contact_box-num" x-ms-format-detection="none">000-0000-0000</p>
      </div>
      <div class="os-contact_box os-contact_box--rightmost">
        <p class="os-contact_box-hd">FAXのお問い合わせ</p>
        <p class="os-contact_box-num" x-ms-format-detection="none">000-0000-0000</p>
      </div>
            <p class="os-contact_mail"><a href="/mailform/inquiry/input" class="opacity">メールのお問い合わせ</a></p>
          </div><!-- /.os-contact_row -->
  </div><!-- /.os-contact -->
</div><!-- /.os-contact-wrap -->
@include('common.footer')

</div><!-- /.wrapper -->
</body>
</html>