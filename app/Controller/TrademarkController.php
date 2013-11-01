<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TrademarkController extends AppController  {
    
    public function basic_search(){
        
    }

    public function advanced_search(){
        
    }
        
    public function get_data(){
            $file = "../../webroot/files/text";     

               // $filename = 'test.txt';
            $content = file_get_contents($file);

          $row = 1;
            if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                for ($c=0; $c < $num; $c++) {
                    echo $data[$c] . "<br />\n";
                }
            }
            fclose($handle);
        }
    }

}


?>
