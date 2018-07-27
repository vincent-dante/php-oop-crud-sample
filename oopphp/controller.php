<?php

class DbController extends DbConnect {

  public function __construct(){
    $show_student = new DbConnect;
    $show_student->connect();
  }

  public function show_student(){

      $result = $this->connect()->query("SELECT * FROM student_tbl");
      $numRows = $result->num_rows;
      if($numRows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }

  }

}

 ?>
