<?php
	/**
	 * Created by Tourat.
	 * User: Tourat
	 * Date: 23-May-22
	 * Time: 10:48 PM
	 */

	?>
 <div class="container-xxl flex-grow-1 container-p-y">
     <?php $pages=
	    [
            ["from"=>"Item Manage","to"=>"Add Category"]
	    ];
        echo breadcum($pages);
     
    ?>
	<!-- Basic Layout -->
  <div class="row">
      <div class="col-xl-8 position-static">
          <div class="card mb-4 ">
              <div class="card-header d-flex float-left justify-content-between align-items-center">
                  <h5 class="mb-0">Add Category</h5>
                  <a class="btn btn-block btn-pinned btn-outline-info text-black float-left card-title"
                     style="margin-left: 2px;position:relative;"href="category_list_table">Category List</a>
                  <small class="text-muted float-end">Item Category</small>
              </div>
              <div class="card-body">
                  <form action="" autocomplete="off" enctype="multipart/form-data" id=""
                        class="" >
					  <?php $input_field=
						  [
							  ["id"=>"ctgId","name"=>"ctgId","type"=>"hidden","mrgin-bottom"=>"mb-2"],
							  ["id"=>"ctgName","name"=>"ctg_Name","labelName"=>"Category Name","icon"=>"bx bx-palette ","type"=>"text", "placeholder"=>"Category Name","mrgin-bottom"=>"mb-4","required"=>"required"],
							  ["id"=>"ctgDesc","name"=>"ctg_Desc","labelName"=>"Description","icon"=>"bx bx-file-blank","type"=>"text","placeholder"=>"Description","mrgin-bottom"=>"mb-3"],
         
							  ["id"=>"ctgCode","name"=>"ctg_Code","labelName"=>"Category Code","icon"=>"bx bx-dish ", "type"=>"number","placeholder"=>"Category Code","mrgin-bottom"=>"mb-3","required"=>"required"],
                          ["id"=>"ctgFhoto","name"=>"ctgFile","labelName"=>"Category Photo","icon"=>"bx bx-image-add","type"=>"file","placeholder"=>"Category Photo","mrgin-bottom"=>"mb-3"],
						  ];
						  echo basic_icons_input_field("Item Add Form",$input_field);
					  ?>
                      <button type="button" id="btnSubmit" class="btn btn-primary">Save</button>
                  </form>
              </div>
          </div>
      </div>
      <div id="test" class="col-md-4">
              
      </div>
</div>

<!-- / Content -->
<script >
    $("#btnSubmit").on("click",function () {
        let ctgId=$("#ctgId").val();
        let ctgName=$("#ctgName").val();
        let ctgDesc=$("#ctgDesc").val();
        let ctgCode=$("#ctgCode").val();
        let file_data = $('#ctgFhoto').prop('files')[0];
        let form_data = new FormData();
        form_data.append('file', file_data);
        // alert("Tets"+form_data);
        $.ajax
        ({
            url: 'pages/category/require/insert.php',
         
            data: {'ctgId':ctgId,'ctgName':ctgName,'ctgDesc':ctgDesc,'ctgCode':ctgCode},
            type: 'post',
            success: function(res)
            {
                 // alert(php_script_response);
                $("#test").html(res)
            }
        });
    });
</script>
