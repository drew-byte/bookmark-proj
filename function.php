<?php 


function check_login($conn)
{

	if(isset($_SESSION['id']))
	{   
		

		$id = $_SESSION['id'];
		$query = "SELECT * FROM account WHERE id = '$id' LIMIT 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$data = mysqli_fetch_assoc($result);
			return $data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}
