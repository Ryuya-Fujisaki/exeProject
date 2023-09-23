<!DOCTYPE html>
<?php 

include ( dirname(__FILE__) . '/src/template/head.php' ); ?>

<body>
  <br>
  <span style="color: #ffffff; font-size: 8px" >▼▼▼コンテンツ▼▼▼</span><br>
  <div class="img-stretch" style="background-image: url('./src/images/technology.jpeg'); height: 700px">
  <p style="color: #ffffff; margin-left: 300px; font-size: 8px"><?php 
    print_r(dirname(__FILE__).'/');
    print_r(basename(__FILE__)) ;
  ?></P>
  <h1 style="margin: 10px auto 30px; padding-top: 30px">TOP</h1>
    <div style="display: flex; justify-content: space-around; margin-left: 50px">
    <img 
      style="box-shadow: 20px 20px 0 #325e2b; border-radius: 4px" 
      src="https://cdn.glitch.global/164df007-47c4-4e83-8e2a-1d1fc15a909b/three.png?v=1694705503538" 
    ></img>
    <br>
    <img 
      style="box-shadow: 20px 20px 0 #223377; ; border-radius: 4px" 
      src="https://cdn.glitch.global/164df007-47c4-4e83-8e2a-1d1fc15a909b/Park.png?v=1694519326555" 
    ></img><br>
    </div>
  </div>
  <span style="position: relative; top: 10px; color: #ffffff; font-size: 8px">▲▲▲コンテンツ▲▲▲</span><br>
</body>
</html>