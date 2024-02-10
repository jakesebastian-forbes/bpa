function full_ajax(query) {
  $.ajax({
    url: "../php/db_func.php",
    type: "POST",
    cache: false,
    async: true,
    data: {
      action: "full",
      query: query,
    },
    success: function (dataResult) {
      // console.log("dataResult-success" + dataResult);
      console.log("full_ajax");

      console.log(query);
      console.log("Data Result:", dataResult);
      // return dataResult;
      // console.log(JSON.parse(dataResult));
    },
    error: function (dataResult) {
      console.log("dataResult-failed" + dataResult);
    },
  });
}

function selectElement(id, valueToSelect) {
  let element = document.getElementById(id);
  element.value = valueToSelect;
}

function select_ajax(table, condition) {
  $.ajax({
    url: "../php/db_func.php",
    type: "POST",
    cache: false,
    async: true,
    dataType: "json", // Specify the expected data type
    data: {
      action: "select",
      table: table,
      condition: condition,
    },
    success: function (dataResult) {
      console.log("success:", dataResult);

      // Check for server-side errors
      if (dataResult.error) {
        console.error("Server error:", dataResult.error);
      } else {
        // Process the data as needed
        console.log("Processed data:", dataResult.data);
      }
    },
    error: function (xhr, textStatus, errorThrown) {
      console.error("AJAX request failed:", textStatus, errorThrown);
    },
  });
}




function insert_ajax(table, column, value) {
  $.ajax({
    url: "../php/db_func.php",
    type: "POST",
    cache: false,
    async: true,
    data: {
      action: "insert",
      table: table,
      column: column,
      value: value,
    },
    success: function (dataResult) {
      console.log(dataResult);
    },
    error: function (dataResult) {
      console.log(dataResult);
    },
  });
}

function update_ajax(table, column, value, condition) {
  return new Promise((resolve, reject) => {
    $.ajax({
      url: "../php/db_func.php",
      type: "POST",
      cache: false,
      async: true,
      data: {
        action: "update",
        table: table,
        to_update: "`" + column + "` = '" + value + "'",
        condition: condition,
      },
      success: function (dataResult) {
        console.log(dataResult);
        resolve("SUCCESS");
      },
      error: function (dataResult) {
        console.log(dataResult);

        reject("FAILED");
      },
    });
  });
}

function delete_ajax(table, condition) {
  $.ajax({
    url: "../php/db_func.php",
    type: "POST",
    cache: false,
    async: true,
    data: {
      action: "delete",
      table: table,
      condition: condition,

      // "condition": "id = '" + condition + "'"
    },
    success: function (dataResult) {
      console.log(dataResult);
      notifySuccess("Success!", "Deleted Successfully");
      return "success";
    },
    error: function (dataResult) {
      console.log(dataResult);
      notifyError("Error!", "An error occured. Deletion unsuccessful.");
    },
  });
}

function send_email(receiver_email, receiver_name, subject, body) {
  $.ajax({
    url: "../php/db_func.php",
    type: "POST",
    cache: false,
    async: true,
    data: {
      action: "delete",
      table: table,
      condition: condition,

      // "condition": "id = '" + condition + "'"
    },
    success: function (dataResult) {
      console.log(dataResult);
      return "success";
    },
    error: function (dataResult) {
      console.log(dataResult);
    },
  });
}

function getData(occupancy_type_query, successCallback, errorCallback) {
  $.ajax({
    type: "POST",
    url: "../php/get_data.php",
    // async: false,
    data: { query: occupancy_type_query },
    success: function (response) {
      // Parse JSON and execute the success callback with the data
      var data = JSON.parse(response);
      successCallback(data);
    },
    error: function (error) {
      // Execute the error callback with the error
      errorCallback(error);
    },
  });
}
