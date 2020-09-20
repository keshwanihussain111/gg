@extends('layout/base')
@section('title', 'Show Data')

@section('page-title', 'Geeta Graphic')
@section('main-content')
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">


			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>NO</th>
							<th>Customer Name:</th>
							<th>Partical</th>
							<th>Matirial</th>
							<th>Size</th>
							<th>Quantity</th>
							<th>Rate</th>
							<th>Total Amount</th>
							<th>Credit Amount:</th>
							<th>Debit Amount:</th>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach ($datas as $data)
						<tr>
							<td>{{ $loop->index+1 }}</td>
							<td>{{ $data->name_of_party }}</td>
							<td>{{ $data->g_particular }}</td>
							<td>{{ $data->matirial }}</td>
							<td>{{ $data->size }}</td>
							<td>{{ $data->quantity }}</td>
							<td>{{ $data->rate }}</td>
							<td>{{ $data->t_amount }}</td>
							<td>{{ $data->credit_amount }}</td>
							<td>{{ $data->debit_amount }}</td>
							<td><a href="<?php echo 'editData/'.$data->g_id ?>"><i class="fa fa-edit"></i></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script>
    $(function () {

        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
          });
    });
  </script>

@endsection
