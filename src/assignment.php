<?php
  include ( dirname(__FILE__) . '/template/head.php' );
?>

<body>
  <br>
  <span style="margin: 0 auto; color: #ffffff; font-size: 8px">▼▼▼コンテンツ▼▼▼</span><br>
  <?php 
    print_r(dirname(__FILE__).'/');
    print_r(basename(__FILE__)) ;
  ?>

  <hr>
  <h3 class="flowing">
      すべての課題を実施する必要はありません<br>
      何ができて、何がわからないのか。不明な点があれば、<br>
      en転職のメッセージからご連絡ください。<br>
  </h3>
  <hr>

  <h1>課題①</h1>
  <h3 class="flowing">
    下記の html form から form.php へ post 送信した際<br>
    php 側で『メールアドレス』の取得の記述をお答えください<br>
    <a class="link" href="/src/formTest.php" style="color: #ffffff; font-weight: bolder">参考ページ</a>
  </h3>
  <span style="color: ffffff">
    課題の提出方法は問いません。<br>
    ご自身で適切だと思われる方法で課題に対してご回答いただければと思います。<br>
  </span>
  <span style="color: #ffffff">～～～～～～</span>

  <p style="color: #ffffff">
  <br>
  <?php echo htmlspecialchars("<html>") . "\n" ; ?><br>
  <?php echo htmlspecialchars(' <form action="/form.php" method="post">'); ?><br>
  <?php echo "&nbsp". htmlspecialchars('        <div>'); ?><br>
  <?php echo "&nbsp&nbsp".htmlspecialchars('            <label for="name">名前</label>'); ?><br>
  <?php echo "&nbsp&nbsp".htmlspecialchars('            <input type="text" name="name">'); ?><br>
  <?php echo "&nbsp".htmlspecialchars('        </div>'); ?><br>
  <?php echo "&nbsp".htmlspecialchars('        <div>'); ?><br>
  <?php echo "&nbsp&nbsp".htmlspecialchars('            <label for="email">メールアドレス</label>'); ?><br>
  <?php echo "&nbsp&nbsp".htmlspecialchars('            <input type="text" name="email">'); ?><br>
  <?php echo "&nbsp".htmlspecialchars('        </div>'); ?><br>
  <?php echo "&nbsp".htmlspecialchars('        <div>'); ?><br>
  <?php echo "&nbsp&nbsp".htmlspecialchars('            <label for="message">内容</label>'); ?><br>
  <?php echo "&nbsp&nbsp".htmlspecialchars('            <input type="text" name="message">'); ?><br>
  <?php echo "&nbsp".htmlspecialchars('        </div>'); ?><br>
  <?php echo "&nbsp".htmlspecialchars('        <p><input type="submit" value="送信する"></p>'); ?><br>
  <?php echo "&nbsp".htmlspecialchars('    </form>'); ?><br>
  <?php echo htmlspecialchars('</html>'); ?><br>
  </p>

  <hr>
  <h1>課題②</h1>
  <h3 class="flowing">Glitchで本プロジェクトをRemixして、Webページを"リッチ"にしてください。</h3><br>
  <span style="color: #ffffff">
    ①Glitchアカウントを作成<br>
    ②本ページのプロジェクトを開きReMixする<br>
    ③画像を追加したりCSSを変更し、"リッチ"に仕上げる<br>
    ※Glitchの情報はWebに無数にあります。<br>
      実際の仕事でも、ネットで調べながら業務を行っていくため、<br>
      <b>"調べてカタチにすることができる"</b>という能力が超重要です。<br>
  </span>
    <a href="https://glitch.com/edit/#!/coexe-assiginment">本ページのGlitchプロジェクト</a>
  <hr>

  <h1>課題③</h1>
  <h3 class="flowing">Glitchであなたの作りたいWebページを作成してください。
    
  </h3>
  <h4 style="color: #ffffff">
    要件1：ユーザーの入力フォームを持つ(DBの書き込みは不要です)<br>
    要件2：画像を３枚以上使用<br>
    要件3：ページを4以上用意<br>
  </h4>
  <span>
    要件３について<br>
    TOP,プロフィール,ブログ,ギャラリーなどの4ぺ－ジ<br>
    例に上げたページでなくても構いません。
    作りたいものを作ってください。
  </span>
  <br>
  <span style="color: #ffffff; font-size: 8px">▲▲▲コンテンツ▲▲▲</span><br>
</body>
</html>