<?php 

class EcommerceEndUser{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getOfferProduct()
    {
     
        $this->db->query(' SELECT product_image1,p.subcategory_type_id,st.subcategory_type FROM e_products p,e_subcategory_type st '
                    .    ' WHERE on_offer ="y" AND st.subcategory_type_id = p.subcategory_type_id ');
        $row = $this->db->resultSet();
        return $row;
    }

    //-------------------profile start-----
public function makeOrder($name,$email,$phone,$address,$pincode,$address_line_1,$address_line_2,$city,$state,$country,$createdBy,$createdTs,$lastUpdatedBy,$lastUpdatedTs,$userid){
    // echo ' Inside insertApplicant';
    $this->db->query('INSERT INTO e_order_address(id,name,email,user_id,phone,address,pincode,address_line_1, '
                    .' address_line_2,city,state,country,created_by,created_ts,last_updated_by,last_updated_ts) '
                    .' VALUES (0,:name,:email,:userid,:phone,:address,:pincode,:address_line_1,:address_line_2,:city, '
                    .' :state,:country,:created_by,:created_ts,:last_updated_by,:last_updated_ts) ');       
    $this->db->bind(':name',$name);
    $this->db->bind(':email', $email);
    $this->db->bind(':userid', $userid);
    $this->db->bind(':phone',$phone);
    $this->db->bind(':address',$address);
    $this->db->bind(':pincode',$pincode);
    $this->db->bind(':address_line_1',$address_line_1);
    $this->db->bind(':address_line_2',$address_line_2);
    $this->db->bind(':city',$city);
    $this->db->bind(':state',$state);                 
    $this->db->bind(':country',$country);
    $this->db->bind(':created_by', $createdBy);
    $this->db->bind(':created_ts',$createdTs);
    $this->db->bind(':last_updated_by',$lastUpdatedBy);
    $this->db->bind(':last_updated_ts',$lastUpdatedTs);
    if($this->db->execute()){
        $id = $this->db->insertId();
        return true;
    }
    else {
        return false;
    }
}
//-------------------profile end-----

    public function getElectronicsItem()
    {
     
        $this->db->query(' SELECT product_image1,p.subcategory_type_id,st.subcategory_type FROM e_products p,e_subcategory_type st '
                        .' WHERE p.subcategory_type_id= st.subcategory_type_id AND category ="2" ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getMenFashion()
    {
     
        $this->db->query(' SELECT product_image1,p.subcategory_type_id,st.subcategory_type FROM e_products p,e_subcategory_type st '
                        .' WHERE sub_category = "1" AND  p.subcategory_type_id= st.subcategory_type_id ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getWomenFashion()
    {
        $this->db->query(' SELECT product_image1,p.subcategory_type_id,st.subcategory_type  FROM e_products p,e_subcategory_type st  WHERE sub_category = "2" AND p.subcategory_type_id= st.subcategory_type_id ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getmotorbikeDetail(){
        $this->db->query(' SELECT product_image1,p.subcategory_type_id,st.subcategory_type  FROM e_products p,e_subcategory_type st  WHERE sub_category = "37" AND p.subcategory_type_id= st.subcategory_type_id ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getmotorbike(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "37" '
        .    ' OR subcategory_id = "38" OR subcategory_id = "39" OR subcategory_id = "40" OR subcategory_id = "41"');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getMensCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "1" ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getWomensCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "2" ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getKidsCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "3" ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getelectronicsCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "9" '
                    .    ' OR subcategory_id = "10" OR subcategory_id = "11" OR subcategory_id = "12"; ');
        $row = $this->db->resultSet();
        return $row;
    }
    
    public function getaccesCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "4" '
        .    ' OR subcategory_id = "5" OR subcategory_id = "6" OR subcategory_id = "7"  OR subcategory_id = "8"  ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getBeautyCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "14" '
        .    ' OR subcategory_id = "15" OR subcategory_id = "16" OR subcategory_id = "17"  OR subcategory_id = "18"  '
        .    ' OR subcategory_id = "13"; ');
        $row = $this->db->resultSet();
        return $row;
    }
    public function getHomeAndKitchenCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "19" '
        .    ' OR subcategory_id = "20" OR subcategory_id = "21" OR subcategory_id = "22" ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getJewelleryCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "23" '
        .    ' OR subcategory_id = "24" OR subcategory_id = "25"');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getBagAndLuggagesCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "29" '
        .    ' OR subcategory_id = "30" OR subcategory_id = "31" OR subcategory_id = "32" OR subcategory_id = "33"');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getBookCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "34" '
        .    ' OR subcategory_id = "35" OR subcategory_id = "36"');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getBabyCategory(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "26" '
        .    ' OR subcategory_id = "27" OR subcategory_id = "28"');
        $row = $this->db->resultSet();
        return $row;
    }

   

    public function getgrocery(){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,image FROM e_subcategory_type WHERE subcategory_id = "42" '
        .    ' OR subcategory_id = "42" OR subcategory_id = "44" OR subcategory_id = "45" OR subcategory_id = "46"');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getCategoryItems($subcategory_type_id){
        $this->db->query('SELECT product_id, product_name ,product_image1 , discount_price FROM e_products'
                .   '     WHERE subcategory_type_id = :subcategory_type_id ');
        $this->db->bind(':subcategory_type_id', $subcategory_type_id);
        $row = $this->db->resultSet();
        return $row;
    }

    public function getProductDetails($product_id){
        $this->db->query('SELECT product_id, product_name, product_description, product_price, product_discount, discount_price, '
                .        ' product_image1, product_image2, product_image3, product_image4,c.color, s.size, brand  FROM e_products p ,'
                .        ' e_size s,e_color c WHERE c.color_id =p.product_color AND s.size_id = p.product_size AND  product_id = '
                .        ' :product_id');
        $this->db->bind(':product_id', $product_id);
        $row = $this->db->single();
        return $row;
    }

    public function insertIntoCart($price,$user_id,$status,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO e_addcart(id, user_id,grand_total_price, status, created_ts, created_by, '
                .        ' last_updated_ts, last_updated_by) VALUES (0,:user_id,:price,:status,:createdTs, '
                .        ' :createdBy,:lastUpdatedTs,:lastUpdatedBy) ');
        $this->db->bind(':user_id',$user_id); 
        // $this->db->bind(':quantity', $quantity);
        $this->db->bind(':price',$price);
        $this->db->bind(':status', $status);
        $this->db->bind(':createdTs', $createdTs);  
        $this->db->bind(':createdBy', $createdBy);
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return $id;
        }
        else {
            return false;
        }    
    }

    public function insertIntoCartline($cartId,$productId,$quantity,$price,$status,$totalprice,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO e_cart_line(id, cart_id, product_id, quantity, product_price, status, total_price, '
                .        ' created_ts, created_by, last_updated_ts, last_updated_by) VALUES (0,:cartId,:productId,:quantity,'
                .        ' :price,:status,:totalprice,:createdTs, :createdBy,:lastUpdatedTs,:lastUpdatedBy)');
        $this->db->bind(':cartId',$cartId); 
        $this->db->bind(':productId',$productId);
        $this->db->bind(':quantity', $quantity);
        $this->db->bind(':price',$price);
        $this->db->bind(':status', $status);
        $this->db->bind(':totalprice',$totalprice);
        $this->db->bind(':createdTs', $createdTs);  
        $this->db->bind(':createdBy', $createdBy);
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }              
    }

    // public function insertCart($product_name,$product_id,$price,$brand,$color,$size,$image1,$quantity,$total,$userId){
    // $this->db->query('INSERT INTO e_cart (cart_id, product_id, product_name, color, size, price, image, brand, quantity,total,user_id) '
    //                 .    ' VALUES (NULL,:product_id,:product_name,:color,:size,:price,:image1,:brand,:quantity,:total,:userId);');
    //         $this->db->bind(':product_id',$product_id);
    //         $this->db->bind(':product_name',$product_name);
    //         $this->db->bind(':color', $color);
    //         $this->db->bind(':size', $size);
    //         $this->db->bind(':price',$price);
    //         $this->db->bind(':image1', $image1);
    //         $this->db->bind(':brand',$brand);
    //         $this->db->bind(':quantity', $quantity);
    //         $this->db->bind(':total', $total);
    //         $this->db->bind(':userId', $userId);
            
    //         if($this->db->execute()){
    //             $cart_id = $this->db->insertId();
    //             return $cart_id;
    //         }
    //         else {
    //             return false;
    //         }
    // }

   

    public function getCartItemForOrder($cartId){
        $this->db->query(' SELECT id,user_id,grand_total_price,status,created_ts,created_by,last_updated_ts,last_updated_by FROM e_addcart WHERE id = :cartId');
        $this->db->bind(':cartId', $cartId);
        $row = $this->db->single();
        // print_r($row);
        return $row;
    }

    public function getProductInCart($cartId){
        $this->db->query(' SELECT * FROM e_cart_line WHERE cart_id = :cartId');
        $this->db->bind(':cartId', $cartId);
        $row = $this->db->resultSet();
        // print_r($row);
        return $row;
    }

    public function inserIntoOrder($cartId,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO e_orders (order_id,user_id,grand_total_price,status,created_ts,created_by, '
                .        ' last_update_ts, last_updated_by) SELECT null,user_id,grand_total_price,"100",:createdTs, '
                .        ' :createdBy,:lastUpdatedTs,:lastUpdatedBy FROM e_addcart c WHERE c.id =:cartId');
       $this->db->bind(':cartId', $cartId); 
       $this->db->bind(':createdTs', $createdTs); 
       $this->db->bind(':createdBy', $createdBy); 
       $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
       $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
       if($this->db->execute()){
          $order_id = $this->db->insertId();
          return $order_id;
        }
        else {
            return false;
        }            
    }

    public function insertIntoOrderLine($order,$cartId,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO e_order_line (order_line_id,order_id,product_id,quantity,status,product_price, '
                    .    ' total_price,created_ts,created_by, last_updated_ts, last_update_by) SELECT null,:order,product_id,'
                    .    ' quantity,product_price,"100",total_price,:createdTs,:createdBy,:lastUpdatedTs,:lastUpdatedBy '
                    .    ' FROM e_cart_line cl  WHERE cl.cart_id = :cartId');
        $this->db->bind(':order', $order);
       $this->db->bind(':cartId', $cartId); 
       $this->db->bind(':createdTs', $createdTs); 
       $this->db->bind(':createdBy', $createdBy); 
       $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
       $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
       if($this->db->execute()){
          $order_id = $this->db->insertId();
          return $order_id;
        }
        else {
            return false;
        }  
    }

    public function getCartItem($userId){
        $this->db->query('SELECT ct.id,ct.user_id,cl.product_id,cl.quantity,cl.total_price ,p.product_name,p.brand,p.product_image1,'
                .       ' cl.product_price,p.product_color,p.product_size,ct.grand_total_price FROM e_addcart ct,e_cart_line cl,'
                .       ' e_products p  WHERE ct.id = cl.cart_id AND cl.product_id = p.product_id AND ct.user_id = :userId;');
        $this->db->bind(':userId', $userId);
        $row = $this->db->resultSet();
        // print_r($row);
        return $row;
    }

    public function cartcount($userId){
        $this->db->query('SELECT COUNT(*)as count FROM e_cart WHERE user_id =:userId');
        $this->db->bind(':userId', $userId);
        $row = $this->db->single();
        return $row;
    }
    public function deleteItem($cart_id){
        $this->db->query('DELETE FROM e_addcart WHERE id =  :cart_id');
        $this->db->bind(':cart_id',$cart_id);
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }

    }

    public function checkuserExitInCart($user_id){
        $this->db->query(' SELECT id,user_id FROM e_addcart WHERE user_id = :user_id ');
        $this->db->bind(':user_id', $user_id);
        $row = $this->db->single();
        return $row;
    }

    public function updateItems($cartId,$price,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' UPDATE e_addcart SET grand_total_price = grand_total_price + :price ,last_updated_ts = :lastUpdatedTs,'
                    .    ' last_updated_by = :lastUpdatedBy WHERE id =:cartId ');
        $this->db->bind(':price',$price); 
        $this->db->bind(':cartId',$cartId);           
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy);  
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }              
    }

    public function getPrice($cart_id,$product_id){
        $this->db->query(' SELECT total_price FROM e_cart_line WHERE cart_id = :cart_id AND product_id = :product_id ');
        $this->db->bind(':product_id',$product_id); 
        $this->db->bind(':cart_id',$cart_id);
        $row = $this->db->single();
        return $row; 
    }

    public function updateCartPrice($cart_id,$total_price,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query( ' UPDATE e_addcart SET grand_total_price = grand_total_price - :total_price, '
                    .     ' last_updated_ts=:lastUpdatedTs,last_updated_by =:lastUpdatedBy WHERE id =:cart_id ');
        $this->db->bind(':cart_id',$cart_id);
        $this->db->bind(':total_price',$total_price); 
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy',$lastUpdatedBy); 
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }               
    }

    public function getPriceIfExit($cart_id){
        $this->db->query( ' SELECT grand_total_price FROM e_addcart WHERE id =:cart_id ');
        $this->db->bind(':cart_id',$cart_id);
        $row = $this->db->single();
        return $row;  
    }

    public function checkProductExit($cartId,$productId){
        $this->db->query(' SELECT id FROM e_cart_line WHERE product_id = :productId AND cart_id =:cartId ');
        $this->db->bind(':productId',$productId); 
        $this->db->bind(':cartId',$cartId);
        $row = $this->db->single();
        return $row; 
    }

    public function deleteCartItem($cart_id,$product_id){
        $this->db->query('DELETE FROM e_cart_line WHERE cart_id =  :cart_id AND product_id=:product_id');
        $this->db->bind(':cart_id',$cart_id);
        $this->db->bind(':product_id',$product_id);
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }

    }

    public function deleteCartItemFromOder($cart_id){
        $this->db->query('DELETE FROM e_cart_line WHERE cart_id =  :cart_id');
        $this->db->bind(':cart_id',$cart_id);
        // $this->db->bind(':product_id',$product_id);
        if($this->db->execute()){
            return true;
        }
        else {
            return false;
        }
    }

    public function updateItemInCartLine($quantity,$price,$productId,$cartId,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' UPDATE e_cart_line SET quantity = quantity + :quantity,total_price = total_price +:price, '
                    .    ' last_updated_ts=:lastUpdatedTs,  last_updated_by=:lastUpdatedBy WHERE cart_id =:cartId AND '
                    .    ' product_id =:productId ');  
        $this->db->bind(':quantity',$quantity); 
        $this->db->bind(':price',$price);  
        $this->db->bind(':cartId',$cartId);
        $this->db->bind(':productId',$productId); 
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy',$lastUpdatedBy); 
        if($this->db->execute()){
            $cart_id = $this->db->insertId();
            return $cart_id;
        }
        else {
            return false;
        }         
    }

    // public function updateItem($cart_id,$quantity,$total){
    //     // echo "inside updateSitDetailsById";
    //     $this->db->query(' UPDATE e_cart SET quantity =:quantity,total=:total '
    //                     .' WHERE cart_id = :cart_id ');
    //     $this->db->bind(':cart_id',$cart_id);
    //     $this->db->bind(':quantity',$quantity);
    //     $this->db->bind(':total',$total);
    //     if($this->db->execute()){
    //         return true;
    //     }
    //     return false;
    // }

    public function getUserId($email){
        $this->db->query(' SELECT id FROM user WHERE login_id = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        return $row;
    }

    public function placeorder($total){
        $this->db->query('');
    }


}
?>
