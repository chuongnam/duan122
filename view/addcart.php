
<?php

if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];

 function showgiohang(){
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
            $tt= $_SESSION['giohang'][$i][2]*$_SESSION['giohang'][$i][4];
            echo '<tr>
            <td>'.($i+1).'</td>
            <td><img src="../admin/upload/'.$_SESSION['giohang'][$i][0].'" width="100px"></td>
            <td><p>'.$_SESSION['giohang'][$i][1].'</p></td>
            <td>'.$_SESSION['giohang'][$i][2].'</td>
            <td>'.$_SESSION['giohang'][$i][3].'</td>
            <td>'.$_SESSION['giohang'][$i][4].'</td>
            <td>'.$tt.'</td>
            <td><span>x</span></td>

        </tr>';
        
        }
    }
 }
?>
