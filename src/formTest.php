<!DOCTYPE html>

<?php 
  print_r(dirname(__FILE__));
  include ( dirname(__FILE__) . '/template/head.php' ); 
?>

<body>
  <br>
  <span style="color: #ffffff; font-size: 8px">▼▼▼コンテンツ▼▼▼</span><br>
  <?php 
    print_r(dirname(__FILE__).'/');
    print_r(basename(__FILE__)) ;
  ?>
  <h1>フォームテストページ</h1>
  <p style="#ffffff"><?php print_r($_POST)  ?></p><br>
  
<form action="/src/formTest.php" method="post">
  <div>
   <label for="name">名前</label>
   <input type="text" name="name">
  </div>
  <div>
   <label for="email">メールアドレス</label>
   <input type="text" name="email">
  </div>
  <div>
   <label for="message">内容</label>
   <input type="text" name="message">
  </div>
  <input type="submit" value="送信する" style="cursor: pointer">
  </form>
  
</body>
</html>