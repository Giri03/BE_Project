
<?php
session_start();
if(isset($_POST['submit'])){
/*
		$district=$_POST['district'];

		$year=$_POST['year'];

	$bool=true;

	
		if($bool=="true") //checks if bool is true
		{
				//mysql_query("insert into user (username,password) values ('$username','$passwors')");//inset the vallue to table users
				print '<script>alert("Successfully Registered!");</script>';//prompts the user
				//print '<script>window.location.assign("register.php");</script>';//redirect to register.php
				}
		else
		{
				print '<script>alert("Not Registered!");</script>';//prompts the user

		}
				}
*/
$fields = array('district', 'year');

$error = false; //No errors yet
$district = $_POST['district'];
$year = $_POST['year'];
echo $district;
//$error=false;
foreach($fields AS $fieldname) { //Loop trough each field
  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
    echo 'Field '.$fieldname.' misses!<br />'; //Display error with field
    $error = true; //Yup there are errors
				print '<script>alert("Field missing");</script>';//prompts the user
				print '<script>window.location.assign("home.php");</script>';

	}
}

// exec("Rscript C:/xampp/htdocs/beproject/Drought Prediction/".$district.".R $year $district");
$color1=null;
$color2=null;
$color3=null;
$color4=null;
$color5=null;
$color6=null;
$color7=null;
$color8=null;
$color=null;
  //echo $_SESSION["color"];
if(!$error ) { //Only create queries when no error occurs
  //Create queries....
  				print '<script>alert(" Click OK to continue!");</script>';//prompts the user
				if($district=="All_Districts"){
					$i=1;
					  $alldistricts=array(1=>"Aurangabad",2=>"Beed",3=>"Hingoli",4=>"Jalna",5=>"Latur",6=>"Nanded",7=>"Osmanabad",8=>"Parbhani");
					  var_dump($alldistricts);
					foreach($alldistricts as $number => $string) 
					{
						switch($number) 
						{
							case '1':
								$myfile1 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output1 = fread($myfile1,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								if ($output1<0 && $output1>-0.99)
								 { 
								 $color1 ='FFC0CB';}
								  else if($output1<-1 && $output1>-1.49)
								  {	$color1= 'CD5C5C';}
								  else if($output1<-1.5 && $output1>-1.99)
								  {	$color1 ='DC133C';}
								  else if($output1<-2)
								  {	$color1='850000';}
								  else{
									print("No Drought");
								  }
								  
								  $_SESSION["color1"]= $color1;
								break;
							case '2':
								
								$myfile2 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output2 = fread($myfile2,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								if ($output2<0 && $output2>-0.99)
								 { 
								 $color2 ='FFC0CB';}
								  else if($output2<-1 && $output2>-1.49)
								  {	$color2= 'CD5C5C';}
								  else if($output2<-1.5 && $output2>-1.99)
								  {	$color2 ='DC133C';}
								  else if($output2<-2)
								  {	$color2='850000';}
								  else{
									print("No Drought");
								  }
								  
								  $_SESSION["color2"]= $color2;
								break;
							case '3':
								$myfile3 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output3 = fread($myfile3,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								$output3;
								if ($output3<0 && $output3>-0.99)
								 { 
								 $color3 ='FFC0CB';}
								  else if($output3<-1 && $output3>-1.49)
								  {	$color3= 'CD5C5C';}
								  else if($output3<-1.5 && $output3>-1.99)
								  {	$color3 ='DC133C';}
								  else if($output3<-2)
								  {	$color3='850000';}
								  else{
									print("No Drought");
								  }
								  $_SESSION["color3"]= $color3;
								break;
							case '4':
								$myfile4 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output4 = fread($myfile4,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								if ($output4<0 && $output4>-0.99)
								 { 
								 $color4 ='FFC0CB';}
								  else if($output4<-1 && $output4>-1.49)
								  {	$color4= 'CD5C5C';}
								  else if($output4<-1.5 && $output4>-1.99)
								  {	$color4 ='DC133C';}
								  else if($output4<-2)
								  {	$color4='850000';}
								  else{
									print("No Drought");
								  }
								  $_SESSION["color4"]= $color4;
								 break;
							case '5':
								$myfile5 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output5 = fread($myfile5,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								if ($output5<0 && $output5>-0.99)
								 { 
								 $color5 ='FFC0CB';}
								  else if($output5<-1 && $output5>-1.49)
								  {	$color5= 'CD5C5C';}
								  else if($output5<-1.5 && $output5>-1.99)
								  {	$color5 ='DC133C';}
								  else if($output5<-2)
								  {	$color5='850000';}
								  else{
									print("No Drought");
								  }
								  $_SESSION["color5"]= $color5;
								
								break;
							case '6':
							$myfile6 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output6 = fread($myfile6,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								if ($output6<0 && $output6>-0.99)
								 { 
								 $color6 ='FFC0CB';}
								  else if($output6<-1 && $output6>-1.49)
								  {	$color6= 'CD5C5C';}
								  else if($output6<-1.5 && $output6>-1.99)
								  {	$color6 ='DC133C';}
								  else if($output6<-2)
								  {	$color6='850000';}
								  else{
									print("No Drought");
								  }
								  $_SESSION["color6"]= $color6;
									
								break;
							case '7':
								$myfile7 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output7 = fread($myfile7,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								if ($output7<0 && $output7>-0.99)
								 { 
								 $color7 ='FFC0CB';}
								  else if($output7<-1 && $output7>-1.49)
								  {	$color7= 'CD5C5C';}
								  else if($output7<-1.5 && $output7>-1.99)
								  {	$color7 ='DC133C';}
								  else if($output7<-2)
								  {	$color7='850000';}
								  else{
									print("No Drought");
								  }
								$_SESSION["color7"]= $color7;
								
								break;
							case '8':
								$myfile8 = fopen("C:/xampp/htdocs/beproject/".$string.".txt", "r") or die("Unable to open file!");
								$output8 = fread($myfile8,filesize("C:/xampp/htdocs/beproject/".$string.".txt"));
								if ($output8<0 && $output8>-0.99)
								 { 
								 $color8 ='FFC0CB';}
								  else if($output8<-1 && $output8>-1.49)
								  {	$color8= 'CD5C5C';}
								  else if($output8<-1.5 && $output8>-1.99)
								  {	$color8 ='DC133C';}
								  else if($output8<-2)
								  {	$color8='850000';}
								  else{
									print("No Drought");
								  }
								  $_SESSION["color8"]= $color8;
								
								break;
							
							default:
							//	echo 'LETTER '.$letter.' is empty';
							break;
						}

					}
						print '<script>window.location.assign("alldistricts.php");</script>';

			}
				else 
				{
										 
					 $myfile = fopen("C:/xampp/htdocs/beproject/".$district.".txt", "r") or die("Unable to open file!");
					 $output = fread($myfile,filesize("C:/xampp/htdocs/beproject/".$district.".txt"));

					 if ($output<0 && $output>-0.99)
					 {
					 $color ='FFC0CB';}
					  else if($output<-1 && $output>-1.49)
					  {	$color= 'CD5C5C';}
					  else if($output<-1.5 && $output>-1.99)
					  {	$color ='DC133C';}
					  else if($output<-2)
					  {	$color='850000';}
					  else{
						print("No Drought");
					  }

					  $_SESSION["color"]= $color;
					 
						
					if($district=="Aurangabad")
							print '<script>window.location.assign("aurangabad.php");</script>';
					if($district=="Beed")
						print '<script>window.location.assign("beed.php");</script>';
					if($district=="Latur")
										print '<script>window.location.assign("latur.php");</script>';
					if($district=="Jalna")
										print '<script>window.location.assign("jalna.php");</script>';

					if($district=="Hingoli")
										print '<script>window.location.assign("hingoli.php");</script>';
					if($district=="Parbhani")
										print '<script>window.location.assign("parbhani1.php");</script>';
					if($district=="Osmanabad")
										print '<script>window.location.assign("osmanabad.php");</script>';
					if($district=="Nanded")
										print '<script>window.location.assign("nanded.php");</script>';

				}
			
		}
	}
?>