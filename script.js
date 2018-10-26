// Function to control LEDs
// session_start();
// var interval

function buttonClick(clicked_id) {
  if (clicked_id == "category") {
    var pin = $("#selectPin").val()

    // $("#dateval").text(startDate)
    var result = null
    //  var scriptUrl = "somefile.php?name=" + name;
    $.ajax({
      url: "curl.php",
      type: "get",
      // dataType: "html",
      async: false,
      data: { pin: pin, method: "get" },
      success: function(data) {
        result = data
        setTimeout(function() {
          buttonClick()
        }, 10000)
      },
      // complete: function(data) {
      //   // Schedule the next
      // },
    })

    // alert(result)
    $("#val").text(result)
    // console.log(data)
  }
}
$(document).ready(function() {
  // function startClick(clicked_id) {

  function send(clicked) {
    var pin = $("#selectPin").val()
    if (clicked == "start") {


    // $("#dateval").text(startDate)
    var result = null
    //  var scriptUrl = "somefile.php?name=" + name;
    $.ajax({
      url: "curl.php",
      type: "get",
      // dataType: "html",
      async: false,
      data: { pin: pin, method: "get" },
      success: function(data) {
        result = data

        // setTimeout(function() {
        //   send()
        // }, 2000)
      },
    })
    $("#D13val").text(result)

  
  // send()
  // function sensor_1() {

  var pin_2 = $("#sensor_1_val").val()

  var result = null
  //  var scriptUrl = "somefile.php?name=" + name;
  $.ajax({
    url: "curl.php",
    type: "get",
    // dataType: "html",
    async: false,
    data: { pin: "V2", method: "get" },
    success: function(data_1) {
      result_1 = data_1
      if ((result_1 > "30") && (result_1 < "50")) {
        $("#alert").text("Hit");
      }
      else{
        $("#alert").text("Not Hit");
    
      }
      // setTimeout(function() {
      //   sensor_1()
      // }, 50)
    },
  })
  $("#sensor_1_val").text(result_1)
// }
// sensor_1()

// function sensor_2() {

  var sensor_2 = $("#sensor_2_val").val()

  var result = null
  //  var scriptUrl = "somefile.php?name=" + name;
  $.ajax({
    url: "curl.php",
    type: "get",
    // dataType: "html",
    async: false,
    data: { pin: "V4", method: "get" },
    success: function(data_2) {
      result = data_2
      // setTimeout(function() {
      //   sensor_2()
      // }, 100)
    },
    
  })
  $("#sensor_2_val").text(result)
// }
// sensor_2()
setTimeout(function() {
  send()
}, 200)
  }
  // $("#alert").text("Hit");


      // var sensor_1= data_1;

}
send()

// else{
//   return(0);
// }

 
})
