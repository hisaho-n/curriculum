<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$portNo = ['80','22','20','21'];
$langage = ['PHP','Python','JAVA','HTML'];
$command = ['join','select','insert','update'];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$resultPortNo = '80';
$resultLangage = 'HTML';
$resultcommand = 'select';
/* function getAnswer($array)
{
    foreach ($array as $answer){
        print $answer;
      }
} */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/3_4.css">
</head>
<body>
<div class="main">
<form action="answer.php" method="post">
    <div class="header">
    <p>お疲れ様です<?php echo $name; ?>さん</p></div>
    <!--フォームの作成 通信はPOST通信で-->
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($portNo as $answer){?>
        <input type="radio" name="portNo" value="<?php echo $answer; ?>">
        <?php echo $answer; ?>
     <?php }?>
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($langage as $answer){?>
        <input type="radio" name="langage" value="<?php echo $answer; ?>">
        <?php echo $answer; ?>
     <?php }?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($command as $answer){?>
        <input type="radio" name="command" value="<?php echo $answer; ?>">
        <?php echo $answer; ?>
     <?php }?>

    <!-- 問題の正解の変数と名前の変数を[answer.php]に送る -->
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="resultPortNo" value="<?php echo $resultPortNo; ?>">
    <input type="hidden" name="resultLangage" value="<?php echo $resultLangage ; ?>">
    <input type="hidden" name="resultcommand" value="<?php echo $resultcommand; ?>">
    <p><input type="submit" value="回答する"></p>

</form>
</div>
</body>
</html>