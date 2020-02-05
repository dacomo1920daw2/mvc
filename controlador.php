<?php
class dadesUsuaris extends DB {
  function obtencioDades(){
    return $this->select("SELECT * FROM `dadesclients`");
  }
}
?>
