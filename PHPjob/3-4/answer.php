<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$portNo = $_POST['portNo'];
$langage = $_POST['langage'];
$command = $_POST['command'];
$resultPortNo = $_POST['resultPortNo'];
$resultLangage = $_POST['resultLangage'];
$resultcommand = $_POST['resultcommand'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
    function judge($answer, $collect){
        if($answer == $collect){
            echo "正解！";
        }else{
            echo "残念・・・";
        }
    }
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
<div class="header">
<p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p></div>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judge($portNo,$resultPortNo); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judge($Langage,$resultLangage); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judge($command,$resultcommand); ?>
</div>
</body>
</html>