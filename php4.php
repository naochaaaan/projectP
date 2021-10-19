<?php
$addresses =  [["name"=>"東京太郎","address"=>"東京都","phone"=>"012-345-6789","email"=>"taro@example.com"],
             ["name"=>"工科花子","address"=>"北海道","phone"=>"987-654-3210","email"=>"hana@example.com"]];


             if($_POST["submit"] != ""){
                 $addresses[] = ["name" => $_POST["name"],"address" => $_POST["address"],"phone" => $_POST["phone"],"email" => $_POST["email"]];
                }

function print_table($addresses){
    foreach($addresses as $address){
        echo
        "<tr>",
        "<th>",$address["name"],"</th>",
        "<th>",$address["address"],"</th>",
        "<th>",$address["phone"],"</th>",
        "<th>",$address["email"],"</th>",
        "</tr>";

    }
    var_dump($addresses);
}
    $data = json_encode($addresses,JSON_UNESCAPED_UNICODE);
    $json = fopen('addresses.json', 'w+');
    fwrite($json,$data);
    fclose($json);




?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>php4</title>
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
    <table border =1>
        <tr>
            <th>名前</th>
            <th>住所</th>
            <th>電話</th>
            <th>Email</th>
        </tr>
        <?php print_table($addresses);?>
    </table>
    <form action="php4.php" method="POST">
        名前<input type="text" name = "name">
        住所<input type="text" name = "address">
        電話<input type="text" name = "phone">
        Email<input type="text" name = "email">
        <input type="submit" name = "submit" value = "送信">
    </form>
</body>
</html>