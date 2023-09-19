<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>head</title>
</head>
<body>
  <span>▼▼▼head部分▼▼▼</span><br>
  <?php 
    print_r(dirname(__FILE__).'/');
    print_r(basename(__FILE__)) ;
  ?>
  <h1>最小構成でページ作成</h1>
    <ul>
      <li>
        <a href="/">
          TOP
        </a>
      </li>
      <li>
        <a href="/src/assignment.php">
          課題
        </a>
      </li>
      <li>
        <a href="/src/formTest.php">
          フォームテスト
        </a>
      </li>
    </ul>
  <span>▲▲▲head部分▲▲▲</span>
</body>