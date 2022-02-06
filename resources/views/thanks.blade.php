<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    
  </style>
</head>
<body>
  <input type="hidden" name="fullname" value="{{ $reminds['fullname'] }}" />
  <input type="hidden" name="fullname" value="{{ $reminds['fullname'] }}" />
  <input type="hidden" name="gender" value="{{ $reminds['gender'] }}" />
  <input type="hidden" name="email" value="{{ $reminds['email'] }}" />
  <input type="hidden" name="postcode" value="{{ $reminds['postcode'] }}" />
  <input type="hidden" name="address" value="{{ $reminds['address'] }}" />
  
  <input type="hidden" name="opinion" value="{{ $reminds['opinion'] }}" />
  <div class="container">
    <p class="thanks-opinion">ご意見いただきありがとうございました。</p>
    <button class="top-btn">トップページへ</button>
  </div>
</body>
</html>