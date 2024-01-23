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
      console.log("dataResult-success" + dataResult);
      // return dataResult;
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
    data: {
      action: "select",
      table: table,
      condition: condition,
    },
    success: function (dataResult) {
      // console.log("success : ",dataResult);
      console.log(JSON.parse(dataResult));
    },
    error: function (dataResult) {
      console.log(dataResult);
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
            console.log(dataResult)
              resolve("SUCCESS");
          },
          error: function (dataResult) {
            console.log(dataResult)

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
      return "success";
    },
    error: function (dataResult) {
      console.log(dataResult);
    },
  });
}



function send_email(receiver_email,receiver_name,subject,body){
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


