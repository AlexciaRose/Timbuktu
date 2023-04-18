<?php

    $user_id = $_GET['user_id'];
    $prod_id = $_GET['prod_id'];

function addToCart() {
    
    require 'connection.php';

    
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
}

if (isset($_GET['user_id']) && !empty($_GET['user_id']) && isset($_GET['prod_id']) && !empty($_GET['prod_id'])) {
    
    // Call the addToCart function with the user ID and product ID
    addToCart($user_id, $prod_id);
}




?>