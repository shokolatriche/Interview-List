<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>インタビュー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Interview Records</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">   
  <div class="jumbotron">
   <fieldset>
    <legend>Interview List</legend>
     <label>Name：<input type="text" name="name"></label><br>
     <label>email：<input type="text" name="email"></label><br>
     <label>Interviewer：<input type="text" name="i_name"></label><br>
     <label>Interviewer Comment：<br><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <!-- <label>Pass/Fail：<input type="text" name="flag"></label><br> -->
    <input type="checkbox" name="flag" value="合格" >合格</a>
    <input type="checkbox" name="flag" value="不合格" >不合格</a><br>
    <input type="submit" value="Submit">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
