<?php
	class class_code{
		public $connectionString=NULL;
		public $hostName="localhost";
		public $userName="root";
		public $DB="hr_manage_db";
		public $pass="";
		// sdjkfhlsdjk fsldjkfskjdfh; s
		// 	
		public function insert($query){
			$this->connectionString=mysqli_connect($this->hostName,$this->userName,$this->pass,$this->DB) or die("
					<script>
						alert('Connection is faield');
					</script>
				");			
			mysqli_query($this->connectionString,$query) or die("Data is not inserted");
		}
		public function update($query){
			$this->connectionString=mysqli_connect($this->hostName,$this->userName,$this->pass,$this->DB) or die("
					<script>
						alert('Connection is faield');
					</script>
				");			
			mysqli_query($this->connectionString,$query) or die("<script> alert('Data is  Not Update')
										
										</script>");	
		}
		public function Delete($query){
			$this->connectionString=mysqli_connect($this->hostName,$this->userName,$this->pass,$this->DB) or die("
					<script>
						alert('Connection is faield');
					</script>
				");			
			mysqli_query($this->connectionString,$query) or die("<script> alert('Data is  Not Delete')
										
										</script>");	
		} 
	}	
?>