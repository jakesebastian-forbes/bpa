

// Sleep Function
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Usage example:
async function sleep_time(ms) {
    console.log("Start");
    await sleep(ms); // Sleep for 2 seconds (2000 milliseconds)
    console.log("End");
}


function refresh_element(id) {
  // console.log("refresh");
  // console.log("id : " + id)
  // card_cont = $("#" + id).parent().parent()[0].id;
  // console.log("card_cont" + card_cont)
  // $("#" + id).load(" #" + id + " > *");
  $("#" + id).load(" #" + id + " > *");
}

function refresh_parent(id) {
  console.log("refresh");
  console.log("id : " + id);
  card_cont = $("#" + id).parent().parent()[0].id;
  console.log("card_cont" + card_cont);
  // $("#" + id).load(" #" + id + " > *");
  $("#" + card_cont).load(" #" + card_cont + " > *");
}


function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}



$(document).ready(init);

// Toaster Notification
function init() {
    // Initialize Toastr
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-bottom-right",
        timeOut: "7000",
      };

    // // Event Handlers
    // $("#btnInfo").click(infoClick);
    // $("#btnSuccess").click(successClick);
    // $("#btnWarning").click(warningClick);
    // $("#btnError").click(errorClick);
  }

 

  // Toastr
  function notifyInfo(title, msg) {
    toastr.info(msg, title);
  }

  function notifySuccess(title, msg) {
    toastr.success(msg, title);
  }

  function notifyWarning(title, msg) {
    toastr.warning(msg, title);
  }

  function notifyError(title, msg) {
    toastr.error(msg, title);
  }