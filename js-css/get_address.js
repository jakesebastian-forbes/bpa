
var ph_location = (function () {
     // var region = null;
     $.ajax({
       'async': false,
       'global': false,
       'url': "philippine_provinces_cities_municipalities_and_barangays_2019v2.json",
       'dataType': "json",
       'success': function (data) {
         ph_location = data;
       }
     });
     return ph_location;
   })();



   // var region_count = Object.keys(ph_location).length;
   

var selected_region,selected_province,selected_city,selected_barangay;

//select region
 //load province
   //load city
     //load barangay

function load_region(){
  // $('#input_region')
  $('#input_region').children().remove();
for (var i = 1; i <= Object.keys(ph_location).length; i++) { //load all regions
 $("#input_region").append('<option value="' + i + '" >' + ph_location[i].region_name + '</option>');
}

}

function select_region(){
 selected_region = $('#input_region')[0].value;
 load_province();
}

function load_province(){

 // ph_location[1].province_list
 $('#input_province').children().remove();
for (var i = 1; i <= Object.keys(ph_location[selected_region].province_list).length; i++) { //load all regions
 $("#input_province").append('<option value="' + i + '" >' + Object.keys(ph_location[selected_region]['province_list'])[i-1] + '</option>');
}

select_province();

}

function select_province(){

 selected_province = $("#input_province option:selected" ).text();
 load_city();

}

function load_city(){
 $('#input_city').children().remove();
for (var i = 1; i <= Object.keys(ph_location[selected_region].province_list[selected_province].municipality_list).length; i++) { //load all regions
 $("#input_city").append('<option value="' + i + '" >' + Object.keys(ph_location[selected_region].province_list[selected_province].municipality_list)[i-1] + '</option>');
}
select_city();


}

function select_city(){

 selected_city = $("#input_city option:selected" ).text();
 load_barangay();
}

function load_barangay(){
 $('#input_barangay').children().remove();
for (var i = 1; i <= Object.keys(ph_location[selected_region].province_list[selected_province].municipality_list[selected_city].barangay_list).length; i++) { //load all regions
 $("#input_barangay").append('<option value="' + i + '" >' + ph_location[selected_region].province_list[selected_province].municipality_list[selected_city].barangay_list[i-1] + '</option>');
}
}

function select_barangay(){
 selected_barangay = $("#input_barangay option:selected" ).text();

}

//$( "#input_region option:selected" ).text();

 // ****  do on load 
// getMonth(); // get date from selected month

// for (var i = currYear - 16; i >= currYear - 100; i--) { //** / load year available for signup
//    $("#input_bday_year").append('<option value="' + i + '" >' + i + '</option>');
//  }


// for (var i = 1; i <= Object.keys(ph_location).length; i++) { //load all regions
//  $("#input_region").append('<option value="' + i + '" >' + ph_location[i].region_name + '</option>');
// }


load_region();
select_region();
select_province();
select_city();
select_barangay();


function toggle_viz(){
 var state = $("#input_password")[0].getAttribute("type");

 if(state == 'password'){
   $("#input_password")[0].setAttribute("type","text");
 }
 else{
   $("#input_password")[0].setAttribute("type","password");
 }

}
