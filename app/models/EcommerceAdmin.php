<?php 

class EcommerceAdmin{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }


    public function insertCaterogy($name,$createTs,$created_by){
        $this->db->query('INSERT INTO e_category(category_id, category_name, created_ts, created_by) '
                    .    ' VALUES (0,:category_name,:created_ts,:created_by)');
       $this->db->bind(':category_name',$name);
       $this->db->bind(':created_ts',$createTs);
       $this->db->bind(':created_by',$created_by);   
       if($this->db->execute()){
        $product_id = $this->db->insertId();
        return $product_id;
        }
        else {
            return false;
        }         
    }

    public function insertSubcaterogyItems($subcategory,$itemname,$qantity,$createTs,$created_by,$image){
        $this->db->query(' INSERT INTO e_subcategory_type(subcategory_type_id, subcategory_type, subcategory_id, quantity, image, '
                    .    ' created_ts, created_by) VALUES (0,:itemname,:subcategory,:qantity,:image,:created_ts,:created_by) ');
        $this->db->bind(':itemname',$itemname);
        $this->db->bind(':subcategory',$subcategory);
        $this->db->bind(':qantity',$qantity);
        $this->db->bind(':image',$image);
        $this->db->bind(':created_ts',$createTs);
        $this->db->bind(':created_by',$created_by);   
        if($this->db->execute()){
            $product_id = $this->db->insertId();
            return $product_id;
        }
        else {
            return false;
        }  
    }
    public function insertSubCaterogy($category,$name,$createTs,$created_by){
        $this->db->query('INSERT INTO e_subcategory(subcategory_id, subcategory_name, category_id, created_ts, created_by) '
                    .    ' VALUES (0,:subcategory_name,:category_id,:created_ts,:created_by)');
        $this->db->bind(':subcategory_name',$name);
        $this->db->bind(':category_id',$category);
        $this->db->bind(':created_ts',$createTs);
        $this->db->bind(':created_by',$created_by);   
        if($this->db->execute()){
        $product_id = $this->db->insertId();
        return $product_id;
        }
        else {
            return false;
        }
    }

    public function insertProduct($product_name,$price,$discount,$discountprice,$brand,$sku,$category,$subcategory,$Subcategorytype,$color,$size,$image1,$image2,$image3,$image4,$description,$status,$createTs,$lastUpdateTs,$created_by,$last_update_by){
    $this->db->query('INSERT INTO e_products (product_id, product_name, product_description, product_price, product_status, '
                .      ' product_discount, discount_price, product_image1, product_image2, product_image3, product_image4, '
                .      ' product_color, product_size, sku, category, sub_category,subcategory_type_id, brand, create_ts, '
                .      ' last_updated_ts, created_by, last_updated_by)'
                .      ' VALUES (0 , :product_name, :description, :price, :status, :discount, :discountprice, '
                .      ' :image1, :image2, :image3, :image4, :color, :size, :sku, :category, :subcategory,:Subcategorytype, :brand, :createTs, '
                .      ' :lastUpdateTs, :created_by, :last_update_by)');

        $this->db->bind(':product_name',$product_name);
        $this->db->bind(':description', $description);
        $this->db->bind(':price',$price);
        $this->db->bind(':status',$status);
        $this->db->bind(':discount',$discount);
        $this->db->bind(':discountprice',$discountprice);
        $this->db->bind(':image1', $image1);
        $this->db->bind(':image2',$image2);
        $this->db->bind(':image3',$image3); 
        $this->db->bind(':image4',$image4);
        $this->db->bind(':color', $color);
        $this->db->bind(':size', $size);
        $this->db->bind(':sku',$sku);
        $this->db->bind(':category',$category);
        $this->db->bind(':subcategory',$subcategory);
        $this->db->bind(':Subcategorytype',$Subcategorytype);
        $this->db->bind(':brand',$brand);
        $this->db->bind(':createTs',$createTs);
        $this->db->bind(':lastUpdateTs',$lastUpdateTs);
        $this->db->bind(':created_by',$created_by);
        $this->db->bind(':last_update_by',$last_update_by);
        
        if($this->db->execute()){
            $product_id = $this->db->insertId();
            return $product_id;
        }
        else {
            return false;
        }
    }

    public function getCategoryById()
    {
     
        $this->db->query(' SELECT category_id, category_name  FROM e_category WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getSubCategoryById()
    {
     
        $this->db->query(' SELECT subcategory_id,subcategory_name,category_id  FROM e_subcategory WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getSubCategoryType()
    {
     
        $this->db->query(' SELECT subcategory_type_id,subcategory_type  FROM e_subcategory_type WHERE 1 = 1  ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getSize()
    {
   
        $this->db->query(' SELECT size_id, size  FROM e_size WHERE 1 = 1  ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getColor()
    {
     
        $this->db->query(' SELECT color_id,color  FROM e_color WHERE 1 = 1  ');
        $row = $this->db->resultSet();
        return $row;
    }


    public function getproductdetail(){
        $this->db->query(' SELECT product_id,product_name,product_price,product_discount,discount_price,product_image1,product_description FROM e_products WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function deleteproduct($productId){
        $this->db->query('DELETE FROM e_products WHERE product_id = :productId');
        $this->db->bind(':productId', $productId);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function productcount(){
        $this->db->query('SELECT COUNT(*)as count FROM e_products;');
        $row = $this->db->single();
        return $row;
    }
    public function categorycount(){
        $this->db->query('SELECT COUNT(*)as count FROM e_category;');
        $row = $this->db->single();
        return $row;
    }

    public function getsubcategory($category_id){
        $this->db->query('SELECT subcategory_id, subcategory_name FROM e_subcategory WHERE category_id = :category_id');
        $this->db->bind(':category_id', $category_id);
        $row = $this->db->resultSet();
        return $row;
    }

    public function getparticularsubcategory($subcategory_id){
        $this->db->query('SELECT subcategory_type_id ,subcategory_type ,quantity FROM  e_subcategory_type where subcategory_id = :subcategory_id');
        $this->db->bind(':subcategory_id', $subcategory_id);
        $row = $this->db->resultSet();
        return $row;
    }

   
}
?>


