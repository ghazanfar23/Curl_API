// Function to control LEDs
// session_start();
function buttonClick(clicked_id) {
  if (clicked_id == "1") {
    $.get("curl.php", {
      pin: "D13",
      state: "255",
      method: "update"
    });
  }

  if (clicked_id == "2") {
    $.get("curl.php", {
      pin: "D13",
      state: "0",
      method: "update"
    });
    var val = $_SESSION["response"];
    $("#submitter").text(val);
  }

  if (clicked_id == "3") {
    $.get("curl.php", {
      pin: "D13",
      //   state: "1",
      method: "get"
    });
  }

  if (clicked_id == "4") {
    $.get("curl.php", {
      pin: "8",
      state: "0"
    });
  }
}
