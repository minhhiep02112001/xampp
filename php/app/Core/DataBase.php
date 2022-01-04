<?php 
	namespace App\Core;

	use PDO;

    class Database
	{
		protected $connect = null;
		protected $host = "localhost";
		protected $user = "root";
		protected $pass = "";
		protected $name = "test";
		protected $table ="";
		protected $limit = 15;
		protected $offset = 0;


		function __construct()
		{
			$this->connect();		
		}

		public function connect()
		{
			# code...
            try{
                $this->connect = new PDO("mysql:host={$this->host};dbname={$this->name}", $this->user, $this->pass);
            // set the PDO error mode to exception
                    $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
//			$this->connect = new mysqli($this->host,$this->user,$this->pass,$this->name);
//			if ( $this->connect->connect_errno) {
//				echo "Lỗi không thể kết nối database";
//			  	die();
//			  	exit($this->connect->connect_errno);
//			}
		}
		
		public function table($table)
		{ 
			$this->table = $table;
			return $this;
		}

		public function limit($limit)
		{ 
			$this->limit = $limit;
			return $this;
		}
		public function offset($offset)
		{ 
			$this->offset = $offset;
			return $this;
		}


		public function get()
		{
			# code...
			$sql = sprintf( " SELECT * FROM %s limit %s offset %s",
                $this->table,
                $this->limit,
                $this->offset
            );
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
            $publishers = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $publishers ? $publishers : [];

		}


		public function get_firts($key , $value)
		{
			$sql = "SELECT  * FROM $this->table WHERE $key = '$value'";
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
			$result = $stmt->get_result();
			$data = [];
			if ($result->num_rows > 0) {
			  // output data of each row
			   
			   	$data = $result->fetch_assoc();
			}
			return $data; 
		}

		// insert trả về dữ liệu vừa insert
		public function LastInsertId($data=[])
		{
			
			$param = implode(",", array_keys($data)); //(firstname, lastname, email)

			$arr_value = implode(",", array_fill( 0 , count($data), "?")); //(?,?,?);

			$value = array_values($data);

			$stmt = $this->connect->prepare("INSERT INTO $this->table ($param) VALUES ($arr_value)");

			$stmt->bind_param( str_repeat("s", count($data)) , ...$value);

			$stmt->execute();
		    //Thực hiện đoạn mã này có khả năng ném ra một ngoại lệ

		    return $this->connect->insert_id;
			
			
			//"INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
		}

		public function insert($data=[])
		{
			try {
				$param = implode(",", array_keys($data)); //(firstname, lastname, email)

				$arr_value = implode(",", array_fill(0, count($data), "?")); //(?,?,?);

				$value = array_values($data);
//              $sql =sprintf("INSERT INTO %s (%s) VALUES (%s)",$this->table,$param,$arr_value);
				$stmt = $this->connect->prepare("INSERT INTO $this->table ($param) VALUES ($arr_value)");

				//$stmt->bind_param( str_repeat("s", count($data)) , ...$value);

				$stmt->execute();
			    //Thực hiện đoạn mã này có khả năng ném ra một ngoại lệ
			    return true;

			}
			catch (Exception $e) {
			    //Xử lý ngoại lệ ở đây
			    return false; 
			}
			//"INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
		}
		public function update($column , $value , $data = [])
		{ 
			try {
				//"Update table set firstname=? , lastname = ?, email = ? VALUES id = ?;
				$arr_name_column_update = [];
				foreach ($data as $key => $val) {
					array_push($arr_name_column_update, $key."=?");
				}
				
				$str_param = implode(",", $arr_name_column_update);

				$data[$column]=$value;

				$arr_value = array_values($data);

				$stmt = $this->connect->prepare("UPDATE $this->table set $str_param where $column = ?");

				$stmt->bind_param( str_repeat("s", count($data)) , ...$arr_value);

				$stmt->execute();

				return true;
			    //Thực hiện đoạn mã này có khả năng ném ra một ngoại lệ
			}
			catch (Exception $e) {
			    //Xử lý ngoại lệ ở đây
			    return false;
			}
		}
		
		public function count_data()
		{ 
			$this->connect->query("SELECT * FROM $this->table");
			return $this->connect->affected_rows;
		}

		public function select($sql)
		{
			$stmt = $this->connect->prepare($sql);
			$stmt->execute();
			$result = $stmt->get_result();
			$data = [];
			if ($result->num_rows > 0){
                while ($obj = $result -> fetch_assoc()) {
                    array_push($data, $obj);
                }
            }
			return $data; 
		}

		public function del_category($key , $value)
		{ 
			$sql = "DELETE FROM $this->table WHERE $key = '$value'";
			try{
				$stmt = $this->connect->prepare($sql);
				$stmt->execute();
				return true;
			}
			catch (Exception $e) {
			    //Xử lý ngoại lệ ở đây
			    return false;
			}
		}

	}
 ?>