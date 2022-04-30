<?php
require_once "database.php";

function get_data(){
    global $database;

    $result = mysqli_query($database, "SELECT * FROM items");

    if(mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_assoc($result)){

        }

    } else {
        // echo "<h3>Our database is not up at this moment please try agian later.</h3>";
    }
}

if(isset ($_POST["item_id"]) && isset($_POST["item_name"]) && isset($_POST["item_amount"])){
    if (!empty($_POST["item_id"]) && !empty($_POST["item_name"]) && !empty($_POST["item_amount"])){

        $item_id = mysqli_real_escape_string($database, htmlspecialchars ($_POST["item_id"]));
        $item_name = mysqli_real_escape_string($database, htmlspecialchars ($_POST["item_name"]));
        $item_amount = mysqli_real_escape_string($database, htmlspecialchars ($_POST["item_amount"]));

        //checks to see if information was already entered into the database
        $check_database = mysqli_query($database, "SELECT 'item_id' FROM  items WHERE item_amount = '$item_id'");

        if(mysqli_num_rows($check_database) > 0){
            echo "<h3>This item id has already been entered - please recheck your item id</h3>";
        } else{
            $insert_query = mysqli_query($database, "INSERT INTO items (item_id, item_name, item_amount) VALUES ("$item_id", "$item_name", "$item_amount")");
        }

    }else{
        echo "<h4>Please fill in all fields</h4>";
    }
    }
