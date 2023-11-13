<?php

include 'model/model.php';


class controller{
    public function lihat_data()
    {
        $m = new Model();
        $arr_header = $m->get_header();
        $arr_data = $m->get_data();

        $data = "<table border='1' style='border-collapse: collapse'>";
        $data .= "<thead>";
        $data .= "<tr>";
        $data .= "<th>".$arr_header[0]."</th>";
        $data .= "<th>".$arr_header[1]."</th>";
        $data .= "<th>".$arr_header[2]."</th>";
        $data .= "<th>".$arr_header[3]."</th>";
        $data .= "</tr>";
        $data .= "</thead>";
    
        $data .= "<tbody>";
        foreach ($arr_data as $value){
            $data .= "<tr>";   
            $data .= "<th>".$value[0]."</th>"; 
            $data .= "<th>".$value[1]."</th>";   
            $data .= "<th>".$value[2]."</th>";   
            $data .= "<th>".$value[3]."</th>";
            $data .= "</tr>"; 
        }
    $data .= "</tbody>";
    $data .= "</table>";

    //include setelah mendefinikan $data
    include 'view/view.php';
    }
    
}


  
?>