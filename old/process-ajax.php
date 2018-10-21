<?php
session_start();

// password is ba3575fdcf1d671d

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) && $_POST['action'] != "" ? $_POST['action'] : "";

    if($action != "") {
        switch($action){
            case 'register':
                register();
                break;
            case 'check_username':
                check_username();
                break;
            case 'remove_cart_item':
                remove_cart_item();
                break;
            case 'get_cart_data':
                get_cart_data();
                break;
        }
    }
}

function register() {
    
    
    // add stuff for password here
    $db=mysqli_connect("localhost","root","","inthemoment");
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $repassword = mysqli_real_escape_string($db,$_POST['repassword']);

    $errors = array();
    if(isset($_POST['username']) && $_POST['username'] != ''){
        $username = mysqli_real_escape_string($db,$_POST['username']);

        $sql="SELECT * FROM users WHERE username='$username'";
        $query = mysqli_query($db,$sql);
        $rowcount = mysqli_num_rows($query);

        if($rowcount > 0){
            $errors[] = "Email already exist";
        }
    }else{
        $errors[] = "Username cannot be empty.";
    }

    if($password != $repassword){
        $errors[] = "Password and Confirm Password fields should match.";
    }

    $result = [];

    if(count($errors) > 0){
        $result['error'] = implode('<br />',$errors); //join line break with error
    }else {
        // register
        
        // add stuff for password here
        $db=mysqli_connect("localhost","root","","inthemoment");
        $password=md5($password); //hash password before storing for security purposes
        $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
        mysqli_query($db,$sql);

        $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
        $query=mysqli_query($db,$sql);
        $user = mysqli_fetch_assoc($query);

        $_SESSION['message']="You are now logged in";
        $_SESSION['username']=$username;
        $_SESSION['user'] = $user;
        $_SESSION['loggedin']=true;

        $result['success'] = 'Registered Successfully.';
    }

    header('Content-type: application/json');
    echo json_encode($result);
    die();
}

function check_email() {
    $result = [];
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        // add stuff for password here
        $db=mysqli_connect("localhost","root","","inthemoment");
        $email= mysqli_real_escape_string($db,$_POST['email']);

        $sql="SELECT * FROM users WHERE email='$email'";
        $query = mysqli_query($db,$sql);
        $rowcount = mysqli_num_rows($query);

        if($rowcount > 0){
            $result['error'] = "Email already exist";
        }
        else {
            $result['error'] = "Valid";
        }
    }else{
        $result['error'] = "Username cannot be empty.";
    }

    header('Content-type: application/json');
    echo json_encode($result);
    die();
}

function remove_cart_item() {
    $id = isset($_POST['id']) && $_POST['id'] != "" ? $_POST['id'] : "";
    $result = [];

    if($id){
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $id)
            {
                unset($_SESSION["shopping_cart"][$keys]);
                $result['success'] = "Item removed from cart.";
            }
        }
    }

    header('Content-type: application/json');
    echo json_encode($result);
    die();

}

function get_cart_data() {
    ob_start(); // turn output on and stops outputs from other scripts
    ?>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Item Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
                $total = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
            ?>
            <tr>
                <td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_quantity"]; ?></td>
                <td>$ <?php echo $values["item_price"]; ?></td>
                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                <td><a data-id="<?php echo $values["item_id"]; ?>" class="btn-remove-item" href="javascript:void(0)"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);

                    $_SESSION['total']=$total;
                    // echo $_SESSION number_format(['total'],2);

                }
            ?>


            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                <td></td>
            </tr>
            <?php
            }
            ?>

        </table>
    </div>
    <?php

    echo ob_get_clean(); // deletes output buffer
    exit;
}