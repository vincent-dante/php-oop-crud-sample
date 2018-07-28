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

  public function select_student($id){
      $result = $this->connect()->query("SELECT * FROM student_tbl WHERE std_id = $id");
      $numRows = $result->num_rows;
      if($numRows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
  }

  public function edit_student($std_fname, $std_mname, $std_lname, $std_gender){
    $result = $this->connect()->query("UPDATE std_table SET std_fname = $std_fname,
      std_mname = $std_mname, std_lname = $std_lname, std_gender = $std_gender WHERE std_id = $id");


    }
}

 ?>
