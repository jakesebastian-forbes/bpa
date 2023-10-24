<h2>Document Uploaded</h2>

<table>
    <tr>
        <th>Type</th>
        <th>File name</th>
        <th>Date Uploaded</th>
        <!-- <th>Type</th> -->
    </tr>
    <?php
    $condition = "`doc_group` = '$project_documents';";
    $doc_list = select('documents',$condition);
    if (mysqli_num_rows($doc_list) > 0) {

        while($row = mysqli_fetch_assoc($doc_list)) {
            echo "<tr>";
            echo "<td>".$row['type']."</td>";
            echo "<td>".$row['file_name']."</td>";
            echo "<td>".$row['date_uploaded']."</td>";
            echo "</tr>";


        }
    }
    
    ?>


</table>