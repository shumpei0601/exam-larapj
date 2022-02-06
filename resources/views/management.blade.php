<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .form{
      border: 1px solid;
      width: 80%;
      margin: 0 auto;
      padding: 15px;
    }
    .ta1{
      
      width: 100%;
      margin: 0 auto;
    }
    .ta1 th{
      text-align: left;
      white-space: nowrap;
    }
    .ta2{
      width: 80%;
      margin: 0 auto;
      white-space: nowrap;
      border-collapse: collapse;
    }
    .submit{
      text-align: center;
    }
    .system-index-btn{
      background-color: black;
      color: white;
      padding: 3px 20px;
    }
    .delete-btn{
      background-color: black;
      color: white;
      padding: 3px 20px;
    }
    .ta2 tr th{
      text-align: left;
    }
    .tr2{
      border-bottom: 1px solid;
    }
    svg.w-5.h-5 {
    width: 30px;
    height: 30px;
    }
    .mask{
      -webkit-transition:	all 0.2s ease;
    	transition:		all 0.2s ease;
      opacity:		0;
    }
    .mask:hover {
   	opacity:		1;	/* マスクを表示する */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="system">
      <p class="system-ttl">管理システム</p>
      <div class="form">
        <form action="/management/search" method="get" class="system-form">
          @csrf
        <table class="ta1">
          <tr>
            <th>名前</th>
            <td class="name-td">
              <input type="search" name="fullname" class="system-name-input" placeholder="例）山田 太郎" />
            </td>
            <th class="gender-th">
              性別
              <input type="radio" name="gender" class="system-gender-input" checked />全て
              <input type="radio" name="gender" class="system-gender-input" value="男性" />男性
              <input type="radio" name="gender" class="system-gender-input" value="女性"/>女性
            </th>
          </tr>
          <tr>
            <th>登録日</th>
            <td>
              <input type="date" name="created_at" class="system-date-input" />
            </td>
            <td>
              
            </td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>
              <input type="search" name="email" class="system-email-input" placeholder="例）sample@example.com" />
            </td>
          </tr>
        </table>
        <div class="submit">
          <input type="submit" class="system-index-btn" value="検索" /><br>
          <input type="reset" class="system-reset-btn" value="リセット" />
        </div>
        </form>
      </div>
      <div claas="data">
        @if (@isset($items))
        <table class="ta2">
          <tr class="tr2">
            <th>ID</th>
            <th>お名前</th>
            <th></th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
          </tr>
          @foreach ($items as $item)
          <tr>
            <td hidden>{{ $item->created_at->format('Y/m/d') }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->fullname }}</td>
            <td>{{ $item->gender }}</td>
            <td>{{ $item->email }}</td>
            <td class="mask">{{ \Illuminate\Support\Str::limit($item->opinion, '50') }}</td>
            <td>
              <form action="{{ route('management.delete', ['id' => $item->id]) }}" method="post" class="delete-form">
              @csrf
              <button class="delete-btn">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
        @endif
      </div>
    </div>
  </div>
  
</body>
</html>