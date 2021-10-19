<?php
    $addresses = array();
    $filename = './addresses.json';

    if($_POST["submit"] != ""){
        $contents = file_get_contents($filename);
        $addresses = json_decode($contents,true);
        $addresses[] = ["name" => $_POST["name"],"address" => $_POST["address"],"phone" => $_POST["phone"],"email" => $_POST["email"]];
        $data = json_encode($addresses,JSON_UNESCAPED_UNICODE);
        $data = mb_convert_encoding($data,"UTF-8");
        $json = fopen('addresses.json', 'w+');
        fwrite($json,$data);
        fclose($json);
    }



    if(file_exists($filename)){
        $contents = file_get_contents($filename);
        $addresses = json_decode($contents,true);
    }else{
        echo "ファイルが存在しません";
    }

    


function print_table($addresses){
    foreach($addresses as $address){
        echo "<tr>";
        echo "<th>".$address["name"]."</th>";
        echo "<th>".$address["address"]."</th>";
        echo "<th>".$address["phone"]."</th>";
        echo "<th>".$address["email"]."</th>";
        echo "</tr>";

    }
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>php5</title>
<style>
    table{
    border : 1px solid;
}

    tr{
    border : 1px solid;
}

    th{
    border : 1px solid;
}

</style>
</head>
<body>
    <table>
        <tr>
            <th>名前</th>
            <th>住所</th>
            <th>電話</th>
            <th>Email</th>
        </tr>
        <?php print_table($addresses);?>
    </table>
    <form action="php5.php" method="POST">
        名前<input type="text" name = "name">
        住所<input type="text" name = "address">
        電話<input type="text" name = "phone">
        Email<input type="text" name = "email">
        <input type="submit" name = "submit" value = "送信">
    </form>
</body>
</html>