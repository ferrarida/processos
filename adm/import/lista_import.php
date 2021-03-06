<?php
include_once("db_connect.php");
if(isset($_POST['import_data'])){    
    // validate to check uploaded file is a valid csv file
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 

'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 

'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){   
            $csv_file = fopen($_FILES['file']['tmp_name'], 'r');           
            //fgetcsv($csv_file);            
            // get data records from csv file
            while(($record = fgetcsv($csv_file, 1000, ";")) !== FALSE){
                // Check if employee already exists with same email
                $sql_query = "SELECT id, cpfcnpj, cliente, ofer_juros, ofer_desc_avista, ofer_desc_parc, ofer_entrada, ofer1_juros, ofer1_desc_avista, ofer1_desc_parc, ofer1_entrada, ofer2_juros, ofer2_desc_avista, ofer2_desc_parc, ofer2_entrada, ofer3_juros, ofer3_desc_avista, ofer3_desc_parc, ofer3_entrada, ofer4_juros, ofer4_desc_avista, ofer4_desc_parc, ofer4_entrada FROM ofertavarejo WHERE op19 = '".$record[3]."'";
                $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
				// if employee already exist then update details otherwise insert new record
                if(mysqli_num_rows($resultset)) {                     
					$sql_update = "UPDATE ofertavarejo set cpfcnpj='".$record[1]."', cliente='".$record[2]."', ofer_juros='".$record[4]."', ofer_desc_avista='".$record[5]."', ofer_desc_parc='".$record[6]."', ofer_entrada='".$record[7]."', ofer1_juros='".$record[8]."', ofer1_desc_avista='".$record[9]."', ofer1_desc_parc='".$record[10]."', ofer1_entrada='".$record[11]."', ofer2_juros='".$record[12]."', ofer2_desc_avista='".$record[13]."', ofer2_desc_parc='".$record[14]."', ofer2_entrada='".$record[15]."', ofer3_juros='".$record[16]."', ofer3_desc_avista='".$record[17]."', ofer3_desc_parc='".$record[18]."', ofer3_entrada='".$record[19]."', ofer4_juros='".$record[20]."', ofer4_desc_avista='".$record[21]."', ofer4_desc_parc='".$record[22]."', ofer4_entrada='".$record[23]."' WHERE op19 = '".$record[3]."'";
                    mysqli_query($conn, $sql_update) or die("database error:". mysqli_error($conn));
                } else{
					$mysql_insert = "INSERT INTO ofertavarejo (cpfcnpj, cliente, op19, ofer_juros, ofer_desc_avista, ofer_desc_parc, ofer_entrada, ofer1_juros, ofer1_desc_avista, ofer1_desc_parc, ofer1_entrada, ofer2_juros, ofer2_desc_avista, ofer2_desc_parc, ofer2_entrada, ofer3_juros, ofer3_desc_avista, ofer3_desc_parc, ofer3_entrada, ofer4_juros, ofer4_desc_avista, ofer4_desc_parc, ofer4_entrada)VALUES('".$record[1]."', '".$record[2]."', '".$record[3]."', '".$record[4]."', '".$record[5]."', '".$record[6]."', '".$record[7]."', '".$record[8]."', '".$record[9]."', '".$record[10]."', '".$record[11]."', '".$record[12]."', '".$record[13]."', '".$record[14]."', '".$record[15]."', '".$record[16]."', '".$record[17]."', '".$record[18]."', '".$record[19]."', '".$record[20]."', '".$record[21]."', '".$record[22]."', '".$record[23]."')";
					mysqli_query($conn, $mysql_insert) or die("database error:". mysqli_error($conn));
                }
            }            
            fclose($csv_file);
            $import_status = '?import_status=success';
        } else {
            $import_status = '?import_status=error';
        }
    } else {
        $import_status = '?import_status=invalid_file';
    }
}
header("Location: index.php".$import_status);
?>