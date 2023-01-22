<!DOCTYPE html>
 <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>

    <?php

    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt=$pdo->query("select * from 4each_keijiban");

    ?>

    <img src="4eachblog_logo.jpg"/>
    <header>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
    <main>
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            <div class="handlename">
                <label>ハンドルネーム</label><br>
                <input type="text" name="handlename" size="35">
            </div>
            <div class="title">
                <label>タイトル</label><br>
                <input type="text" name="title" size="35">
            </div>
            <div class="comments">
                <label>コメント</label><br>
                <textarea rows="6" cols="50" name="comments"></textarea>
            </div>
            <div>
                <input type="submit"  class="button" value="投稿する">
            </div>
        </form>

        <?php
        
        while($row=$stmt->fetch()){

        echo "<div class='toko_1'>";
          echo "<h2>".$row['title']."</h2>";
          echo "<div class='kiji_1'>";
          echo $row['comments'];
          echo "</div>";
          echo "<div class='tokosya_1'>posted by".$row['handlename']."</div>";
          echo "</div>";
        }

        ?>

    </div>
    <div class="right">
        <h2>人気の記事</h2>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>いま人気のエディタTop5</li>
          <li>HTMLの基礎</li>
        </ul>
        <h2>オススメリンク</h2>
        <ul>
          <li>インターノウス株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Braketsのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>
    </div>
    </main>
  </body>

  <div class="clear"></div>

  <footer>
    copyright internous | 4each blog is the one which provids A to Z about programing.
  </footer>
</html>
