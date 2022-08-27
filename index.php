<?php
$url = "https://api.cricapi.com/v1/players?apikey=4b53730d-d2bf-4f0a-80eb-8ea443ed9077&offset=0";
$result = file_get_contents($url);
$result = json_decode($result, true);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

<h2>Player Names and Countries</h2>

<?php foreach($result['data'] as $key => $value){ ?>
<div class="card">
  <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><?php echo $value['name']; ?></b></h4> 
    <p><?php echo $value['country']; ?></p> 
  </div>
</div>
<?php } ?>

</body>
</html> 
