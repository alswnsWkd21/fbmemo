after.php<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>table</title>
    <style media="screen">
        .tbwide {
            "text" name=-align: center;

            height: 50px;
        }

        .tb1 {
            width: 14%;
            background-color: yellow
        }

        .tb2 {
            width: 20%;
        }

        .tb3 {
            width: 14%;
            background-color: yellow
        }

        .tb4 {
            width: 20%
        }

        .tb5 {
            width: 14%;
            background-color: yellow
        }

        .tb6 {
            width: 20%
        }

        .box {
            display: flex;
        }

        th {
            background-color: yellowgreen;
        }

        table {
            border-spacing: 0px;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
  <?
$pgradenum = $_POST["pgradenum"];
$pgender = $_POST["pgender"];
$pfile = $_POST["pfile"];
$pname = $_POST["pname"];
$pnamec = $_POST["pnamec"];
$pnamee = $_POST["pnamee"];
$proad = $_POST["proad"];
$proadnum = $_POST["proadnum"];
$phomenum = $_POST["phomenum"];
$pphonenum = $_POST["pphonenum"];
$pid = $_POST["pid"];
$ppwa = $_POST["ppwa"];
$pemail = $_POST["pemail"];
$pgrade = $_POST["pgrade"];
$pstate = $_POST["pstate"];
$pmilitaryservice = $_POST["pmilitaryservice"];

?>
    <div class="box">
        <table border="1">
            <tr>
                <th colspan="6" class="tbwide">학생 명부 (컴퓨터 공학과)</th>
            </tr>
            <tr class="tbwide">
                <td class="tb1">학번</td>
                <td class="tb2" ><? echo "$pgradenum"?> </td>
                <td class="tb3">성별</td>
                <td class="tb4">


                </td>
                <td class="tb5">사진</td>
                <td class="tb6" >
            <tr class="tbwide">
                <td class="tb1">성명(한글)</td>
                <td class="tb2" > </td>
                <td class="tb3"성명(한자)</td>
                <td class="tb4"> </td>
                <td class="tb5">성명(영문)</td>
                <td class="tb6" > </td>
            </tr>.
            <tr class="tbwide">
                <td class="tb1">주소</td>
                <td class="tb2" colspan="3" > </td>
                <td class="tb3">우편번호</td>
                <td class="tb4" > </td>
            </tr>
            <tr class="tbwide">
                <td class="tb1">연락처(Home)</td>
                <td class="tb2" colspan="2" > </td>
                <td class="tb3">연락처(H.P)</td>
                <td class="tb4" colspan="2" > </td>
            </tr>
            <tr class="tbwide">
                <td class="tb1">ID</td>
                <td class="tb2" > </td>
                <td class="tb3">Password</td>
                <td class="tb4" > </td>
                <td class="tb5">E-mail</td>
                <td class="tb6" > </td>
            </tr>
?>            <tr class="tbwide">
                <td class="tb1">학년</td>
                <td class="tb2" action='after.html'> </td>
                <td class="tb3">등록상태</td>
                <td class="tb4">
                  </td>
                <td class="tb5">병역</td>
                <td class="tb6">
                    </td>
                </td>
            </tr>
            <tr class="tbwide">
                <td class="tb1">
                    기타</td>
                <td class="tb2" colspan="5">
                    <"text" name=area cols="80" rows="5"></"text" name=area>
                </td>
            </tr>
    </div>
    </table>
    <br>


</body>

</html>
