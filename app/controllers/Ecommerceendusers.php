<?php

class EcommerceEndUsers extends Controller{
    public function __construct() {
        // echo 'Agents construct';
        session_start();
        $this->eCommerceEndUser = $this->model('EcommerceEndUser');
        $todaysDate = null;
    }

    public function logmein(){
        $userId = $_SESSION['userid'];

        $data = $this->eCommerceEndUser->getOfferProduct();
        $adata = $this->eCommerceEndUser->getElectronicsItem();
        $mdata = $this->eCommerceEndUser->getMenFashion();
        $ndata = $this->eCommerceEndUser->getWomenFashion();
        $rdata = $this->eCommerceEndUser->getmotorbikeDetail();
       
        $this->view('ecommerce/main',$data,$adata,$mdata,$ndata,$rdata);
    }

    public function main(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            $userId = $_SESSION['userid'];
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['product'.$count])){
                $subcategory_type_id = trim($_POST['subcategory_type_id'.$count]);
                $subcategory_type = trim($_POST['subcategory_type'.$count]);
                $data = $this->eCommerceEndUser->getCategoryItems($subcategory_type_id);
                $adata = $subcategory_type;
                $this->view('ecommerce/products',$data,$adata ); 
                }
            }
        }
    }

    public function electronicProduct(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            $userId = $_SESSION['userid'];
            // echo"Fgdbf".$userId;
            
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['product'.$count])){
                $subcategory_type_id = trim($_POST['subcategory_type_id'.$count]);
                $subcategory_type = trim($_POST['subcategory_type'.$count]);
                $data = $this->eCommerceEndUser->getCategoryItems($subcategory_type_id);
                $adata = $subcategory_type;
                $this->view('ecommerce/products',$data,$adata ); 
                }
            }
        }
    }

    public function MenProduct(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            $userId = $_SESSION['userid'];
        // echo"Fgdbf".$userId;
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['product'.$count])){
                $subcategory_type_id = trim($_POST['subcategory_type_id'.$count]);
                $subcategory_type = trim($_POST['subcategory_type'.$count]);
                $data = $this->eCommerceEndUser->getCategoryItems($subcategory_type_id);
                $adata = $subcategory_type;
                $this->view('ecommerce/products',$data,$adata ); 
                }
            }
        }
    }

    public function WomenProduct(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            $userId = $_SESSION['userid'];
            // echo"Fgdbf".$userId;
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['product'.$count])){
                $subcategory_type_id = trim($_POST['subcategory_type_id'.$count]);
                $subcategory_type = trim($_POST['subcategory_type'.$count]);
                $data = $this->eCommerceEndUser->getCategoryItems($subcategory_type_id);
                $adata = $subcategory_type;
                $this->view('ecommerce/products',$data,$adata ); 
                }
            }
        }
    }

    public function navformEnd(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['logo'])){
                $this->view('common/dashboard');
            }
            if(isset($_POST['Home'])){
                $data = $this->eCommerceEndUser->getOfferProduct();
                $adata = $this->eCommerceEndUser->getElectronicsItem();
                $mdata = $this->eCommerceEndUser->getMenFashion();
                $ndata = $this->eCommerceEndUser->getWomenFashion();
                $rdata = $this->eCommerceEndUser->getmotorbikeDetail();
                $this->view('ecommerce/main',$data,$adata,$mdata,$ndata,$rdata);
            }
            else if(isset($_POST['men'])){
                $adata['message'] = null;
                $data = $this->eCommerceEndUser->getMensCategory();
                if($data == null){
                    $adata['message']="Stay tune we are Onboarding more products !! ";
                }
                $this->view('ecommerce/men',$data,$adata);
               
            }
            else if(isset($_POST['women'])){
                $adata['message'] = null;
                $data = $this->eCommerceEndUser->getWomensCategory();
                if($data == null){
                    $adata['message']="Stay tune we are Onboarding more products !! ";
                }
                $this->view('ecommerce/women',$data,$adata);
            }
            else if(isset($_POST['kid'])){
                $adata['message'] = null;
                $data = $this->eCommerceEndUser->getKidsCategory();
                if($data == null){
                    $adata['message']="Stay tune we are Onboarding more products !! ";
                }
                $this->view('ecommerce/kid',$data,$adata);
            }
            else if(isset($_POST['electronic'])){
                $adata['message'] = null;
                $data = $this->eCommerceEndUser->getelectronicsCategory();
                if($data == null){
                    $adata['message']="Stay tune we are Onboarding more products !! ";
                }
                $this->view('ecommerce/electronic',$data,$adata);
            }
            else if(isset($_POST['acces'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getaccesCategory();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Accessories';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['beauty'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getBeautyCategory();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Beauty Products';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['home'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getHomeAndKitchenCategory();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Home & Kitchen Material';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['jewellery'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getJewelleryCategory();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Jewellery';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['Book'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getBookCategory();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Books';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['bag'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getBagAndLuggagesCategory();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Bags & Luggage';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['baby'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getBabyCategory();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Baby Products';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['grossery'])){
                $mdata['message'] = null;
                $data = $this->eCommerceEndUser->getgrocery();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Grocery';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['car'])){
                $mdata['message'] = null;
                $data = null;
                $data = $this->eCommerceEndUser->getmotorbike();
                if($data == null){
                    $mdata['message']="Stay tune we are Onboarding more products !! ";
                }
                $adata = 'Motorcycle accessories';
                $this->view('ecommerce/page',$data,$adata,$mdata);
            }
            else if(isset($_POST['cart'])){
                $email = $_SESSION['userid'];
                $userId = $this->eCommerceEndUser->getUserId($email);
                $data = $this->eCommerceEndUser->getCartItem($userId->id );
                $this->view('ecommerce/mycart',$data);
            }
            
        }
    }

    public function Fashion(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            $userId = $_SESSION['userid'];
            $mdata['message'] = null;
            // echo"Fgdbf".$userId;
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['shop'.$count])){
                $subcategory_type_id = trim($_POST['subcategory_type_id'.$count]);
                $subcategory_type = trim($_POST['subcategory_type'.$count]);
                
                $data = $this->eCommerceEndUser->getCategoryItems($subcategory_type_id);
                if($data == null){
                    $mdata['message'] = " Stay tune we are Onboarding more products !! ";
                }
                $adata = $subcategory_type;
                $this->view('ecommerce/products',$data ,$adata,$mdata); 
                }
            }
        }
    }


    public function Details(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            $userId = $_SESSION['userid'];
            // echo"Fgdbf".$userId;
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['detail'.$count])){
                $product_id = trim($_POST['product_id'.$count]);
                
                $data = $this->eCommerceEndUser->getProductDetails($product_id);
                $this->view('ecommerce/productdetail',$data); 
                }
            }
        }
    }

    public function managecart(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message'] = null;
            
            if(isset($_POST['addtocart'])){
                $product_name = trim($_POST['product_name']);
                $productId = trim($_POST['product_id']);
                $price = trim($_POST['price']);
                $brand = trim($_POST['brand']);
                $color = trim($_POST['color']);
                $size = trim( $_POST['size']);
                $image1 = trim($_POST['image']);
                $quantity = '1';
                $totalprice = trim($_POST['price']);
                $status = '50';
                $email = $_SESSION['userid'];
                $user_id = $this->eCommerceEndUser->getuserid($email);
                $createdBy='user';
                $createdTs=$this->getCurrentTs();
                $lastUpdatedBy='user';
                $lastUpdatedTs=$this->getCurrentTs();
                $check = $this->eCommerceEndUser->checkuserExitInCart($user_id->id);
                if($check->user_id == null){
                    $cartId = $this->eCommerceEndUser->insertIntoCart($price,$user_id->id,$status,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    $cartLine = $this->eCommerceEndUser->insertIntoCartline($cartId,$productId,$quantity,$price,$status,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                }
                else{
                    $duplicate = $this->eCommerceEndUser->checkProductExit($check->id,$productId);
                    if($duplicate->id == null){
                        $cartId = $this->eCommerceEndUser->updateItems($check->id,$price,$lastUpdatedTs,$lastUpdatedBy);
                        $cartLine = $this->eCommerceEndUser->insertIntoCartline($check->id,$productId,$quantity,$price,$status,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    }
                   else{
                        $cartId = $this->eCommerceEndUser->updateItems($check->id,$price,$lastUpdatedTs,$lastUpdatedBy,);
                        $updateitem = $this->eCommerceEndUser->updateItemInCartLine($quantity,$price,$productId,$check->id,$lastUpdatedTs,$lastUpdatedBy);
                        
                   }
                }
                
                // $cart_id = $this->eCommerceEndUser->insertCart($product_name,$product_id,$price,$brand,$color,$size,$image1,$quantity,$total,$userId);
                if($cartId != null && $cartLine != null || $updateitem != null){
                    $adata['message'] = "Product is added to cart Successfully !!" ;
                }
                    
                $data = $this->eCommerceEndUser->getProductDetails($productId);
                $this->view('ecommerce/productdetail',$data,$adata); 
            }

            else if(isset($_POST['buynow'])){
                $product_name = trim($_POST['product_name']);
                $productId = trim($_POST['product_id']);
                $price = trim($_POST['price']);
                $brand = trim($_POST['brand']);
                $color = trim($_POST['color']);
                $size = trim( $_POST['size']);
                $image1 = trim($_POST['image']);
                $quantity = '1';
                $totalprice = trim($_POST['price']);
                $status = '50';
                $email = $_SESSION['userid'];
                $user_id = $this->eCommerceEndUser->getuserid($email);
                $createdBy='user';
                $createdTs=$this->getCurrentTs();
                $lastUpdatedBy='user';
                $lastUpdatedTs=$this->getCurrentTs();
                $check = $this->eCommerceEndUser->checkuserExitInCart($user_id->id);
                if($check->user_id == null){
                    $cartId = $this->eCommerceEndUser->insertIntoCart($price,$user_id->id,$status,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    $cartLine = $this->eCommerceEndUser->insertIntoCartline($cartId,$productId,$quantity,$price,$status,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                }
                else{
                    $duplicate = $this->eCommerceEndUser->checkProductExit($check->id,$productId);
                    if($duplicate->id == null){
                        $cartId = $this->eCommerceEndUser->updateItems($check->id,$price,$lastUpdatedTs,$lastUpdatedBy);
                        $cartLine = $this->eCommerceEndUser->insertIntoCartline($check->id,$productId,$quantity,$price,$status,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                    }
                   else{
                        $cartId = $this->eCommerceEndUser->updateItems($check->id,$price,$lastUpdatedTs,$lastUpdatedBy,);
                        $updateitem = $this->eCommerceEndUser->updateItemInCartLine($quantity,$price,$productId,$check->id,$lastUpdatedTs,$lastUpdatedBy);
                        
                   }
                }
                
                // $cart_id = $this->eCommerceEndUser->insertCart($product_name,$product_id,$price,$brand,$color,$size,$image1,$quantity,$total,$userId);
                if($cartId != null && $cartLine != null || $updateitem != null){
                    $adata['message'] = "Product is added to cart Successfully !!" ;
                }
                    
     
                $email = $_SESSION['userid'];
                $userId = $this->eCommerceEndUser->getUserId($email);
                $data = $this->eCommerceEndUser->getCartItem($userId->id );
                $this->view('ecommerce/mycart',$data,$adata);
            }

           
        }
    }


   

    public function removeformcart(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message'] = null;
           
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['remove'.$count])){
                $cart_id = trim($_POST['cart_id'.$count]);
                $product_id = trim($_POST['product_id'.$count]);
                $lastUpdatedBy='admin';
                $lastUpdatedTs=$this->getCurrentTs();
                $price = $this->eCommerceEndUser->getPrice($cart_id,$product_id);
                $CartPrice =  $this->eCommerceEndUser->updateCartPrice($cart_id,$price->total_price,$lastUpdatedTs,$lastUpdatedBy);
                $checkprice = $this->eCommerceEndUser->getPriceIfExit($cart_id);
                if($checkprice->grand_total_price == null || $checkprice->grand_total_price == 0){
                    $deleteCart = $this->eCommerceEndUser->deleteItem($cart_id);
                }
                $delete  = $this->eCommerceEndUser->deleteCartItem($cart_id,$product_id);
                if($deleteCart  == true || $delete == true){
                    $adata['message'] = "Product is removed from cart !!" ;
                }
                $email = $_SESSION['userid'];
                $userId = $this->eCommerceEndUser->getUserId($email);
                $data = $this->eCommerceEndUser->getCartItem($userId->id );
                $this->view('ecommerce/mycart',$data,$adata);
                
                  
                }
                if(isset($_POST['purchase'])){
                    $cartId = trim($_POST['cart_id'.$count]);
                    $data = $this->eCommerceEndUser->getCartItemForOrder($cartId);
                    $this->view('ecommerce/address',$data);
                }
               
               
            }
        }
    }

    public function placeorder(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['cancel'])){
                $email = $_SESSION['userid'];
                $userId = $this->eCommerceEndUser->getUserId($email);
                $data = $this->eCommerceEndUser->getCartItem($userId->id );
                $this->view('ecommerce/mycart',$data);
            }
            else if(isset($_POST['addbtn'])){
                $cartId = trim($_POST['cartId']);
                $name=trim($_POST['name']);
                $email =trim($_POST['email']);
                $phone =trim($_POST['phone']);
                $address=trim($_POST['address']);
                $pincode=trim($_POST['pincode']);
                $address_line_1=trim($_POST['address_line_1']);
                $address_line_2=trim($_POST['address_line_2']);
                $city=trim($_POST['city']);
                $state=trim($_POST['state']);
                $country=trim($_POST['country']);
                // $userid = trim($_POST['userid']);
                $createdBy='admin';
                $createdTs=$this->getCurrentTs();
                $lastUpdatedBy='admin';
                $lastUpdatedTs=$this->getCurrentTs();
                $cart =$this->eCommerceEndUser->getCartItemForOrder($cartId);
                $order = $this->eCommerceEndUser->inserIntoOrder($cart->id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                $orderLine = $this->eCommerceEndUser->insertIntoOrderLine($order,$cart->id,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                $id=$this->eCommerceEndUser->makeOrder($name,$email,$phone,$address,$pincode,$address_line_1,$address_line_2,$city,$state,$country,$createdBy,$createdTs,$lastUpdatedBy,$lastUpdatedTs,$cart->user_id); 
                // delete
                $deleteCart = $this->eCommerceEndUser->deleteItem($cart->id);
                $deleteCartLine = $this->eCommerceEndUser->deleteCartItemFromOder($cart->id);

                $this->view('ecommerce/ordersucesmsg');
            }
        
           
        }
    }
    



    public function createUserSession($user){
        session_start();
         // Taking current system Time
         $_SESSION['start'] = time(); 
  
         // Destroying session after 1 minute
         $_SESSION['expire'] = $_SESSION['start'] + (1 * 240) ; 
       // echo " in session: userid is ". $user;
       $_SESSION['loggedin'] = "YES";
       $_SESSION['userid'] = $user;
    //    echo"user".$_SESSION['userid'];
       $data = $this->eCommerceEndUser->cartcount($user);
    //    print_r($data);
       $_SESSION['cart'] = $data->$count;
       return $user;
    }
    
    public function logout(){

        unset($_SESSION['userid']);
        unset($_SESSION['loggedin']);
        unset($_SESSION['cart']);
        session_destroy();
        // redirect('users/login');
    }


}

?>
 