// function buttonClick(clicked_id) {
//   if (clicked_id == "category") {
//     var pin = $("#selectPin").val()
//     var result = null
//     $.ajax({
//       url: "curl.php",
//       type: "get",
//       async: false,
//       data: { pin: pin, method: "get" },
//       success: function(data) {
//         result = data
//         setTimeout(function() {
//           buttonClick()
//         }, 10000)
//       },
//     })
//     $("#val").text(result)
//   }
// }
$(document).ready(function() {
  function send(clicked) {
    var pin = $("#selectPin").val()
    var result = null
    $.ajax({
      url: "curl.php",
      type: "get",
      async: false,
      data: { pin: pin, method: "get" },
      success: function(data) {
        result = data
      },
    })
    $("#pinval").text(result)

    var sensor_1 = $("#sensor_1_val").val()

    var result = null
    $.ajax({
      url: "curl.php",
      type: "get",
      // dataType: "html",
      async: false,
      data: { pin: "V2", method: "get" },
      success: function(data_1) {
        result_1 = data_1
      },
    })
    $("#sensor_1_val").text(result_1)

    var sensor_2 = $("#sensor_2_val").val()

    var result = null
    $.ajax({
      url: "curl.php",
      type: "get",
      async: false,
      data: { pin: "V4", method: "get" },
      success: function(data_2) {
        result = data_2
      },
    })
    $("#sensor_2_val").text(result)
    setTimeout(function() {
      send()
    }, 20)
    if (
      (result_1 > "30" && result_1 < "300") ||
      (result > "30" && result < "300")
    ) {
      if (result > "30" && result < "300") {
        $("#alert").text("Detected Sensor 2")
        $("#detection").removeClass("card-light")
        $("#alert").css("color", "white")
        $("#detection").addClass("card-success")
      }
      if (result_1 > "30" && result_1 < "300") {
        $("#alert").text("Detected Sensor 1")
        $("#detection").removeClass("card-light")
        $("#alert").css("color", "white")
        $("#detection").addClass("card-success")
      }
      if (
        result_1 > "30" &&
        result_1 < "300" &&
        (result > "30" && result < "300")
      ) {
        $("#alert").text("Detected on Both Sensors")
        $("#detection").removeClass("card-light")
        $("#alert").css("color", "white")
        $("#detection").addClass("card-success")
      }
    } else {
      $("#alert").text("not Detected")
      $("#detection").removeClass("card-success")
      $("#alert").css("color", "white")
      $("#detection").addClass("card-light")
    }
    var a = parseInt(result)
    var b = parseInt(result_1)
    var c = a + b
    $("#distance").text(c)
  }

  send()
})
