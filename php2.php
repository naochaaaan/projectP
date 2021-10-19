<?php
$addresses=[["name"=>"東京太郎","address"=>"東京都","phone"=>"012-345-6789","email"=>"taro@example.com"],
            ["name"=>"工科花子","address"=>"北海道","phone"=>"987-654-3210","email"=>"hana@example.com"]];

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
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>php2</title>
<style>
    table,tr,th,td{
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
</body>
</html>