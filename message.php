<?php
    
class message extends createCon {
    private $idS;
    private $idR;
    private $message;
    private $conn;
    private $response=array();
    public function __construct($idr,$ids,$message=''){
        $this->idR=$idr;
        $this->idS=$ids;
        $this->message=$message;    
        $this->conn=parent::connect();
    }

    public function insert()
    {
        if (isset($this->message) and $this->message!='') {
            $sql="INSERT INTO message (idS,idR,message) VALUES ('$this->idS','$this->idR','$this->message')";
            $res=mysqli_query($this->conn,$sql) or die("error : ".mysqli_error($this->conn));
        }
    }

    public function getMessages ($ctr){
        
        $query="SELECT * FROM message where id > $ctr AND ((idR=$this->idR and idS=$this->idS)or (idR=$this->idS and idS=$this->idR)  )ORDER BY id asc ";
        $messages=mysqli_query($this->conn,$query);
            while ($row=$messages->fetch_assoc()){ 
                $this->response["message"][]=$row;
            
            $this->response["color"]=$this->idS==$row["idS"]?'red':'green';
            }


        return json_encode($this->response);
    }

}