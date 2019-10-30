<?php
  session_start();
  require('connect.php');
  function selectWithExtra($table, $conditions = [], $extra) {
    global $conn;
    $sql = "SELECT * FROM $table ";
    $sql .= $extra;
    if(empty($conditions)) {
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } else {
      $i = 0;
      foreach ($conditions as $key => $value) {
        if($i === 0){
          $sql .= " WHERE $key = ?";
        } else {
          $sql .= " AND $key = ?";
        }
        $i++;
      }
      $stmt = $conn->prepare($sql);
      $values = array_values($conditions);
      $types = str_repeat('s',count($values));
      $stmt->bind_param($types,...$values);
      $stmt->execute();
      return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
  }
  function selectAll($table, $conditions = []) {
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($conditions)) {
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } else {
      $i = 0;
      foreach ($conditions as $key => $value) {
        if($i === 0){
          $sql .= " WHERE $key = ?";
        } else {
          $sql .= " AND $key = ?";
        }
        $i++;
      }
      $stmt = $conn->prepare($sql);
      $values = array_values($conditions);
      $types = str_repeat('s',count($values));
      $stmt->bind_param($types,...$values);
      $stmt->execute();
      return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
  }

  function selectOne($table, $conditions) {
    global $conn;
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach ($conditions as $key => $value) {
      if($i === 0){
        $sql .= " WHERE $key = ?";
      } else {
        $sql .= " AND $key = ?";
      }
      $i++;
    }
    $sql .= " LIMIT 1";
    $stmt = $conn->prepare($sql);
    $values = array_values($conditions);
    $types = str_repeat('s',count($values));
    $stmt->bind_param($types,...$values);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
  }

  function create($table,$data) {
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value) {
      if($i === 0){
        $sql .= " $key = ?";
      } else {
        $sql .= ", $key = ?";
      }
      $i++;
    }
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s',count($values));
    $stmt->bind_param($types,...$values);
    $stmt->execute();
    //error_reporting(E_All);
    return $stmt->insert_id;
  }
  function delete($table, $data) {
    global $conn;
    $sql = "DELETE FROM $table ";
    $i = 0;
    foreach ($data as $key => $value) {
      if($i === 0){
        $sql .= " WHERE $key = $value";
      } else {
        $sql .= " AND $key = $value";
      }
      $i++;
    }
    mysqli_query($conn, $sql);
  }
  $data = ['admin' => 1, 'username' => 'sattu123', 'email' => 'satejkokate123@gmail.com', 'password' => "sattu@1234"];
  //print_r(create('users', $data));
 ?>
