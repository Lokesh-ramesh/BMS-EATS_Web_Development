<?php
class createDb
{
    
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;
    public function __construct(
        $dbname="hotel_list",
        $tablename="products",
        $servername="localhost",
        $username="root",
        $password=""
    )
    {
    $this->dbname=$dbname;
    $this->tablename=$tablename;
    $this->servername=$servername;
    $this->username=$username;
    $this->password=$password;
    $this->con=mysqli_connect($servername,$username,$password);
    
    if(!$this->con){
        die("Connection failed:". mysql_error());
    }
$sql="use $dbname";

if(mysqli_query($this->con,$sql)){
$this->con=mysqli_connect($servername,$username,$password,$dbname);

$sql="CREATE TABLE IF NOT EXISTS $tablename
(pid INT(10),
hid int(10),
product_name VARCHAR(20) NOT NULL,
product_image VARCHAR(100),old_price int,new_price int,primary key(pid,hid));";

if(!mysqli_query($this->con,$sql)){
   echo "Error creating:".mysqli_error($this->con);
}


}
else{
    return false;
}

}

/*public function getData(){
    $sql="SELECT * FROM $this->tablename where hid=$_POST['hid']";
    $result=mysqli_query($this->con,$sql);
  if(mysqli_num_rows($result)>0){
        return $result;
    }
}*/

function getData(){
   // echo $_SESSION['hotel_id'];
     $h=$_SESSION['hotel_id'];
   // echo $h;
    $sql="SELECT * FROM $this->tablename where hid=$h";
    $result=mysqli_query($this->con,$sql);
  if(mysqli_num_rows($result)>0){
        return $result;
    }
}

function getData1(){
 // echo $_SESSION['hotel_id'];
 //$h1=$_SESSION['product_id'];
 //$h=$_SESSION['hotel_id'];
 $GLOBALS['h1']= $_SESSION['product_id'];
 $GLOBALS['h']=$_SESSION['hotel_id'];
  //   echo $h1;
  global $h1;
  global $h;
     $sql="SELECT * FROM $this->tablename where pid=$h1 AND hid=$h";
     $result=mysqli_query($this->con,$sql);
   if(mysqli_num_rows($result)>0){
         return $result;
     }
    
}

function getCart(){
    // echo $_SESSION['hotel_id'];
    //$h1=$_SESSION['product_id'];
    $h=$_SESSION['hotel_id'];
    $username=$_SESSION['username'];
 
    //$GLOBALS['h1']= $_SESSION['product_id'];
  //  $GLOBALS['h']=$_SESSION['hotel_id'];
     //   echo $h1;
  //   global $h1;
  //   global $h;
  $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'hotel_list');
    $sql="SELECT uid FROM users where username = '$username'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $uid = $row['uid'];
        $sql="SELECT * FROM products,cust where  products.pid=cust.pid AND cust.uid = '$uid' AND products.hid=cust.hid ";
        $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result)>0){
            return $result;
        }
     
   } 
   
   

}

?>