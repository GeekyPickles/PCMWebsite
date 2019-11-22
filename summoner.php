<?php
  include "eventdata.php";

  if (isset($_GET["events"])) {
    header("Content-Type: application/json");
    $requestedEvent = $_GET["events"];

    // if ($requestedEvent === "event1") {
    //   echo json_encode($events["event1"]);
    // }

    switch ($requestedEvent) {
      case "event1":
        echo json_encode($events["event1"]);
        break;
      case "event2":
        echo json_encode($events["event2"]);
        break;
      case "event3":
        echo json_encode($events["event3"]);
        break;
      case "all":
        echo json_encode($events);
        break;
      default:
        echo "INVALID CALL";
    }
  }
 ?>
