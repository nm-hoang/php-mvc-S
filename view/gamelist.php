<?php
include './nav.php';
include './header.php';
$i =0;
$game = $games->fetch_assoc();
print_r($games);
foreach($games as $game){
?>

   <div class="col-sm-3">
        <img src="<?php echo $game['image'] ?>" all=" " class="custom-img">
        <h4><?php echo "Title: ". $game['title'] ?></h4>
        <h4><?php echo "Author: ". $game['author'] ?></h4>
        <h4><?php echo "Description: ". $game ['description'] ?></h4>
   </div>
<?php $i++; } ?>
<h2>test</h2>
    
