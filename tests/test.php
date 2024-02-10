<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Retrieval</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    <script src="../js-css/db_operations_ajax.js"></script>
</head>
<body>

<button onclick="getData('SELECT * FROM project')">Fetch Data</button>
<div id="result"></div>

</body>
<script>


//   function getData(query) {
//     $.ajax({
//         type: "POST",
//         url: "../php/get_data.php",
//         data: { query: query },
//         success: function (response) {
//             // Parse JSON and display the result
//             var data = JSON.parse(response);
//             jsonData = data;
//             // displayResult(data);
//             console.log(data)
//             return jsonData;

//         },
//         error: function (error) {
//             console.log("Error:", error);
//         }
//     });
// }

// function displayResult(data) {
//     // Display the result in the 'result' div
//     var resultDiv = document.getElementById('result');
//     resultDiv.innerHTML = '<pre>' + JSON.stringify(data, null, 2) + '</pre>';
// }


function getData(query, successCallback, errorCallback) {
    $.ajax({
        type: "POST",
        url: "../php/get_data.php",
        data: { query: query },
        success: function (response) {
            // Parse JSON and execute the success callback with the data
            var data = JSON.parse(response);
            successCallback(data);
        },
        error: function (error) {
            // Execute the error callback with the error
            errorCallback(error);
        }
    });
}
// Example usage

var current_result;

result = getData(
    "SELECT * FROM project",
    function(successValue) {
        console.log("Success:", successValue);
        current_result = successValue;
        // return successValue;
    },
    function(error) {
        console.log("Error:", error);
    }
);

// let result = getData('SELECT * FROM project');

console.log("result var : ",result)


// console.clear();


select_ajax("building_official","`status` = 'active'")




</script>
</html>
