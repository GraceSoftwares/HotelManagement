<div class="table-responsive">
	<table id="tax_table" class="display table table-striped table-hover" cellspacing="0" width="100%">
		<thead>
        <th class="sorting_asc" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="ID: activate to sort column descending" 
            aria-sort="ascending" 
            style="width: 60px;">ID</th>

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
            aria-label="cgstpct: activate to sort column ascending" 
            style="width: 30px;">CGST(%)</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="cgstamt: activate to sort column ascending" 
            style="width: 40px;">CGST</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="sgstpct: activate to sort column ascending" 
            style="width: 30px;">SGST(%)</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="sgstamt: activate to sort column ascending" 
            style="width: 56px;">SGST</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Extra: activate to sort column ascending" 
            style="width: 30px;">Additional Cost</th>

            <th class="sorting" 
            tabindex="0" 
            aria-controls="basic-datatables" 
            rowspan="1" 
            colspan="1" 
            aria-label="Price: activate to sort column ascending" 
            style="width: 30px;">Total Price</th>

		</thead>
		<tfoot>
		</tfoot>
		<tbody>
            <?php
                if(!$results){
                    echo 'No Results Found';
                }
                else{
                    foreach($results as $data) {
                        echo '<tr role="row" >
                            <td class="sorting_1">'.anchor('Controller/presenter/'.$data->id.'', ''.$data->id.'').'</td>
                            <td>'.$data->name.'</td>
                            <td>'.$data->cgstpct.'</td>
                            <td>'.$data->cgstamt.'</td>
                            <td>'.$data->sgstpct.'</td>
                            <td>'.$data->sgstamt.'</td>
                            <td>'.$data->additionalprice.'</td>
                            <td>'.$data->price.'</td>
                            </tr>';
                    }
                }
            ?>  
		</tbody>
	</table>
</div>

<script>
    $('#tax_table').DataTable();
</script>