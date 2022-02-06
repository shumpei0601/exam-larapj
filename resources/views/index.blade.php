<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <script>
     function toHalfWidth(elm) {
    elm.value = elm.value.replace(/[Ａ-Ｚａ-ｚ０-９！-～]/g, function(s){
        return String.fromCharCode(s.charCodeAt(0)-0xFEE0);
    });
}
  </script>
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
     table.tr{
       margin: 30px 0;
     }
     .red{
        color: red;
     }
     .lastname-input, .firstname-input, .email-input, .p-region , .p-postal-code, .building_name-input, .opinion-input{
        width: 90%;
     }
     .gray{
        color: #d3d3d3;
        font-size: 12px;
     }
     .confirm-btn{
        background-color: black;
        padding: 5px 30px;
        color: white;
     }
     .confirm-container{
        width: 10%;
        margin: 0 auto;
     }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="ttl">お問い合わせ</p>

      <form action="/contact/confirm" method="post" class="h-adr">
        @csrf
        <table>
           <tr>
              <th>
                 お名前<span class="red">※</span></th>
              <td>
                 <input type="text" name="fullname" class="lastname-input" />
              </td>
           </tr>
           <tr>
              <th></th>
              <td class="gray">例）山田 太郎</td>
           </tr>
           <tr>
              <th></th>
              <td>
                 @if( $errors->has('fullname'))
                 @foreach ($errors->get('fullname') as $error)
                 {{ $error }}
                 @endforeach
                 @endif
               </td>
               <td>
                  @if( $errors->has('fullname'))
                  @foreach ($errors->get('fullname') as $error)
                  {{ $error }}
                  @endforeach
                  @endif
               </td>
           </tr>
           <tr>
              <th>
                 性別<span class="red">※</span>
              </th>
              <td>
                 <input type="radio" name="gender" value="男性" class="gender-input" checked />
                 <span class="male">男性</span>
                 <input type="radio" name="gender" value="女性" class="gender-input" />
                 <span>女性</span>
              </td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td></td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td>
                 @if( $errors->has('gender'))
                 @foreach ($errors->get('gender') as $error)
                 {{ $error }}
                 @endforeach
                 @endif
              </td>
              <td></td>
           </tr>
           <tr>
              <th>
                 メールアドレス<span class="red">※</span>
              </th>
              <td>
                 <input type="email" name="email"  class="email-input" />
              </td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td class="gray">例）test@example.com</td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td>
                 @if( $errors->has('email'))
                 @foreach ($errors->get('email') as $error)
                 {{ $error }}
                 @endforeach
                 @endif
              </td>
              <td></td>
           </tr>
           <tr>
              <th>
                 <span class="p-country-name" style="display:none;">Japan</span>
                 郵便番号<span class="red">※</span>
              </th>
              <td class="post">
                 〒<input type="text" name="postcode" class="p-postal-code" onblur="toHalfWidth(this)" />
              </td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td class="gray">例）123-4567</td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td>
                 @if( $errors->has('postcode'))
                 @foreach ($errors->get('postcode') as $error)
                 {{ $error }}
                 @endforeach
                 @endif
              </td>
              <td></td>
           </tr>
           <tr>
              <th>
                 住所<span class="red">※</span>
               </th>
               <td>
                  <input type="text" name="address" class="p-region p-locality p-street-address p-extended-address" />
               </td>
               <td></td>
           </tr>
           <tr>
              <th></th>
              <td class="gray">例）東京都渋谷区千駄ヶ谷1-2-3</td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td>
                 @if( $errors->has('address'))
                 @foreach ($errors->get('address') as $error)
                 {{ $error }}
                 @endforeach
                 @endif
              </td>
              <td></td>
           </tr>
           <tr>
              <th>
                 建物名
              </th>
              <td>
                 <input type="text" name="building_name" class="building_name-input" />
              </td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td class="gray">例）千駄ヶ谷マンション101</td>
              <td></td>
           </tr>
           <tr>
              <th>
                 ご意見<span class="red">※</span>
              </th>
              <td>
                 <input type="text" name="opinion" class="opinion-input" />
              </td>
              <td></td>
           </tr>
           <tr>
              <th></th>
              <td>
                 @if( $errors->has('opinion'))
                 @foreach ($errors->get('opinion') as $error)
                 {{ $error }}
                 @endforeach
                 @endif
              </td>
           </tr>
        </table>
        <div class="confirm-container">
          <input type="submit" value="確認" class="confirm-btn">
        </div>
      </form>
    </div>
  </div>
</body>
</html>