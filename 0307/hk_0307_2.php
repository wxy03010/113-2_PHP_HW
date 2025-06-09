<html>

<head>
<meta charset="utf-8">
<title>NUKIM迎新表單</title>
</head>

<body>
    <font color="#AA4477"><i>NUKIM</i></font>
        <center>
        <font size="6" color="#335566">高大資管迎新活動</font>
        </center>
        <HR width="100%" color="#7799CC">
    <h3>NUKIM迎新表單填寫資料</h3>

<?php
$uName=$_GET["uName"];
$uSid=$_GET["uSid"];
$uGender=$_GET["uGender"];
$uEmail=$_GET["uEmail"];
$uWill=$_GET["uWill"];

echo "姓名：".$uName."<br>";
echo "學號：".$uSid."<br>";
echo "性別：".$uGender."<br>";
echo "Email：".$uEmail."<br>";
echo "參加意願：".$uWill."<br>";

?>

</body>

</html>