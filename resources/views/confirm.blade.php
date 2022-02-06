<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .ttl{
        width: 10%;
        margin: 0 auto;
        white-space: nowrap;
        font-weight: bold;
     }
     table{
        width: 100%;
        border-spacing: 30px 10px;
     }
     th{
        text-align: left;
        width: 10%;
        white-space: nowrap;
     }
     .submit-btn{
        background-color: black;
        padding: 5px 30px;
        color: white;
     }
     .submit-container{
        width: 10%;
        margin: 0 auto;
        white-space: nowrap;
     }
     .fix-btn{
       background-color: black;
        padding: 5px 30px;
        color: white;
     }
     .fix-container{
       width: 10%;
        margin: 0 auto;
        white-space: nowrap;
     }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="ttl">内容確認</p>
      <form action="/contact/thanks" method="post" class="confirm-form">
        @csrf
        <table>
          <tr>
            <th>お名前</th>
            <td>
              {{ $reminds['fullname'] }}
              <input type="hidden" name="fullname" value="{{ $reminds['fullname'] }}" />
              <input type="hidden" name="fullname" value="{{ $reminds['fullname'] }}" />
            </td>
            <td></td>
          </tr>
          <tr>
            <th>性別</th>
            <td>
              {{ $reminds['gender'] }}
              <input type="hidden" name="gender" value="{{ $reminds['gender'] }}" />
            </td>
            <td></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>
              {{ $reminds['email'] }}
              <input type="hidden" name="email" value="{{ $reminds['email'] }}" />
            </td>
            <td></td>
          </tr>
          <tr>
            <th>郵便番号</th>
            <td>
              〒{{ $reminds['postcode'] }}
              <input type="hidden" name="postcode" value="{{ $reminds['postcode'] }}" />
            </td>
            <td></td>
          </tr>
          <tr>
            <th>住所</th>
            <td>
              {{ $reminds['address'] }}
              <input type="hidden" name="address" value="{{ $reminds['address'] }}" />
            </td>
            <td></td>
          </tr>
          <tr>
            <th>建物名</th>
            <td>
              {{ $reminds['building_name'] }}
            </td>
            <td></td>
          </tr>
          <tr>
            <th>ご意見</th>
            <td>
              {{ $reminds['opinion'] }}
              <input type="hidden" name="opinion" value="{{ $reminds['opinion'] }}" />
            </td>
            <td></td>
          </tr>
        </table>
        <div class="submit-container">
          <button name="action" type="submit" value="submit" class="submit-btn">送信</button>
        </div>
        <div class="fix-container">
          <button name="action" type="button" onclick="history.back()" value="return" class="fix-btn">修正</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>