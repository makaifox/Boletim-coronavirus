<?php
     

// $destino = 'uploads/' . $_FILES['image']['name'];

 
// $arquivo_tmp = $_FILES['image']['tmp_name'];

// $path_file = $destino;
 
// move_uploaded_file( $arquivo_tmp, $destino  );

//         if (move_uploaded_file($_FILES['image']['tmp_name'], $destino)) {
//             echo json_encode($_FILES);
//        }




include ("Formulario.php");
 
$myUpload = new Upload($_FILES["upload_file"]);
 
$verificar = $myUpload->makeUpload();       

?>