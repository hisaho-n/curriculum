<?php
$numbers = $_POST['numbers'];
$today = date("Y/m/d");
$chousenNumber = getNumber($numbers);
$kekka = getKekka($chousenNumber);

function getNumber(string $n): string
{
  $length = strlen($n);
  $randam_number = mt_rand(0, $length - 1);
  $n = substr($n, $randam_number, 1);
  return $n;
}

function getKekka(string $n)
{
  switch ($n) {
    case "0":
      return "凶";
      break;
    case "1":
    case "2":
    case "3":
      return "小吉";
      break;
    case "4":
    case "5":
    case "6":
      return "中吉";
      break;
    case "7":
    case "8":
      return "吉";
      break;
    case "9":
      return "大吉";
      break;

    default:
      return "半角数字の羅列を入力して下さい。";
  }
}
?>

<p><?php echo $today; ?>の運勢は</p>
<p>選ばれた数字は<?php echo $chousenNumber; ?></p>
<p><?php echo $kekka; ?></p>