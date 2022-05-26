// indext
$.ajax({
  url: "loderpage.php",
  data:"",
  success: function(result){
    // $("#showpage").html(result);
    // $(window).on('load', function(){
    // setTimeout(Loader, 1000); //wait for page load PLUS two seconds.
    // });
    // function Loader(){
      $.ajax({
        url: "page5.php",
        data:"",
        success: function(result){
          $("#showpage").html(result);
      }});
//       }
//
}});

// homepage
function nextform() {
  $.ajax({
    url: "page1.php",
    data:"",
    success: function(result){
      $("#showpage").html(result);
  }});
}
// page1
function check_nextpage_disabled() {
  var gender1_th = document.getElementById("gender1_th");
  var gender1_en = document.getElementById("gender1_en");
  var name1_th = document.getElementById("name1_th");
  var name1_en = document.getElementById("name1_en");
  var lastname1_th = document.getElementById("lastname1_th");
  var lastname1_en = document.getElementById("lastname1_en");
  var housenumber1 = document.getElementById("housenumber1");
  var group1 = document.getElementById("group1");
  var road1 = document.getElementById("road1");
  var alley1 = document.getElementById("alley1");
  var province1 = document.getElementById("province1");
  var district1 = document.getElementById("district1");
  var sub_district1 = document.getElementById("sub_district1");
  var zip_code1 = document.getElementById("zip_code1");
  var phone1 = document.getElementById("phone1");
  var email1 = document.getElementById("email1");
  var other1 = document.getElementById("other1");

  var gender2_th = document.getElementById("gender2_th");
  var gender2_en = document.getElementById("gender2_en");
  var name2_th = document.getElementById("name2_th");
  var name2_en = document.getElementById("name2_en");
  var lastname2_th = document.getElementById("lastname2_th");
  var lastname2_en = document.getElementById("lastname2_en");
  var housenumber2 = document.getElementById("housenumber2");
  var group2 = document.getElementById("group2");
  var road2 = document.getElementById("road2");
  var alley2 = document.getElementById("alley2");
  var province2 = document.getElementById("province2");
  var district2 = document.getElementById("district2");
  var sub_district2 = document.getElementById("sub_district2");
  var zip_code2 = document.getElementById("zip_code2");
  var phone2 = document.getElementById("phone2");
  var email2 = document.getElementById("email2");
  var other2 = document.getElementById("other2");
  if(
    gender1_th.value != "" && name1_th.value != "" &&
    name1_en.value != "" && lastname1_th.value != "" &&
    lastname1_en.value != "" && housenumber1.value != "" &&
    group1.value != "" && zip_code1.value != "" &&
    phone1.value != "" && email1.value != ""
    ){
     document.getElementById("next_page2").disabled = false;
  }else{
     // document.getElementById("next_page2").disabled = true;
     if(document.getElementById("type2").checked == true){
       if(
         gender2_th.value != "" && name2_th.value != "" &&
         name2_en.value != "" && lastname2_th.value != "" &&
         lastname2_en.value != "" && housenumber2.value != "" &&
         group2.value != "" && zip_code2.value != "" &&
         phone2.value != "" && email2.value != ""
       ){
         document.getElementById("next_page2").disabled = false;
       }else{
         document.getElementById("next_page2").disabled = true;
       }
     }
  }
}
function check_input($input) {
  const form = $input;
     if (form.checkValidity() === false) {
       event.preventDefault();
       event.stopPropagation();
       document.getElementById("next_page2").disabled = true;
     }else{
       // document.getElementById("next_page2").disabled = false;
       check_nextpage_disabled();

     }
     form.classList.add('was-validated');
}
function nextpage2(){

var gender1_th = document.getElementById("gender1_th");
var gender1_en = document.getElementById("gender1_en");
var name1_th = document.getElementById("name1_th");
var name1_en = document.getElementById("name1_en");
var lastname1_th = document.getElementById("lastname1_th");
var lastname1_en = document.getElementById("lastname1_en");
var housenumber1 = document.getElementById("housenumber1");
var group1 = document.getElementById("group1");
var road1 = document.getElementById("road1");
var alley1 = document.getElementById("alley1");
var province1 = document.getElementById("province1");
var district1 = document.getElementById("district1");
var sub_district1 = document.getElementById("sub_district1");
var zip_code1 = document.getElementById("zip_code1");
var phone1 = document.getElementById("phone1");
var email1 = document.getElementById("email1");
var other1 = document.getElementById("other1");

var gender2_th = document.getElementById("gender2_th");
var gender2_en = document.getElementById("gender2_en");
var name2_th = document.getElementById("name2_th");
var name2_en = document.getElementById("name2_en");
var lastname2_th = document.getElementById("lastname2_th");
var lastname2_en = document.getElementById("lastname2_en");
var housenumber2 = document.getElementById("housenumber2");
var group2 = document.getElementById("group2");
var road2 = document.getElementById("road2");
var alley2 = document.getElementById("alley2");
var province2 = document.getElementById("province2");
var district2 = document.getElementById("district2");
var sub_district2 = document.getElementById("sub_district2");
var zip_code2 = document.getElementById("zip_code2");
var phone2 = document.getElementById("phone2");
var email2 = document.getElementById("email2");
var other2 = document.getElementById("other2");

if(type1.checked == true){
document.getElementById("page2").hidden = true;
document.getElementById("gender2_th").selectedIndex = gender1_th.value;
document.getElementById("gender2_en").selectedIndex = gender1_en.value;
document.getElementById("name2_th").value = name1_th.value;
document.getElementById("name2_en").value = name1_en.value;
document.getElementById("lastname2_th").value = lastname1_th.value;
document.getElementById("lastname2_en").value = lastname1_en.value;
document.getElementById("housenumber2").value = housenumber1.value;
document.getElementById("group2").value = group1.value;
document.getElementById("road2").value = road1.value;
document.getElementById("alley2").value = alley1.value;
document.getElementById("phone2").value = phone1.value;
document.getElementById("email2").value = email1.value;
document.getElementById("other2").value = other1.value;
document.getElementById("province2").selectedIndex = province1.selectedIndex;
document.getElementById("province2").disabled = true;
document.getElementById("district2").selectedIndex = district1.selectedIndex;
document.getElementById("district2").disabled = true;
document.getElementById("sub_district2").selectedIndex = sub_district1.selectedIndex;
document.getElementById("sub_district2").disabled = true;
document.getElementById("zip_code2").selectedIndex = zip_code1.selectedIndex;
document.getElementById("zip_code2").disabled = true;
var type_data = document.getElementById("type1");
}else{
  var type_data = document.getElementById("type2");
}

  $.ajax({
    url: "page2.php",
    data:"",
    success: function(result){
    $("#showpage").html(result);
    $.ajax({
      url: "data_send_session.php?page1",
      data:"&gender1_th="+gender1_th.value+"&gender1_en="+gender1_en.value+"&name1_th="+name1_th.value+"&name1_en="+name1_en.value+"&lastname1_th="+lastname1_th.value+"&lastname1_en="+lastname1_en.value+"&housenumber1="+housenumber1.value+"&group1="+group1.value+"&road1="+road1.value+"&alley1="+alley1.value+"&province1="+province1.value+"&district1="+district1.value+"&sub_district1="+sub_district1.value+"&zip_code1="+zip_code1.value+"&phone1="+phone1.value+"&email1="+email1.value+"&other1="+other1.value+"&type_data="+type_data.value+"&gender2_th="+gender2_th.value+"&gender2_en="+gender2_en.value+"&name2_th="+name2_th.value+"&name2_en="+name2_en.value+"&lastname2_th="+lastname2_th.value+"&lastname2_en="+lastname2_en.value+"&housenumber2="+housenumber2.value+"&group2="+group2.value+"&road2="+road2.value+"&alley2="+alley2.value+"&province2="+province2.value+"&district2="+district2.value+"&sub_district2="+sub_district2.value+"&zip_code2="+zip_code2.value+"&phone2="+phone2.value+"&email2="+email2.value+"&other2="+other2.value,
      success: function(result){
        // console.log(lastname1_th.value);
      // $("").html(result);
    }});
  }});
//

//
}
function genders1_th() {
  var selectedIndex_th = document.getElementById("gender1_th").value;
  document.getElementById("gender1_en").selectedIndex = selectedIndex_th;
  check_nextpage_disabled();
}
function genders1_en() {
  var selectedIndex_th = document.getElementById("gender1_en").value;
  document.getElementById("gender1_th").selectedIndex = selectedIndex_th;
}
function genders2_th() {
  var selectedIndex_th = document.getElementById("gender2_th").value;
  document.getElementById("gender2_en").selectedIndex = selectedIndex_th;
}
function genders2_en() {
  var selectedIndex_th = document.getElementById("gender2_en").value;
  document.getElementById("gender2_th").selectedIndex = selectedIndex_th;
}
function inputname1_th() {
  const input = document.getElementById("form_input_name1_th");
  check_input(input);
    }
function inputname1_en() {
  const input = document.getElementById("form_input_name1_en");
  check_input(input);
    }
function inputlastname1_th() {
      const input = document.getElementById("form_input_lastname1_th");
      check_input(input);
    }
function inputlastname1_en() {
      const input = document.getElementById("form_input_lastname1_en");
      check_input(input);
    }
function inputname2_en() {
  const input = document.getElementById("form_input_name2_en");
  check_input(input);
}
function inputlastname2_en() {
  const input = document.getElementById("form_input_lastname2_en");
  check_input(input);
    }
function inputemail1() {
  const input = document.getElementById("form_input_email1");
  check_input(input);
}
var input = document.getElementById("phone1");
var validNumber = new RegExp(/^\d*\.?\d*$/);
  function validateNumber1(elem) {
    if (validNumber.test(elem.value)) {
      input = elem.value;
      // document.getElementById("inputphone1").hidden = true;
    } else {
      elem.value = input;
  }
}

var group1 = document.getElementById("group1");
var validNumber = new RegExp(/^\d*\.?\d*$/);
  function group1Number1(elem) {
    if (validNumber.test(elem.value)) {
      group1 = elem.value;
    } else {
      elem.value = group1;
  }
}

var group2 = document.getElementById("group2");
var validNumber = new RegExp(/^\d*\.?\d*$/);
  function group1Number2(elem) {
    if (validNumber.test(elem.value)) {
      group1 = elem.value;
    } else {
      elem.value = group1;
  }
}

function inputphone1() {
  const input = document.getElementById("form_input_phone1");
  check_input(input);
}
function input_housenumber1() {
  const input = document.getElementById("form_input_housenumber1");
  check_input(input);
}
function input_housenumber2() {
  const input = document.getElementById("form_input_housenumber2");
  check_input(input);
}
function input_group1() {
  const input = document.getElementById("form_input_group1");
  check_input(input);
}
function input_group2() {
  const input = document.getElementById("form_input_group2");
  check_input(input);
}

function inputname2_th() {
  const input = document.getElementById("form_input_name2_th");
  check_input(input);
}
function inputlastname2_th() {
  const input = document.getElementById("form_input_lastname2_th");
  check_input(input);
}
var input = document.getElementById("phone2");
var validNumber = new RegExp(/^\d*\.?\d*$/);
function validateNumber2(elem) {
  if (validNumber.test(elem.value)) {
    input = elem.value;
    // document.getElementById("inputphone2").hidden = true;
  } else {
    elem.value = input;
}
}

function inputphone2() {
  const input = document.getElementById("form_input_phone2");
  check_input(input);
}

function inputemail2() {
  const input = document.getElementById("form_input_email2");
  check_input(input);
}
function provinces1() {
       var id_amphures = document.getElementById("province1").value;
         $.ajax({
         type: "POST",
         url: "db_ajax.php",
         data: {id:id_amphures,function:'amphures'},
         success: function(data){
             $('#district1').html(data);
         }
});
    if(province1.value){
    document.getElementById("district1").disabled = false;
    document.getElementById("sub_district1").disabled = true;
    document.getElementById("zip_code1").disabled = true;

    document.getElementById("sub_district1").selectedIndex = 0;
    document.getElementById("zip_code1").selectedIndex = -1;
    var type1 = document.getElementById("type1");

    if(type1.checked == true){
      var id_amphures = document.getElementById("province1").value;
      $.ajax({
      type: "POST",
      url: "db_ajax.php",
      data: {id:id_amphures,function:'amphures'},
      success: function(data){
          $('#district2').html(data);
      }
    });
    //   var selectedIndex = document.getElementById('province1').selectedIndex;
    //   document.getElementById("province2").selectedIndex = selectedIndex;
    }
  }
  check_nextpage_disabled();
}

function districts1() {
  var id_districts = document.getElementById("district1").value;
    $.ajax({
    type: "POST",
    url: "db_ajax.php",
    data: {id:id_districts,function:'districts'},
    success: function(data){
        $('#sub_district1').html(data);
    }
  });
  if(district1.value){
    document.getElementById("sub_district1").disabled = false;
    document.getElementById("zip_code1").disabled = true;
    document.getElementById("zip_code1").selectedIndex = -1;
    if(type1.checked == true){
      document.getElementById("sub_district2").disabled = true;
      var id_districts = document.getElementById("district1").value;
        $.ajax({
        type: "POST",
        url: "db_ajax.php",
        data: {id:id_districts,function:'districts'},
        success: function(data){
            $('#sub_district2').html(data);
        }
      });
    //   var selectedIndex = document.getElementById('district1').selectedIndex;
    //   document.getElementById("district2").selectedIndex = selectedIndex;
    }
  }
  check_nextpage_disabled();
}
function sub_districts1() {
  check_nextpage_disabled();
  var id_sub_districts = document.getElementById("sub_district1").value;
    $.ajax({
    type: "POST",
    url: "db_ajax.php",
    data: {id:id_sub_districts,function:'sub_districts'},
    success: function(data){
        $('#zip_code1').html(data);
    }
  });
  if(sub_district1.value){
    document.getElementById("zip_code1").disabled = false;
    document.getElementById("zip_code2").disabled = true;
    if(type1.checked == true){
      var id_sub_districts = document.getElementById("sub_district1").value;
        $.ajax({
        type: "POST",
        url: "db_ajax.php",
        data: {id:id_sub_districts,function:'sub_districts'},
        success: function(data){
            $('#zip_code2').html(data);
            check_nextpage_disabled();
        }
      });
      // var selectedIndex = document.getElementById('sub_district1').selectedIndex;
      // document.getElementById("sub_district2").selectedIndex = selectedIndex;
    }
  }

}
function provinces2() {
  if(province2.value){
    document.getElementById("district2").disabled = false;
    var id_amphures = document.getElementById("province2").value;
      $.ajax({
      type: "POST",
      url: "db_ajax.php",
      data: {id:id_amphures,function:'amphures'},
      success: function(data){
          $('#district2').html(data);
          document.getElementById("district2").disabled = false;
          document.getElementById("sub_district2").disabled = true;
          document.getElementById("zip_code2").disabled = true;

          document.getElementById("sub_district2").selectedIndex = 0;
          document.getElementById("zip_code2").selectedIndex = -1;
      }
    });
  }
}
function districts2() {
  if(district2.value){
    document.getElementById("sub_district2").disabled = false;
    var id_districts = document.getElementById("district2").value;
      $.ajax({
      type: "POST",
      url: "db_ajax.php",
      data: {id:id_districts,function:'districts'},
      success: function(data){
          $('#sub_district2').html(data);
      }
    });
  }
}
function sub_districts2() {
  if(sub_district2.value){
    document.getElementById("zip_code2").disabled = false;
    var id_sub_districts = document.getElementById("sub_district2").value;
      $.ajax({
      type: "POST",
      url: "db_ajax.php",
      data: {id:id_sub_districts,function:'sub_districts'},
      success: function(data){
          $('#zip_code2').html(data);
      }
    });
  }
}
function backhome(){
      $.ajax({
       url: "pagehome.php",
       data:"",
       success: function(result){
       $("#showpage").html(result);
    }});
}
// page2
function backpage1(){
      $.ajax({
       url: "page1.php",
       data:"",
       success: function(result){
       $("#showpage").html(result);
    }});
}
function select_file1() {
  var size_file1 = input_file1.files[0].size/1024/1204; //mb
  if(size_file1 > 5){
    document.getElementById('report_file1').innerHTML = "ขนาดเอกสารที่แนบเกินกำหนด";
    document.getElementById('input_file1').value = null;
    console.log(size_file1);
  }else{
    var input1 = document.getElementById('input_file1');
    var output1 = document.getElementById('show_file1');
    for (var i = 0; i < input1.files.length; ++i) {
      output1.innerHTML = input1.files.item(i).name;
    }
    output1.innerHTML;
  }
}
function select_file2() {
var size_file2 = input_file2.files[0].size/1024/1204; //mb
  if(size_file2 > 5){
    document.getElementById('report_file2').innerHTML = "ขนาดเอกสารที่แนบเกินกำหนด";
    document.getElementById('input_file2').value = null;
    console.log(size_file2);
  }else{
    var input2 = document.getElementById('input_file2');
    var output2 = document.getElementById('show_file2');
    for (var i = 0; i < input2.files.length; ++i) {
      output2.innerHTML = input2.files.item(i).name;
    }
    output2.innerHTML;
  }

}
async function nextpage3(){
  var input1 = document.getElementById('input_file1');
  var input2 = document.getElementById('input_file2');

if(input1.value != null){
  let formData = new FormData();
  formData.append("file", input_file1.files[0]);
  await fetch('upload.php?name1', {
    method: "POST",
    body: formData
  });
}
if(input2.value != null){
  let formData = new FormData();
  formData.append("file", input_file2.files[0]);
  await fetch('upload.php?name2', {
    method: "POST",
    body: formData
  });
}


  // let formData = new FormData();
  // formData.append("file", input_file1.files[0]);
  // await fetch('upload.php', {
  //   method: "POST",
  //   body: formData
  // });

  // alert(input1);

  var input1 = document.getElementById('show_file1');
  var input2 = document.getElementById('show_file2');
  $.ajax({
      url: "page3.php",
      data:"",
      success: function(result){
      $("#showpage").html(result);

  //
  //     // const input = document.querySelector('#input_file1');
      $.ajax({
        url: "data_send_session.php?page2",
        data:"&file1="+input1.innerHTML+"&file2="+input2.innerHTML,
        success: function(result){
        // $("").html(result);

      }});
    }});
}

function check_page() {
  var check_page = document.getElementById("success_page");
  // var btn_next_page = document.getElementById("btn_next_page");
  if(check_page.checked == true){
    document.getElementById("btn_next_page").disabled = false;
  }else{
    document.getElementById("btn_next_page").disabled = true;
  }
}


// page3
function other_text() {
    checkbox_list();
    var checkbox_other = document.getElementById("checkbox_other");
    if(checkbox_other.checked ){
      document.getElementById("text_other").disabled = false;
    }else{
      document.getElementById("text_other").disabled = true;
    }

  }
function checked1(){
  checkbox_list();
}
function checked2(){
  checkbox_list();
}
function checked3(){
  checkbox_list();
}
function checked4(){
  checkbox_list();
}
function checked5(){
  checkbox_list();
}
function checked6(){
  checkbox_list();
}
function checked7(){
  checkbox_list();
}
function input_other_type() {
  var text_request = document.getElementById('text_other').value;
  if(text_request != ""){
    document.getElementById("page4").disabled = false;
  }else{
    document.getElementById("page4").disabled = true;
  }
}
function checkbox_list(){
  var items=document.getElementsByName('request');
  var selectedlist=[];
  for(var i=0; i<items.length; i++)
  {
      if(items[i].type=='checkbox' && items[i].checked==true)
      selectedlist=items[i].value;
  }
  if(selectedlist != "" && selectedlist != 8){
      document.getElementById("page4").disabled = false;
  }else{
    document.getElementById("page4").disabled = true;
    document.getElementById('text_other').value = null;
  }
}

function backpage2(){
    $.ajax({
     url: "page2.php",
     data:"",
     success: function(result){
     $("#showpage").html(result);
  }});
  }


function nextpage4(){
  var arr_request = [];
  var inputfields = document.getElementsByName("request");
  var text_request = document.getElementById('text_other').value;
  var ar_inputflds = inputfields.length;

  for (var i = 0; i < ar_inputflds; i++) {
    if (inputfields[i].type == 'checkbox' && inputfields[i].checked == true)
      arr_request.push(inputfields[i].value);
  }
  // console.log(arr_request);
  // alert(arr_request);


    var checkbox_other = document.getElementById("checkbox_other");
    var text_other = document.getElementById("text_other");

    console.log(text_other.value);
    // if(checkbox_other.checked && text_other.value == ""){
      // alert("กรุณากรอกรายละเอียดอื่นๆ");
    // }else{
        $.ajax({
          url: "page4.php",
          data:"",
          success: function(result){
          $("#showpage").html(result);
          $.ajax({
            url: "data_send_session.php?page3",
            data:"&request="+arr_request+"&text_request="+text_request,
            success: function(result){
          }});
      }});
    // }
}

// page4
var number = 1;
function addinput() {
  var div1 = document.getElementById("div1");
  number++;
  var c_div1 = document.createElement("div");
  c_div1.setAttribute("class", "col-sm-1 mt-4");
  c_div1.setAttribute("id", "input1"+number);
  // c_div.setAttribute("style", "border 1px solid red");
  div1.appendChild(c_div1);

  var c_div2 = document.createElement("div");
  c_div2.setAttribute("class", "col-sm-11");
  c_div2.setAttribute("id", "input2"+number);
  div1.appendChild(c_div2);

  var input1 = document.getElementById("input1"+number);
  var y = document.createElement("label");
  y.innerText = "ลำดับ "+number.toString();
  var test1 = document.getElementById("test1");
  input1.appendChild(y);

  var input2 = document.getElementById("input2"+number);
  var x = document.createElement("textarea");
  x.setAttribute("class", "form-control mt-3");
  x.setAttribute("name", "detail");
  x.setAttribute("type", "text");
  x.setAttribute("placeholder", "รายละเอียดข้อมูลผู้ขอรับสิทธิ");
  input2.appendChild(x);
}
function backpage3(){
      $.ajax({
       url: "page3.php",
       data:"",
       success: function(result){
       $("#showpage").html(result);
    }});
}
function nextpage5(){
  var items=document.getElementsByName('detail');
  var selectedlist=[];
  for(var i=0; i<items.length; i++)
  {
    if(items[i].type=='textarea')
    selectedlist=items[i].value;
  }
  // alert(items.length);
  var arr_detail = [];
  var inputfields = document.getElementsByName("detail");
  var ar_inputflds = inputfields.length;
  for (var i = 0; i < ar_inputflds; i++) {
    if (inputfields[i].type == 'textarea' && inputfields[i].value != "")
      arr_detail.push(inputfields[i].value);
  }
  $.ajax({
      url: "page5.php",
      data:"",
      success: function(result){
      $("#showpage").html(result);
      $.ajax({
        url: "data_send_session.php?page4",
        data:"&detail="+arr_detail,
        success: function(result){
      }});
    }});
}

function submit_save_data() {
  alert("OK");
  $.ajax({
      url: "page5.php",
      data:"",
      success: function(result){
      $("#showpage").html(result);
      $.ajax({
        url: "data_send_session.php?save_data",
        data:"",
        success: function(result){
      }});
    }});
}
