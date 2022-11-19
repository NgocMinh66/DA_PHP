<?php
class NGUOIDUNG{
    private $id;
    private $hoten;
    private $email;
    private $hinhanh;
    private $sodienthoai;
    private $loai;
    private $trangthai;
    private $matkhau;
    

    public function getID(){
        return $this->id;
    }

    public function setID($value){
        $this->id = $value;
    }

    public function getHoten(){
        return $this->hoten;
    }

    public function setHoten($value){
        $this->hoten = $value;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($value){
        $this->email = $value;
    }
    public function getHinhanh(){
        return $this->hinhanh;
    }

    public function setHinhanh($value){
        $this->hinhanh = $value;
    }

    public function kiemtranguoidunghople($email, $matkhau){
        $dbcon= DATABASE::connect();
        try{
            $sql= "SELECT * FROM nguoidung WHERE email=:email AND matkhau=:matkhau AND trangthai=1";
            $cmd=$dbcon->prepare($sql);
            $cmd->bindValue(":email", $email);
            $cmd->bindValue(":matkhau", md5($matkhau));
             $cmd->execute(); 
             $result =($cmd->rowCount()==1);
             $cmd->closeCursor();           
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }

        }
        public function laythongtinnguoidunghople($email ){
            $dbcon= DATABASE::connect();
            try{
                $sql= "SELECT * FROM nguoidung WHERE email=:email ";
                $cmd=$dbcon->prepare($sql);
                $cmd->bindValue(":email", $email);
                
                 $cmd->execute(); 
                 $result =$cmd ->fetch();
            
                return $result;
            }
            catch(PDOException $e){
                $error_message = $e->getMessage();
                echo "<p>Lỗi truy vấn: $error_message</p>";
                exit();
            }
        }
            public function laydanhsachnguoidung(){
                $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM nguoidung";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    

            }
            public function capnhathoso($email, $hoten, $sodienthoai, $hinhanh){
                $dbcon = DATABASE::connect();
                try{
                    $sql = "UPDATE nguoidung SET hoten=:hoten , sodienthoai=:sodienthoai, hinhanh=:hinhanh WHERE email=:email";
                    $cmd = $dbcon->prepare($sql);
                    $cmd->bindValue(":hoten", $hoten);
                    $cmd->bindValue(":sodienthoai", $sodienthoai);
                    $cmd->bindValue(":hinhanh", $hinhanh);
                    $cmd->bindValue(":email", $email);
                    $result = $cmd->execute();            
                    return $result;
                }
                catch(PDOException $e){
                    $error_message = $e->getMessage();
                    echo "<p>Lỗi truy vấn: $error_message</p>";
                    exit();
                }
            }
            public function capnhatmatkhau($email, $matkhau){
                $dbcon = DATABASE::connect();
                try{
                    $sql = "UPDATE nguoidung SET matkhau=:matkhau  WHERE email=:email";
                    $cmd = $dbcon->prepare($sql);
                    $cmd->bindValue(":matkhau", md5($matkhau));
                    $cmd->bindValue(":email", $email);
                    $result = $cmd->execute();            
                    return $result;
                }
                catch(PDOException $e){
                    $error_message = $e->getMessage();
                    echo "<p>Lỗi truy vấn: $error_message</p>";
                    exit();
                }
            }

            public function themnguoidung($email,$hoten,$loai){
                $dbcon = DATABASE::connect();
                try{
                    $sql = "INSERT INTO nguoidung(email,hoten,loai) 
                        VALUES(:email,:hoten, :loai)";
                    $cmd = $dbcon->prepare($sql);
                    $cmd->bindValue(":email", $email);
                    $cmd->bindValue(":hoten", $hoten);
                    $cmd->bindValue(":loai", $loai); 
                 
               
                    $result = $cmd->execute();            
                    return $result;
                }
                catch(PDOException $e){
                    $error_message = $e->getMessage();
                    echo "<p>Lỗi truy vấn: $error_message</p>";
                    exit();
                }
            }
        

    /**
     * Get the value of sodienthoai
     */ 
    public function getSodienthoai()
    {
        return $this->sodienthoai;
    }

    /**
     * Set the value of sodienthoai
     *
     * @return  self
     */ 
    public function setSodienthoai($sodienthoai)
    {
        $this->sodienthoai = $sodienthoai;

        return $this;
    }

    /**
     * Get the value of loai
     */ 
    public function getLoai()
    {
        return $this->loai;
    }

    /**
     * Set the value of loai
     *
     * @return  self
     */ 
    public function setLoai($loai)
    {
        $this->loai = $loai;

        return $this;
    }

    /**
     * Get the value of trangthai
     */ 
    public function getTrangthai()
    {
        return $this->trangthai;
    }

    /**
     * Set the value of trangthai
     *
     * @return  self
     */ 
    public function setTrangthai($trangthai)
    {
        $this->trangthai = $trangthai;

        return $this;
    }

    /**
     * Get the value of matkhau
     */ 
    public function getMatkhau()
    {
        return $this->matkhau;
    }

    /**
     * Set the value of matkhau
     *
     * @return  self
     */ 
    public function setMatkhau($matkhau)
    {
        $this->matkhau = $matkhau;

        return $this;
    }
    }

?>