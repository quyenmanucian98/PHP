<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    From: <input type="text" name="from" placeholder="dd-mm-yyyy">
    To: <input type="text" name="to" placeholder="dd-mm-yyyy">
    <button type="submit">Check</button>
    <?php
    $listCustomer = array(
        "0" => array("name" => "Ronaldo", "day_of_birth" => "05/02/1985"),
        "1" => array("name" => "Rooney", "day_of_birth" => "05/02/1985"),
        "2" => array("name" => "Tevez", "day_of_birth" => "05/02/1987"),
        "3" => array("name" => "Persie", "day_of_birth" => "05/02/1988"),
        "4" => array("name" => "Pogba", "day_of_birth" => "05/02/1995"),
    );

    function searchByDate($lishcustomer, $from_date, $to_date)
    {
        if (empty($from_date) && empty($to_date)) {
            return $lishcustomer;
        }
        $filtered_customer = [];
        foreach ($lishcustomer as $value) {
            if (!empty($from_date) && (strtotime($value['day_of_birth']) < strtotime($from_date))) {
                continue;
            }
            if (!empty($to_date) && (strtotime($value['day_of_birth']) < strtotime($to_date))) {
                continue;
            }
            $filtered_customer[] = $lishcustomer;
        }
        return $lishcustomer;
    }

    $from_date = NULL;
    $to_date = NULL;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $from_date = $_POST['from'];
        $to_date = $_POST['to'];
    }
    $filtered_customer = searchByDate($listCustomer, $from_date, $to_date);
    ?>
    <table border="0">
        <caption><h2>Danh sách khách hàng</h2></caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php if (count($filtered_customer) === 0): ?>
            <tr>
                <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
            </tr>
        <?php endif; ?>

        <?php foreach ($filtered_customer as $index => $customer): ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $customer['name']; ?></td>
                <td><?php echo $customer['day_of_birth']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</form>
</body>
</html>
