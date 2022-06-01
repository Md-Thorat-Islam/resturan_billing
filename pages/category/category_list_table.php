<?php
	/**
	 * Created by Tourat.
	 * User: Tourat
	 * Date: 24-May-22
	 * Time: 12:04 AM
	 */
	?>
<div class="container-xxl flex-grow-1 container-p-y">
	<?php $pages=
		[
			["from"=>"Item Manage","to"=>"Item Category List"]
		];
		echo breadcum($pages);
	?>
<div class="card w-5">
	<div class="card-header">
		<h5 class="card-title" style="float: left; position: absolute;">Category List Table</h5>
		<a class="btn btn-block btn-pinned btn-outline-warning text-black float-left card-title" style="margin-left: 820px;
		position:
		relative;"
           href="add_category">Add Category</a>
	</div>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead class="table-active">
			<tr>
				<th>Project</th>
				<th>Client</th>
				<th>Status</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody class="table-border-bottom-0">
			<tr>
				<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
				<td>Albert Cook</td>
				<td><span class="badge bg-label-primary me-1">Active</span></td>
				<td>
					<div class="dropdown">
						<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
							<i class="bx bx-dots-vertical-rounded"></i>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="javascript:void(0);"
							><i class="bx bx-edit-alt me-1"></i> Edit</a
							>
							<a class="dropdown-item" href="javascript:void(0);"
							><i class="bx bx-trash me-1"></i> Delete</a
							>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
				<td>Barry Hunter</td>
				
				<td><span class="badge bg-label-success me-1">Completed</span></td>
				<td>
					<div class="dropdown">
						<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
							<i class="bx bx-dots-vertical-rounded"></i>
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="javascript:void(0);"
							><i class="bx bx-edit-alt me-1"></i> Edit</a
							>
							<a class="dropdown-item" href="javascript:void(0);"
							><i class="bx bx-trash me-1"></i> Delete</a
							>
						</div>
					</div>
				</td>
			</tr>
			
			</tbody>
		</table>
	</div>
</div>
</div>
<!--/ Bootstrap Table with Header Dark -->
