<?php
	require_once '/resources/assets/excelUpload/classes/PHPExcel/IOFactory.php';
	
if (isset($_FILES['excelFile']) && !empty($_FILES['excelFile']['tmp_name'])) 
	{

		$excelObject = PHPExcel_IOFactory::load($_FILES['excelFile']['tmp_name']);
		$getSheet = $excelObject->getActiveSheet()->toArray(null);
		//$queryString = http_build_query($getSheet) . "\n";
		generateString($getSheet);	

	}

		function parseArray($array){
				echo '<pre>'; print_r($array); echo '</pre>';
				for($i=1;$i<count($array);$i++){
				$data[$i] = array(
    				'studentId' => $array[$i][0],
    				'username' => $array[$i][1],
    				'password' => $array[$i][2],
    				'student_name' => $array[$i][3],
    				'teacher_first_name' => $array[$i][4],
    				'teacher_last_name' => $array[$i][5],
    				'teacher_email' => $array[$i][6]
    			);
			}
			//echo '<pre>'; print_r($data); echo '</pre>';
			
	
			
		}
		function generateString($array){
			$queryString='';
			for($i=1;$i<count($array);$i++){
				$queryString = $queryString.'studentid='.$array[$i][0]
								.'&username='.$array[$i][1]
								.'&password='.$array[$i][2]
								.'&student+name='.$array[$i][3]
								.'&teacher+first+name='.$array[$i][4]
								.'&teacher+last+name='.$array[$i][5]
								.'&teacher+email='.$array[$i][6]
								.'&student+grade='.$array[$i][7]
								.'&school+name='.$array[$i][8]
								;

			}
			//$queryString variable holds query string
			echo $queryString;
		}
			
			
		
	?>