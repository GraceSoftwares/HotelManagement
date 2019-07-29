<div class="table-responsive">
	<table id="checkout-datatables" class="display table table-striped table-hover" cellspacing="0" width="100%">
		<thead>
            <th class="sorting_asc" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="ID: activate to sort column descending" 
            aria-sort="ascending" 
            style="width: 67px;">ID</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Name: activate to sort column ascending" 
            style="width: 56px;">Name</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Days: activate to sort column ascending" 
            style="width: 56px;">Days</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Price: activate to sort column ascending" 
            style="width: 56px;">Price</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="OTA: activate to sort column ascending" 
            style="width: 56px;">OTA</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Poperty: activate to sort column ascending" 
            style="width: 56px;">Property</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Guest: activate to sort column ascending" 
            style="width: 56px;">Guest</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Early: activate to sort column ascending" 
            style="width: 56px;">Early(Chargable)</th>

		</thead>
		<tfoot>
		</tfoot>
		<tbody>
            <?php
                if(!$results){
                }
                else{
                    foreach($results as $data) {
                        echo '<tr role="row" >
                            <td class="sorting_1">'.anchor('Controller/presenter/'.$data->id.'', ''.$data->id.'').'</td>
                            <td>'.$data->name.'</td>
                            <td>'.$data->totalnights.'</td>
                            <td>'.$data->totalprice.'</td>
                            <td>'.$data->gateway.'</td>
                            <td>'.$data->property.'</td>
                            <td>'.$data->noofguest.'</td>
                            <td> 50 </td>
                            </tr>';
                    }
                }
            ?>  
		</tbody>
	</table>
</div>
<script>
    $('#checkout-datatables').DataTable();
</script>