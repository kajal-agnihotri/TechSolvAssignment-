<?php 
class crud{
    public $conn;

    function __construct(){
$this->conn= new mysqli("localhost","root","","database_name");

}
function insert($name,$email,$password,$contact){
    $this->conn->query("insert into table_name (name,email,password) values('$name','$email','$password')");
    
}
function show($id){
    $data=$this->conn->query("select * from table_name where id='$id'");
    $data->num_rows;
    while($record=$data->fetch_assoc()){
            $record['column_name'];
            $record['column_name1'];
    }
}
function delete($id){
    $this->conn->query("delete from table_name where id='$id'");
}
function selectOne($id){
    $this->conn->query("select * from table_name where id='$id'");
}
function update($id,$name,$email,$password,$contact){
    $this->conn->query("update table_name set name='$name',email='$email',password='$password',contact='$contact' where id='$id'");
}

}

?>