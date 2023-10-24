<?php

// check if there is an uploaded file
// if true
// show thumbnail
// hide upload
// show delete, replace
// if false
// no thumbnail or show sample/placeholder
// show upload
// hide delete,replace


function document_card($doc_group,$doc_type,$doc_type_display,){

    // $doc_type = "registry_of_deed";
    // $doc_type_display = "Deed of Sale";
    $doc_group = $doc_group;
    $doc_type = $doc_type;
    $doc_type_display = $doc_type_display;

    $land_doc = select("documents", "`doc_group` = '$doc_group' AND `type` = '$doc_type_display'");

if (mysqli_num_rows($land_doc) > 0) {
    while ($row_land_doc = mysqli_fetch_assoc($land_doc)) {

        $doc_cont = "$doc_type"."_".$row_land_doc['id'];

?>
        <div class="document-upload row border" id = "<?php echo $doc_type?>">
            <div class="col">
                <div class="preview-box"><img src="../img/bg/construction_bg.webp" alt="a balloon"></div>
            </div>
            <div class="col file-info text-overflow-ellipsis">
                <b class = ""><?php echo $row_land_doc['file_name'] ?></b>
                <p>Type : <span><?php echo $row_land_doc['type'] ?></span></p>
                <p>Date Uploaded :<span><?php echo $row_land_doc['date_uploaded']?></span></p>
                <!-- <input type="file" name="" id="<?php //echo "insert_".$doc_type?>"
                style ="display:none" onclick="insert()"> -->

                <input type="file" name="update_display" id="<?php echo "update_".$doc_type?>"
                style ="display:none" oninput="update_file('<?php echo $row_land_doc['id']?>','<?php echo $doc_type?>',this)">

                <!-- <button id="<?php //echo "upload_btn_".$doc_type?>" 
                style ="display:none" onclick="upload_btn(<?php //echo $doc_type?>)">Upload</button> -->

                <button id = "<?php echo "replace_".$doc_type?>" onclick="replace_btn('<?php echo $doc_type?>')">Replace</button>

                <button id = "<?php echo "delete_".$doc_type?>" 
                onclick="delete_btn('<?php echo $doc_type_display?>','<?php echo $row_land_doc['id']?>',this)">Delete</button>


            </div>
        </div>

    <?php
    }
} else {
    ?>


    <div class="document-upload row border" id = "<?php echo $doc_type?>">
        <div class="col">
            <div class="preview-box"><img src="../img/bg/construction_bg.webp" alt="a balloon"></div>
        </div>
        <div class="col file-info text-overflow-ellipsis">
            <b class = "">No file uploaded</b>
            <p>Type : <?php echo $doc_type_display ?></p>
            <p>Date Uploaded : N/A</p>
            <input type="file" id="<?php echo "insert_".$doc_type?>"
                 oninput="insert_file('`id`,`date_uploaded`,`doc_group`,`type`,`file`,`file_name`',  `UUID(),CURRENT_DATE(),'<?php echo $doc_group;?>','<?php echo $doc_type_display?>',`,this)" style ="display:none">

            <button id="<?php echo "upload_btn_".$doc_type?>" onclick = "upload_btn('<?php echo $doc_type?>')">Upload</button>
          
        </div>
    </div>


<?php

}
}
?>