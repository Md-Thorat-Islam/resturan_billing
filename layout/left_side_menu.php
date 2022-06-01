<?php
/**
 * Created by PhpStorm.
 * User: Tourat
 * Date: 27-Apr-22
 * Time: 11:58 PM 87939A
 */
?>
<ul class="menu-inner py-1" id="side-menu" >
    <li class="menu-item ">
		<?php echo nav_link_dropdown("home","Dashboard","bx bx-dock-top");?>
	</li>
	<?php echo menu_head_divider("Item Manage"); ?>
    <li class="menu-item ">
		<?php $optons=
            [
               ["url"=>"category_list_table","text"=>"Category List","class"=>""],
               ["url"=>"item_add","text"=>"Add Item","class"=>""]
            ];
            echo nav_link_dropdown("","Item Manage","bx bxl-product-hunt",$optons);
        ?>
    </li>
	<?php echo menu_head_divider("Page"); ?>
	<li class="menu-item">
		<?php $options=
            [
              ["url"=>"#","text"=>"Create Student","class"=>"bx bx-dock-top"],
            ];
            echo nav_link_dropdown("#","Test","bx bx-dock-top", $options);?>
	</li>
</ul>

