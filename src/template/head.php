<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>head</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
  <br>
  <span style="color: #ffffff; font-size: 8px; z-index: 100">▼▼▼head部分▼▼▼</span><br>
  <div class="background-image" style="z-index: -100">
  <p style="color: #ffffff; margin-left: 300px; font-size: 8px"><?php 
    print_r(dirname(__FILE__).'/');
    print_r(basename(__FILE__)) ;
    ?></p>
  <h1 style="z-index: 100; font-size: 3em">最小構成でページ作成</h1>
    <ul style="test-align:center; text-decoration: none; margin-left: 450px">
      <li>
        <a href="/" style="color: pink; font-weight: bold; font-size: 3em">
          TOP
        </a>
      </li>
      <li>
        <a href="/src/assignment.php" style="color: pink; font-weight: bold; font-size: 3em">
          課題
        </a>
      </li>
      <li>
        <a href="/src/formTest.php" style="color: pink; font-weight: bold; font-size: 3em">
          フォームテスト
        </a>
      </li>
    </ul>
  </div>
  <span style="color: #ffffff; font-size: 8px">▲▲▲head部分▲▲▲</span>
</body>