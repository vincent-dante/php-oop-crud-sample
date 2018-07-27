<?php

class ViewStudent extends DbController {

  public function showAllStudent(){

    $datas = $this->show_student();
    return $datas;
    }
}



?>
