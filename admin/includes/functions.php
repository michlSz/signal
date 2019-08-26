<?

function last_id(){

    global $con;

    return mysqli_insert_id($con);
}


function set_message($msg){

    if(!empty($msg)){

        $_SESSION['message'] = $msg;

    }else{

        $msg = '';
    }
}


function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}


function redirect($location){

header("Location: $location");

}


/*
function query($sql){

global $con;

return mysqli_query($database->con, $sql);

}

*/


function confirm($result){
    
global $con;

if(!$result){

    die("Błąd połączenia" . mysqli_error($con));

}
}



function escape_string($string){

global $con;

return mysqli_real_escape_string($con, $string);

}



function fetch_array($result){

return mysqli_fetch_array($result);

}


function email_exists($email) {

    global $con;


    $query = "SELECT user_email FROM users WHERE user_email = '$email' ";
    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_array($result);


    if(mysqli_num_rows($result) > 0 ) {

        return true;
    } else {
        return false;
    }
}

/******************** FRON END FUNCTIONS *********************/


// get products

function get_products(){


$query = query("SELECT * FROM products");
confirm($query);


while($row = fetch_array($query)){


$product = <<<DELIMITER

<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
        <div class="caption">
            <h4 class="pull-right">{$row['product_price']}</h4>
            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">Dodaj do koszyka</a>
        </div>
        
    </div>
</div>


DELIMITER;


echo $product;

}
}

function get_products_category(){


$query = query("SELECT * FROM products WHERE product_category_id=" . escape_string($_GET['id']) . " ");

confirm($query);


while($row = fetch_array($query)){


$product = <<<DELIMITER

<div class="col-md-3 col-sm-6 hero-feature">
<div class="thumbnail">
    <img src="{$row['product_image']}" alt="">
    <div class="caption">
        <h3>{$row['product_title']}</h3>
        <p>{$row['short_desc']}</p>
        <p>
            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
        </p>
    </div>
</div>
</div>


DELIMITER;


echo $product;

}
}



function get_categories(){

$query = query("SELECT * FROM categories");
confirm($query);


while($row = fetch_array($query)) {
 
$categories_links = <<<DELIMITER

    <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>


DELIMITER;

echo $categories_links;

}
}

function get_products_shop(){


$query = query("SELECT * FROM products");

confirm($query);


while($row = fetch_array($query)){


$product = <<<DELIMITER

<div class="col-md-3 col-sm-6 hero-feature">
<div class="thumbnail">
    <img src="{$row['product_image']}" alt="">
    <div class="caption">
        <h3>{$row['product_title']}</h3>
        <p>{$row['short_desc']}</p>
        <p>
            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
        </p>
    </div>
</div>
</div>


DELIMITER;


echo $product;

}
}



function login_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);

$query = query("SELECT * FROM users WHERE username='{$username}' AND password='{$password}' ");
confirm($query);


if(mysqli_num_rows($query) == 0){

        set_message("Błędny login lub hasło");
        redirect('login.php');

}else{
        $_SESSION['username'] = $username;
        redirect('admin');

}

}
}
function send_message(){

if(isset($_POST['submit'])){

$to         = "szafruga.m@gmail.com";
$from_name  = $_POST['name'];
$subject    = $_POST['email'];
$email      = $_POST['email'];
$message    = $_POST['message'];

$headers = "From: {$from_name} {$email}";


$result = mail($to,$subject,$message,$headers);


if(!$result){

    set_message("Nie mogliśmy wysłać wiadomości");
    redirect('contact.php');

}else{

    set_message("Wiadomość została wysłana");
    redirect('contact.php');

}
}
}

function cart(){

$total = 0;
$item_quantity = 0;
$item_name = 1;
$item_number = 1;
$amount = 1;
$quantity = 1;

    foreach ($_SESSION as $name => $value) {
        

        if($value > 0) {
        if(substr($name, 0, 8) == "product_"){


            $lenght = strlen($name - 8);
            


            $id = substr($name, 8, $lenght);


    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($id). "");
    confirm($query);

    while ($row = fetch_array($query)) {

        $sub = $row['product_price']*$value;
        $item_quantity += $value;

        $product = <<<DELIMITER
            <tr>
                <td>{$row['product_title']}</td>
                <td>{$row['product_price']}</td>
                <td>$value</td>
                <td>$sub</td>
                <td><a class='btn btn-warning' href="../resources/cart.php?remove={$row['product_id']}"><span class="glyphicon glyphicon-minus"></span></a>  
                <a class='btn btn-success' href="../resources/cart.php?add={$row['product_id']}"><span class="glyphicon glyphicon-plus"></span></a> 
                <a class='btn btn-danger' href="../resources/cart.php?delete={$row['product_id']}"><span class="glyphicon  glyphicon-remove"></span></a>
                 </td>
            </tr>

                <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
                <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
                <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
                <input type="hidden" name="quantity_{$quantity}" value="{$value}">

DELIMITER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;


}

$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $item_quantity;

}
}
}
}

function show_paypal(){


if(isset($_SESSION['item_quantity']) && ($_SESSION['item_quantity']) >= 1){


$paypal_button = <<<DELIMITER

<input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">


DELIMITER;

return $paypal_button;

}
}

function report(){

global $con;

      if(isset($_GET['tx'])){

        $amount = $_GET['amt'];
        $currency = $_GET['cc'];
        $transation = $_GET['tx'];
        $status = $_GET['st'];



        


$total = 0;
$item_quantity = 0;


    foreach ($_SESSION as $name => $value) {
        

        if($value > 0) {
        if(substr($name, 0, 8) == "product_"){


            $lenght = strlen($name - 8);
            


            $id = substr($name, 8, $lenght);

            $send_order = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) VALUES ('$amount', '$currency', '$transation', '$status')");

            $last_id = last_id();

            confirm($send_order);



    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($id). "");
    confirm($query);

    while ($row = fetch_array($query)) {

        $product_price = $row['product_price'];
        $product_title = $row['product_title'];
        $product_quantity = $row['product_quantity'];

        $sub = $row['product_price']*$value;
        $item_quantity += $value;

          $insert_report = query("INSERT INTO reports (product_id, order_id, product_price, product_title, product_quantity) VALUES ('{$id}', '{$last_id}', '{$product_price}', '{$product_title}', '{$value}')");

        confirm($insert_report);






}

$total += $sub;
echo $item_quantity;

}
}
}
 session_destroy();
}else{

    redirect("index.php");
}
}


/******************** BACK END FUNCTIONS *********************/



?>