<?php
    class database{
        protected $conn = null;
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $dtbase = 'du_an';
    //Tạo phương thức kết nối
    public function __construct()
    {
        //connect mysql
        $this->connect();
    }

    //Viết hàm kết nối với cơ sở dữ liệu
    public function connect()
    {
        $this->conn= new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dtbase
        );
        if (!$this->conn) {
            echo "Kết nối thất bại";
            exit();
        }
    }

        public function get($table, $condition=array()){
            //Lấy dữ liệu sql
            $sql = "SELECT * FROM $table";
            if(!empty($condition)){
                $sql.=" WHERE ";

                foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
                }
                $sql = trim($sql, "AND");
            }
            //Thực thi câu lệnh
            $query = mysqli_query($this->conn, $sql);
            $ketqua = array();
                if ($query){
                    while($row = mysqli_fetch_assoc($query)){
                        $ketqua[] = $row;
                    }
                }
                return $ketqua;
        }
        //Function lấy dữ liệu theo điều kiện
        public function get_like($table, $column, $value){
            $sql = "SELECT * FROM $table WHERE $column LIKE '%$value%'";
            $query = mysqli_query($this->conn, $sql);
            $ketqua = array();
                if ($query){
                    while($row = mysqli_fetch_assoc($query)){
                        $ketqua[] = $row;
                    }
                }
                return $ketqua;
        }
        
        public function insert($table, $data=array()){
            $keys = array_keys($data);
            $column = implode(",", $keys);
            $value_str ='';
            foreach ($data as $keys => $value){
                $value_str .="'$value',";
            }
            $value_str = trim($value_str, ",");
            $sql = "INSERT INTO $table ($column) VALUES ($value_str)";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        public function delete($table, $condition=array()){
            $sql = " DELETE FROM $table WHERE ";
            
            foreach ($condition as $key => $value){
                $sql.="$key = '$value' AND";
            }
            $sql = trim($sql, "AND");
            //Thực thi câu lệnh
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        public function update($table, $data=array(), $condition=array()){
            $value_str = '';
            foreach ($data as $key => $value){
                $value_str .="$key = '$value',";
            }
            $value_str = trim($value_str, ",");
            $sql = "UPDATE $table SET $value_str WHERE ";

            foreach ($condition as $key => $value){
                $sql.="$key = '$value' AND";
            }
            $sql = trim($sql, 'AND');
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }
    }
?>

