<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class test extends PHPUnit_Framework_TestCase{
	public function testQurans(){
		$database = 'tugaspaw';
		$con = mysqli_connect("localhost","root","",$database) or die (mysqli_error());

		
		$sql = mysqli_query($con,"SELECT * FROM qurans where ayah_id = 5830");
		// if (mysqli_error($con))
		// 	echo "Tidak ada di database";

		
		$user = mysqli_fetch_array($sql);
		$test_user = $user['surah_id'];
		$content = $test_user;
		$this->assertEquals(null,$content);
		echo "Sukses";
		
	}

	
}



