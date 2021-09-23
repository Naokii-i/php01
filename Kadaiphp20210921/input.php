<html>

<head>
    <meta charset="utf-8">
    <title>チームの何でも目安箱</title>
    <style>
        .title{
        margin-left:5px
        }
        
        .pic {
            margin: auto;
        }

        .nameinput{
          margin-left:5px;
        }

        .box {
        margin-top: 20px;
        margin-bottom: 20px;
        text-align: center:
        }

        .go{
         margin-left: 100px
        }
    </style>
</head>

<body>
 
 <h2 class="title">チームの何でも目安箱</h2>
 <img class="pic" src="https://2.bp.blogspot.com/-QxWzAqiBUxs/U7O8Nap6DNI/AAAAAAAAibw/BtFHk4lcxts/s400/post_chirashi.png">
 <p>チームの活動で気になることや、前向きなこと、すこしモヤモヤすることがあればいつでも投稿してください</p>
  <form action="write.php" method="post">
       <div class="nameinput">
       名前（任意）:<input type="text" name="name"><br>
       </div>
       タイトル:<input type="text" name="title"><br>
        <div class="box">
       提言:<input class="box" type="text" name="comment" style="width: 200px; height: 100px;">
        <!-- チェックボックスで選択肢を送りたかった -->
       <!-- 　<h6>お名前を出してもよいですか？</h6>
       <input type="checkbox" name="answer" value="No"> 名前出さない
       <input type="checkbox" name="answer" value="Yes"> 名前出す　 -->
       </div>
       <div class="go">
       <input type="submit" value="送信">
       </div>
 </form>
 </div>
</body>

</html>