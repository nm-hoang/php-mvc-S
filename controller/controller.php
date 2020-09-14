<?php
  require_once("model/database.php");

  class Controller extends Database{
    public function viewAll() {
      $games = $this->getGameList();
      include 'view/gamelist.php';
    }

    public function viewGameDetail() {
      $game = $this->getGameDetail($_GET['gamename']);
      include 'view/gameDetail.php';
    }
  }

?>