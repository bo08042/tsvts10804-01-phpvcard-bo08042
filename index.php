<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="plugins/css/bootstrap.css" />
  <style>
    body{
      font-family: 'Heebo','微軟正黑體', sans-serif;
      background: url('theme/image/bg01.jpg');
      overflow: hidden;
    }
    .main {
      margin: 1.5% auto;
      text-align: center;
      width: 450px;
    }
    .data {
      background: #fff;
      text-align: left;
      padding: 10px 20px;
      border: rgba(108, 117, 125, 0.5) 2px solid;
      border-radius: 0.375rem;
    }
    h1{
      color: rgba(108, 117, 125);
    }
    .footer{
      text-align: center;
      font-size: 16px;
      background: rgba(255, 255, 255, 0.35);
    }
  </style>
</head>

<body>
  <div class="main">
    <h1>vCard產生器</h1>
    <form action="api.php" method="post" enctype="multipart/form-data">
      <div class="data">
        <div class="form-group">
          <label for="formGroupExampleInput">你的名字</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="user" value="菜鳥新手">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">職位名稱</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="title" value="網頁設計師">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">技能說明</label>
          <textarea name="skill" class="form-control" id="exampleFormControlTextarea1" rows="3">HTML/CSS網頁概念基礎, PHP/MySQL資料處理, JS/JQ前端網頁設計, AI/PS平面影像處理</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input name="mail" type="email" class="form-control" id="exampleFormControlInput1" value="helloworld@gmail.com">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">手機號碼</label>
          <input type="text" name="phone" class="form-control" id="formGroupExampleInput2" name="title" value="0912-345-678">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">人像照片</label>
          <input type="file" name="who">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">版型選擇</label>
          <select name="layout" class="form-control" id="exampleFormControlSelect1">
          <option value="bg1" selected>寶石傳奇</option>
          <option value="bg2">少女時代</option>
          <option value="bg3">流金歲月</option>
          <option value="bg4">烈火如歌</option>
          </select>
        </div>
        <div class="text-center">
          <input class="btn btn-outline-secondary" type="submit" value="送出預覽">
        </div>
      </div>
    </form>
  </div>
  <div class="footer">
    Copyright ©2020 Bobo 
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="plugins/js/jquery-3.4.1.min.js"></script>
  <script src="plugins/js/popper.min.js"></script>
  <script src="plugins/js/bootstrap.min.js"></script>
</body>

</html>