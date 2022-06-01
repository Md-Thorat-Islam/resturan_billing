<?php
	/**
	 * Created by PhpStorm.
	 * User: Tourat
	 * Date: 22-May-22
	 * Time: 9:54 PM
	 */
	?>
<div class="container-xxl flex-grow-1 container-p-y">
    <?php
        $pages=
            [
                ["from"=>"Item Manage ","to"=>"Item Add"]
               
            ];
        echo breadcum($pages);?>
	<!-- Basic Layout -->
    <div class="col-xl-8">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Item Add</h5>
                <small class="text-muted float-end">Item Add</small>
            </div>
            <div class="card-body">
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data" id="" class="" >
                    <?php
                        $input_field=[
                                ["id"=>"itemName","labelName"=>"Item Name","icon"=>"bx bx-user","type"=>"text","placeholder"=>"Item Name","mrgin-bottom"=>"mb-4"],
	                        ["id"=>"itemgg","labelName"=>"Item Name vv","icon"=>"bx bx-user","type"=>"text","placeholder"=>"Item Name","mrgin-bottom"=>"mb-3"]
                        ];
                        
                        echo basic_icons_input_field("Item Add Form",$input_field);?>
                   
                    <button type="submit" class="btn btn-primary justify-content-end">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
