
function full_ajax(query) {
    $.ajax({
        url: "../php/db_func.php",
        type: "POST",
        cache: false,
        async: true,
        data: {
            "action": "full",
            "query": query

        },
        success: function (dataResult) {
            console.log("dataResult-success" + dataResult);
            // return dataResult;

        },
        error: function(dataResult) { 
            console.log("dataResult-failed" + dataResult);
            
        }     
    });
}



function selectElement(id, valueToSelect) {
    let element = document.getElementById(id);
    element.value = valueToSelect;
}



function insert_ajax(table, column, value) {
    $.ajax({
        url: "../php/db_func.php",
        type: "POST",
        cache: false,
        async: true,
        data: {
            "action": "insert",
            "table": table,
            "column":column,
            "value": value

        },
        success: function (dataResult) {
            console.log(dataResult);

        },
        error: function(dataResult){
            console.log(dataResult)
        }
    });
}





function update_ajax(table, column, value, condition) {
    $.ajax({
        url: "../php/db_func.php",
        type: "POST",
        cache: false,
        async: true,
        data: {
            "action": "update",
            "table": table,
            "to_update": "`" + column + "` = '" + value + "'",
            "condition": "id = '" + condition + "'"

        },
        success: function (dataResult) {
            console.log(dataResult);
            return "success";

        }
    });
}


