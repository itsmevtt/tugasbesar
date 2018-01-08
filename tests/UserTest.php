<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class tes extends PHPUnit_Framework_TestCase{
	public function testName(){
		$database = 'tugaspaw';
		$con = mysqli_connect("localhost","root","",$database) or die (mysqli_error());

		
		$sql = mysqli_query($con,"SELECT * FROM users where name = 'Novita'");
		// if (mysqli_error($con))
		// 	echo "Tidak ada di database";

		
		$user = mysqli_fetch_array($sql);
		$test_user = $user['email'];
		$content = $test_user;
		$this->assertEquals('novita@gmail.com',$content);
		echo "Sukses";
		
	}
}



