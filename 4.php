<?php
    $data = array(1,4,2,6,4,4);
    $jenis[]=null;
    $cek="";
    $i=0;
    
    
    for($j=0;$j<count($data);$j++)
    {
        $index2=array_search($data[$j],$jenis);
        if($index2 == "")
        {   
            $jenis[$i]=$data[$j];
            $i++;
        }
    }

    
   
    function cari($data, $data2)
    {
       
        for($K=0;$K<count($data2);$K++)
        {   
            echo $data2[$K]." => ".cariyangsama($data,$data2[$K])."<br/>";
        }
    }
   
    function cariyangsama($data,$dupval) {
        $nb= 0;
        foreach($data as $key => $val)
        if ($val==$dupval) $nb++;
        return $nb;
    }   
    
    cari($data, $jenis);
    
?>
