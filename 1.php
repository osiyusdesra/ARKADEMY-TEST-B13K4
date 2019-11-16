<html>
<head>
<title>SOAL NO 1</title>
</head>

<?php
function id ($name, $age){
   $data = array ('Name'=> $name,
            'Age' => $age,
            'Addres' => "Surabaya",
            'Hobby' => array ("Travelling","Watching Dramas","Learn new things"),
            'Is_Married?' => false,
            'List_School' => array ("Name"=>"Universitas Andalas", "Year_In"=>2013,"Year_Out"=>2018, "Major"=>'Physics'),
            'Skills' => array("Skill_Name" => "English", "Level" => "Advanced"),
            'Interest_in_coding' => true
           );
           echo json_encode ($data);
         }
         
         id ("Osi Yusdesra",23);
         
      ?>
      
   </body>
</html>
