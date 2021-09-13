<?php
	include "../../class_code/config.php";
		$query="select * from designation_tbl where FK_dept_id={$_GET['deptId']}";
		$val=mysqli_query($con,$query) or die('Data is not fetch');
		if(mysqli_num_rows($val)>0){
			while($tmp=mysqli_fetch_assoc($val)){
				echo '<option value="'.$tmp['PK_desi_id'].'">'.$tmp['desi_name'].'</option>';
			}
		}else{
			echo '<option value="">No Data Found</option>';
		}
	?>