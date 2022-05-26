  $.ajax({
    url: "page1_1.php",
    data:"",
    success: function(result){
    $("#page2").html(result);
  }});


    function checktype1() {

    var type1 = document.getElementById("type1");
    var gender1_th = document.getElementById("gender1_th");
    var gender1_en = document.getElementById("gender1_en");
    var name1 = document.getElementById("name1");
    var lastname1 = document.getElementById("lastname1");
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
      if(type1.checked == true){
        if(
          gender1_th.value != "" && name1_th.value != "" &&
          name1_en.value != "" && lastname1_th.value != "" &&
          lastname1_en.value != "" && housenumber1.value != "" &&
          group1.value != "" && zip_code1.value != "" &&
          phone1.value != "" && email1.value != ""
          ){
           document.getElementById("next_page2").disabled = false;
        }
      document.getElementById("page2").hidden = false;
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
      }
    }
    function checktype2() {
      var type2 = document.getElementById("type2");
      if(type2.checked == true){
          document.getElementById("next_page2").disabled = true;
          document.getElementById("page2").hidden = false;
          document.getElementById("gender2_th").selectedIndex = 0;
          document.getElementById("gender2_en").selectedIndex = 0;
          document.getElementById("name2_th").value = null;
          document.getElementById("name2_en").value = null;
          document.getElementById("lastname2_th").value = null;
          document.getElementById("lastname2_en").value = null;
          document.getElementById("housenumber2").value = null;
          document.getElementById("group2").value = null;
          document.getElementById("road2").value = null;
          document.getElementById("alley2").value = null;
          document.getElementById("phone2").value = null;
          document.getElementById("email2").value = null;
          document.getElementById("phone2").value = null;
          document.getElementById("email2").value = null;
          document.getElementById("other2").value = null;
          document.getElementById("province2").selectedIndex = 0;
          document.getElementById("province2").disabled = false;
          document.getElementById("district2").selectedIndex = 0;
          document.getElementById("district2").disabled = true;
          document.getElementById("sub_district2").selectedIndex = 0;
          document.getElementById("sub_district2").disabled = true;
          document.getElementById("zip_code2").selectedIndex = -1;
          document.getElementById("zip_code2").disabled = true;
      }
    }
