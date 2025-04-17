<?php

class EcommerceAdmins extends Controller{
    public function __construct() {
        // echo 'Agents construct';
         $this->EcommerceAdminModel = $this->model('EcommerceAdmin');
         $todaysDate = null;
    }

    public function logmein(){
        $data=$this->EcommerceAdminModel->productcount();
        $adata=$this->EcommerceAdminModel->categorycount();
       
        $this->view('ecommerce/admin/dashboard',$data,$adata);
    }


    public function navform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['logo'])){
                $this->view('common/admindashboard');
            }
            else if(isset($_POST['home'])){
                $data=$this->EcommerceAdminModel->productcount();
                $adata=$this->EcommerceAdminModel->categorycount();
                $this->view('ecommerce/admin/dashboard',$data,$adata);
            }
            else if(isset($_POST['product'])){
                $data= $this->EcommerceAdminModel->getCategoryById();
                $adata= $this->EcommerceAdminModel->getSubCategoryById();
                $mdata = $this->EcommerceAdminModel->getSubCategoryType();
                $ndata = $this->EcommerceAdminModel->getColor();
                $rdata = $this->EcommerceAdminModel->getSize();
                $this->view('ecommerce/admin/products',$data,$adata,$mdata,$ndata,$rdata);
               
            }
            else if(isset($_POST['order'])){
                $this->view('ecommerce/admin/order');
            }
            else if(isset($_POST['user'])){
                $this->view('ecommerce/admin/users_accounts');
            }
            
        }
    }

    public function productlist(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $sdata['message'] = null;
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['add_product'])){
                $product_name = trim($_POST['productname']);
                $price = trim($_POST['price']);
                $discount = trim($_POST['discount']);
                $discountprice = trim($_POST['discountprice']);
                $brand = trim($_POST['brand']);
                $sku = trim($_POST['sku']);
                $category = trim($_POST['category']);
                $subcategory = trim($_POST['subcategory']);
                $Subcategorytype = trim($_POST['Subcategorytype']);
                $color = trim($_POST['color']);
                $size = trim( $_POST['size']);
                $image1 = trim($_POST['img1']);
                $image2 = trim($_POST['img2']);
                $image3 = trim($_POST['img3']);
                $image4 = trim($_POST['img4']);
                $description = trim($_POST['desc']);
                $status = 'available';
                $createTs =$this->getCurrentTs();
                $lastUpdateTs =$this->getCurrentTs();
                $created_by = 'Admin';
                $last_update_by = 'Admin';
                
                
            }
            
            $product_id = $this->EcommerceAdminModel->insertProduct($product_name,$price,$discount,$discountprice,$brand,$sku,$category,$subcategory,$Subcategorytype,$color,$size,$image1,$image2,$image3,$image4,$description,$status,$createTs,$lastUpdateTs,$created_by,$last_update_by);
           
            if($product_id != null){
                $sdata['message'] = "Product is added Successfully !!" ;
            }
            
            $data= $this->EcommerceAdminModel->getCategoryById();
            $adata= $this->EcommerceAdminModel->getSubCategoryById();
            $mdata = $this->EcommerceAdminModel->getSubCategoryType();
            $ndata = $this->EcommerceAdminModel->getColor();
            $rdata = $this->EcommerceAdminModel->getSize();
            $this->view('ecommerce/admin/products',$data,$adata,$mdata,$ndata,$rdata,$sdata);
        }
    }

    public function getCategory(){
        // echo "fgbv";
        $result = $this->EcommerceAdminModel->getCategoryById();
        // echo "fgbv";
        // print_r($result);
        $data = array();
        foreach($result as $resultrow){
            // $data[]=$resultrow->task_desc;
            $data[] = array("id"=>$resultrow->category_id,"name"=>$resultrow->category_name);

        }
        // echo json_encode($data);
    }


    public function performaction(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['edit'])){
             
                $this->view('ecommerce/admin/adminprofile');
            }
            else if(isset($_POST['order'])){
             
                $this->view('ecommerce/admin/order');
            }
            else if(isset($_POST['seeproduct'])){
                $data = $this->EcommerceAdminModel->getproductdetail();
                $this->view('ecommerce/admin/show_products',$data);
            }
            else if(isset($_POST['account'])){
             
                $this->view('ecommerce/admin/users_accounts');
            }
            else if(isset($_POST['message'])){
               
                $this->view('ecommerce/admin/message');
            }
            else if(isset($_POST['seecategory'])){
                $data = $this->EcommerceAdminModel->getCategoryById();
                $this->view('ecommerce/admin/category',$data);
            }
            else if(isset($_POST['addcategory'])){
                $this->view('ecommerce/admin/creat_category');
            }
            else if(isset($_POST['addsubcategory'])){
                $data= $this->EcommerceAdminModel->getCategoryById();
                $this->view('ecommerce/admin/creat_subcategory',$data);
            }
            else if(isset($_POST['additems'])){
                $data= $this->EcommerceAdminModel->getSubCategoryById();
                $this->view('ecommerce/admin/creat_items',$data);
            }
        }
    }

    public function seesubcaterogy(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
            if(isset($_POST['subcategory'.$count])){
                $category_id=trim($_POST['category_id'.$count]);
                $data = $this->EcommerceAdminModel->getsubcategory($category_id);
                $this->view('ecommerce/admin/subcategory',$data);
                }
            }
        }

    }

    public function createsubcaterogyitems(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $adata['message'] = null;
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['add_subcategory'.$count])){
                $subcategory = trim($_POST['subcategory']);
                $itemname = trim($_POST['items']);
                $qantity = trim($_POST['no']);               
                $createTs =$this->getCurrentTs();
                $created_by = 'Admin';

                $targetDir = "subcategory/"; 
                $allowTypes = array('jpg','png','jpeg'); 
                $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                $image = array_filter($_FILES['image']['name']); 
               if(!empty($image)){ 
                   foreach($_FILES['image']['name'] as $key=>$val){ 
                        // File upload path 
                        $image = basename($_FILES['image']['name'][$key]); 
                        $targetFilePath = $targetDir . $image; 
                         
                        // Check whether file type is valid 
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                        if(in_array($fileType, $allowTypes)){ 
                            // Upload file to server 
                            if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                                // Image db insert sql 
                                $insertValuesSQL .= "('".$image."', NOW()),"; 
                                $data = $this->EcommerceAdminModel->insertSubcaterogyItems($subcategory,$itemname,$qantity,$createTs,$created_by,$image);
                               if ($data != null){
                                    $adata['message']="Subcategory added successfully !!";
                               }
                               else{
                                    $adata['message']="Failed to add data, please try again !!";
                               } 
                           }
                       } 
                   } 
               }
               $data= $this->EcommerceAdminModel->getSubCategoryById();
               $this->view('ecommerce/admin/creat_items',$data,$adata);  
            }
        }
    }

    public function seesubcaterogyofparticular(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
            if(isset($_POST['subcategorytype'.$count])){
                $subcategory_id=trim($_POST['subcategory_id'.$count]);
                $subcategory_name = trim($_POST['subcategory_name'.$count]);
                // echo $subcategory_id.$subcategory_name;
                $data = $this->EcommerceAdminModel->getparticularsubcategory($subcategory_id);
                $adata['name'] = $subcategory_name;
                $this->view('ecommerce/admin/particularcategory',$data,$adata);
                }
            }
        }
    }

    public function maintaininventery(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
            if(isset($_POST['seemore'.$count])){
                $subcategory_type_id=trim($_POST['subcategory_type_id'.$count]);
                // echo $subcategory_type_id;
                $this->view('ecommerce/admin/inventery');
                }
            }
        }
    }

    public function creatcaterogy(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data['message']= null;
            if(isset($_POST['add_category'])){ 
                $name = trim($_POST['name']);
                $createTs =$this->getCurrentTs();
                $created_by = 'Admin';
                $id = $this->EcommerceAdminModel->insertCaterogy($name,$createTs,$created_by);
                if($id != null){
                    $data['message'] = "category is added Successfully !!" ;
                }
                $this->view('ecommerce/admin/creat_category',$data);
            }
        }
    }

    public function createsubcaterogy(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message']= null;
            if(isset($_POST['add_subcategory'])){ 
                $category = trim($_POST['category']);
                $name = trim($_POST['subcategory']);
                $createTs =$this->getCurrentTs();
                $created_by = 'Admin';
                $id = $this->EcommerceAdminModel->insertSubCaterogy($category,$name,$createTs,$created_by);
                if($id != null){
                    $adata['message'] = "subcategory is added Successfully !!" ;
                }
                $data= $this->EcommerceAdminModel->getCategoryById();
                $this->view('ecommerce/admin/creat_subcategory',$data,$adata);

            }
        }
    }

    public function updatequantity(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            // for ($count=0; $count<$totalcount; $count++){
            if(isset($_POST['add'])){
               
                $this->view('ecommerce/admin/addmorequantity');
            }
        }
    }

   

    public function deleteProduct(){
        $adata['message']=null;
        $totalcount = trim($_POST['totalcount']);
        for ($count=0; $count<$totalcount; $count++){
            if (isset($_POST['delete'.$count]))
             {  
              $productId=trim($_POST['productId'.$count]);
              $result = $this->EcommerceAdminModel->deleteproduct($productId);
              if($result == true){
                $adata['message']="Product is Deleted Successfully !! ";
              }
              $data = $this->EcommerceAdminModel->getproductdetail();
              $this->view('ecommerce/admin/show_products',$data,$adata);
             }
        }
    }


   
}
?>






