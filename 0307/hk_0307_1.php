<html>

    <head>
        <meta charset="utf-8"> <!--字元編碼(繁體中文)-->
        <title>NUKIM活動行程報名表</title>
    </head>

    <body>
        <font color="#AA4477"><i>NUKIM</i></font>
        <center>
        <font size="6" color="#335566">高大資管迎新活動</font>
        </center>
        <HR width="100%" color="#7799CC">

        <h3>活動行程</h3>
        <ul>
            <li>活動時間：114年9月6日
            <li>集合地點：高雄大學管理學院
            <li>活動內容：校園巡禮、烤肉大會
            <li>活動費用：200元(有繳系學會費者免費)
        </ul>
        
            <font size="3" color="#AA4477">
            <table border="1" width="60%">
                <tr><td><center>時間</center></td><td><center>活動內容</center></td><td><center>地點</center></td></tr>
                <tr><td><center>15:30-16:00</center></td><td><center>集合</center></td><td><center>高大管院</center></td></tr>
                <tr><td><center>16:00-17:00</center></td><td><center>校園巡禮</center></td><td><center>高大校園</center></td></tr>
                <tr><td><center>17:00-19:00</center></td><td><center>烤肉大會</center></td><td><center>烤肉場</center></td></tr>
                <tr><td><center>19:00-</center></td><td><center>賦歸</center></td><td><center>學生宿舍</center></td></tr>
            </table>
            </font>
        


        <br>
        <h3>活動報名表單</h3>
        <p>
        填寫表單<br>
    <?php
        echo "<form action='hk_0307_2.php' method='GET'>";
        echo "姓名：<input type='text' name='uName' required><br>";
        echo "學號：<input type='text' name='uSid' required><br>";

        echo "性別：";
        echo "男<input type='radio' name='uGender' value='男'>";
        echo "女<input type='radio' name='uGender' value='女'><br>";

        echo "Email：<input type='email' name='uEmail' required><br>";

        echo "參加意願：";
        echo "很感興趣<input type='radio' name='uWill' value='很感興趣'>";
        echo "沒興趣<input type='radio' name='uWill' value='沒興趣'><br>";
            
        echo "<input type='submit'><input type='reset'>";
        echo"</form>";

        echo "<br>";
        echo "<a href='http://www.nuk.edu.tw'><img src='https://intro.nuk.edu.tw/var/file/58/1058/img/753/sketch.jpg' width='100%'></a><br>";
    ?>

    </body>

</html>