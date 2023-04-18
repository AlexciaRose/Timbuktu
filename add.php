<?php

session_start();

$username = $_SESSION["username"];





if(isset($_SESSION["username"]) && !empty($_SESSION["username"])){
    
    require 'connection.php';

    $conn = Connect();


    $prod_id = $_GET["prod_id"];
    $sql2 = "SELECT userID FROM user_tbl WHERE u_name = ?";
                $stmt = $conn->prepare($sql2);
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result2 = $stmt->get_result();


                if ($result2->num_rows > 0) {
                    $row2 = $result2->fetch_assoc();
                    $user_id = $row2["userID"];
                
                }

               
    if (empty($prod_id)) {
        echo "Error: prod ID is missing";
        return;
    }


    $conn = Connect();

    $query = "SELECT * FROM cart_tbl WHERE userID = ? AND productID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $user_id, $prod_id);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        //Updates quantity 
        $row = $result->fetch_assoc();
        $cart_id = $row["cartID"];
        $quantity = $row["quantity"] + 1;
        $query = "UPDATE cart_tbl SET quantity = ? WHERE cartID = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $quantity, $cart_id);
        $stmt->execute();

    } else{
        // Insert new item
        $stmt = $conn->prepare("INSERT INTO cart_tbl (userID, productID, quantity) VALUES (?, ?, ?)");
        $quantity = 1;
        $stmt->bind_param("iii", $user_id, $prod_id, $quantity);
        $stmt->execute();
    }

   
    // Close statement and connection
    $stmt->close();
    $conn->close();
    header('Location: http://localhost/Timbuktu/cart.php');



}

?>