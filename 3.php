<?php
   
   $kata = "OSI YUSDESRA PASTI BISA 123 98777";
   
   function hitung ($kata){
       $jumlah = str_word_count ($kata);
       $total = count (explode (" ",$kata));
       
       
       echo "Jumlah Kata adalah $jumlah  dari $total ";
   }
   
   hitung ($kata);
?>
