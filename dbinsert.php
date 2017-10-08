<?php
$host="erichost";
$user="root";
$password="dbdb";

$conn=mysql_connect($host, $user, $password);
mysql_select_db("test", $conn);

$sql="insert into php_tbl values(1, '홍길동')";
mysql_query($sql, $conn);

$sql="insert into php_tbl values(2, '루피')";
mysql_query($sql, $conn);

?>

<script>
    alert("DB 입력 성공! mysql에서 확인해보세요!");
</script>