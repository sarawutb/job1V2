<?php
require('../connect/connect.php');
  session_start();
  if(isset($_GET["page1"])){
    $_SESSION["gender1_th"] = $_GET["gender1_th"];
    $_SESSION["gender1_en"] = $_GET["gender1_en"];
    $_SESSION["name1_th"] = $_GET["name1_th"];
    $_SESSION["name1_en"] = $_GET["name1_en"];
    $_SESSION["lastname1_th"] = $_GET["lastname1_th"];
    $_SESSION["lastname1_en"] = $_GET["lastname1_en"];
    $_SESSION["housenumber1"] = $_GET["housenumber1"];
    $_SESSION["group1"] = $_GET["group1"];
    $_SESSION["road1"] = $_GET["road1"];
    $_SESSION["alley1"] = $_GET["alley1"];
    $_SESSION["province1"] = $_GET["province1"];
    $_SESSION["district1"] = $_GET["district1"];
    $_SESSION["sub_district1"] = $_GET["sub_district1"];
    $_SESSION["zip_code1"] = $_GET["zip_code1"];
    $_SESSION["phone1"] = $_GET["phone1"];
    $_SESSION["email1"] = $_GET["email1"];
    $_SESSION["other1"] = $_GET["other1"];
    $_SESSION["type_data"] = $_GET["type_data"];


    $_SESSION["gender2_th"] = $_GET["gender2_th"];
    $_SESSION["gender2_en"] = $_GET["gender2_en"];
    $_SESSION["name2_th"] = $_GET["name2_th"];
    $_SESSION["name2_en"] = $_GET["name2_en"];
    $_SESSION["lastname2_th"] = $_GET["lastname2_th"];
    $_SESSION["lastname2_en"] = $_GET["lastname2_en"];
    $_SESSION["housenumber2"] = $_GET["housenumber2"];
    $_SESSION["group2"] = $_GET["group2"];
    $_SESSION["road2"] = $_GET["road2"];
    $_SESSION["alley2"] = $_GET["alley2"];
    $_SESSION["province2"] = $_GET["province2"];
    $_SESSION["district2"] = $_GET["district2"];
    $_SESSION["sub_district2"] = $_GET["sub_district2"];
    $_SESSION["zip_code2"] = $_GET["zip_code2"];
    $_SESSION["phone2"] = $_GET["phone2"];
    $_SESSION["email2"] = $_GET["email2"];
    $_SESSION["other2"] = $_GET["other2"];

}
if(isset($_GET["page2"])){
function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
}

if(isset($_GET["page3"])){
    $_SESSION["request"] = $_GET["request"];
    $_SESSION["text_request"] = $_GET["text_request"];
}
if(isset($_GET["page4"])){
    $_SESSION["detail"] = $_GET["detail"];
}
// $query .= " ( $_SESSION['name1_th'], $_SESSION['lastname1_th'] ) ";
if(isset($_POST["save_data"])){
  $query = "INSERT INTO cen_form1 VALUES (DEFAULT ,
                                            '$_SESSION[name1_th]',
                                            '$_SESSION[lastname1_th]',
                                            '$_SESSION[name1_en]',
                                            '$_SESSION[lastname1_en]',
                                            '$_SESSION[gender1_th]',
                                            '$_SESSION[gender1_en]',
                                            '$_SESSION[housenumber1]',
                                            '$_SESSION[group1]',
                                            '$_SESSION[road1]',
                                            '$_SESSION[alley1]',
                                            '$_SESSION[province1]',
                                            '$_SESSION[district1]',
                                            '$_SESSION[sub_district1]',
                                            '$_SESSION[zip_code1]',
                                            '$_SESSION[phone1]',
                                            '$_SESSION[email1]',
                                            '$_SESSION[other1]',
                                            DEFAULT,
                                            DEFAULT,
                                            '$_SESSION[type_data]',
                                            DEFAULT
                                          );";
  $result = pg_query($query);
  $query = "INSERT INTO cen_form2 VALUES (DEFAULT,
                                            '$_SESSION[name2_th]',
                                            '$_SESSION[lastname2_th]',
                                            '$_SESSION[name2_en]',
                                            '$_SESSION[lastname2_en]',
                                            '$_SESSION[gender2_th]',
                                            '$_SESSION[gender2_en]',
                                            '$_SESSION[housenumber2]',
                                            '$_SESSION[group2]',
                                            '$_SESSION[road2]',
                                            '$_SESSION[alley2]',
                                            '$_SESSION[province2]',
                                            '$_SESSION[district2]',
                                            '$_SESSION[sub_district2]',
                                            '$_SESSION[zip_code2]',
                                            '$_SESSION[phone2]',
                                            '$_SESSION[email2]',
                                            '$_SESSION[other2]',
                                            (SELECT MAX(id_cen_form1) FROM public.cen_form1)
                                          );";
  $result = pg_query($query);
  $query = "INSERT INTO cen_file VALUES (DEFAULT,
                                            '$_SESSION[file1]',
                                            '$_SESSION[file2]',
                                            '$_SESSION[name_path]',
                                            (SELECT MAX(id_cen_form1) FROM public.cen_form1)
                                          );";
  $result = pg_query($query);
  $query = "INSERT INTO cen_type VALUES (DEFAULT,
                                            '$_SESSION[request]',
                                            (SELECT MAX(id_cen_form1) FROM public.cen_form1)
                                          );";
  $result = pg_query($query);

  $arr_detail = explode(",",$_SESSION['detail']);
  for ($i=0; $i < count(explode(",",$_SESSION['detail'])); $i++) {
  $query = "INSERT INTO cen_detail VALUES (DEFAULT,
                                            '$arr_detail[$i]',
                                            (SELECT MAX(id_cen_form1) FROM public.cen_form1)
                                          );";
  $result = pg_query($query);
}

  if($_SESSION["text_request"] != ""){
    $query = "INSERT INTO cen_type_other VALUES (DEFAULT,
                                              '$_SESSION[text_request]',
                                              (SELECT MAX(id_cen_form1) FROM public.cen_form1)
                                            );";
    $result = pg_query($query);
  }
  // header('Location:index.php');
}

?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$.ajax({
  url: "loderpage.php",
  data:"",
  success: function(result){
    $("#loading").html(result);
}});
</script> -->
