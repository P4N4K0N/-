<!DOCTYPE html>
<html>    
<head>
    <meta charset="UTF-8">
    <title>Четвертое задание</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>

<body>
<script>
$(function(){
    $('.list-toggle').click(function(){
      $('.u-list').toggleClass('open');
    });
});
</script>
<style>  
.u-list li:nth-child(n) {
    display: list-item;
  }
  
  .u-list.open li:nth-child(n) {
    display: none;
  }
</style>
</style>
<form method="post" action="">
<ul><a href="index.php">Все товары</a>
    <li> 
        <ul class="u-list"><a href="#" class="list-toggle">Телевизоры</a>
            <li>
            <ul><a href="index3.php">ЖК Телевизоры</a></ul>
            </li>
            <li>
            <ul><a href="index4.php">Плазменные Телевизоры</a></ul>
            </li>
        </ul>
    </li>
    <li>
        <ul><a href="index5.php"> Мультимедия</a></ul>
    </li>
</ul>
</form>
<form style="text-align:center;margin-top:100px">
<?php
require "serverconfig.php";



$sql = "SELECT * FROM products WHERE id_group=8 or id_group=7 or id_group=4 or id_group=5 or id_group=6 or id_group=3 or id_group=1";
if($result = $conn->query($sql)){
    foreach($result as $row){
        printf('<br>' . $row['name']);
    }
}
?>
</form>




</body>