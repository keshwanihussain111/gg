@extends('layout/base')
@section('title', 'Home')
@section('page-title', 'Geeta Graphic')
@section('main-content')
<form class="form-horizontal form-material" method="post" action="{{ url('/updateData') }}" >
	@csrf
	<input type="hidden" name="g_id" value="{{ $data[0]->g_id }}">
	<div class="row form-group">
		<div>
			<label class="col-md-2">Customer Name:</label>
			<div class="col-md-4">
				<input style="border: 2px solid #5f1717;" value="{{ $data['0']->name_of_party }}" type="text" name="customer_name" class="form-control form-control-line" >
			</div>
		</div>
		<div>
			<label class="col-md-2">Partical:</label>
			<div class="col-md-4">
				<input style="border: 2px solid #5f1717;" value="{{ $data[0]->g_particular }}" type="text" name="partical" class="form-control form-control-line"  >
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div>
			<label class="col-md-1">Matirial:</label>
			<div class="col-md-3">
				<input style="border: 2px solid #5f1717;" value="{{ $data[0]->matirial }}" type="text" name="matirial" class="form-control form-control-line"  >
			</div>
		</div>
		<div>
			<label class="col-md-1">Size:</label>
			<div class="col-md-3">
				<input style="border: 2px solid #5f1717;" value="{{ $data[0]->size }}" type="text" name="size" 
			class="form-control form-control-line"> </div>
		</div>
		<div>
			<label class="col-md-1">Quantity:</label>
			<div class="col-md-3">
				<input style="border: 2px solid #5f1717;" value="{{ $data[0]->quantity }}" type="text" id="quantity" name="quantity"  
			class="form-control form-control-line"> </div>
		</div>
	</div>
	
	<div class="row form-group">
		<div>
			<label class="col-md-2">Rate:</label>
			<div class="col-md-2">
				<input style="border: 2px solid #5f1717;" id="rate" value="{{ $data[0]->rate }}"  type="number" name="rate" 
				class="form-control form-control-line"> </div>
		</div>
	
		<div>
			<label class="col-md-2">Total Amount:</label>
			<div class="col-md-2">
				<input style="border: 2px solid #5f1717;" value="{{ $data[0]->t_amount }}" type="number" id="t_amount" name="total_amount" 
				class="form-control form-control-line" readonly> </div>
		</div>
	</div>
	
	<div class="row form-group">
		
		<div>
			<label class="col-md-2">Credit Amount:</label>
			<div class="col-md-2">
				<input style="border: 2px solid #5f1717;" type="number" value="{{ $data[0]->credit_amount }}" id="credit" name="credit" 
			class="form-control form-control-line"> </div>
		</div>
		<div>
			<label class="col-md-2">Debit Amount:</label>
			<div class="col-md-2">
				<input style="border: 2px solid #5f1717;" type="number" value="{{ $data[0]->debit_amount }}" id="debit" name="debit" 
			class="form-control form-control-line " readonly/> </div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<button class="btn btn-success"> SAVE</button>
		</div>
	</div>
</form>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('#quantity, #rate').on("paste keyup", function () {
	        var dp = (parseInt($("#quantity").val()) * parseInt($("#rate").val()));
	        $("#t_amount").val((isNaN(dp) ? '' : dp));
   	});
	$("#credit, #t_amount").keyup(function(event) {
		
       var t = $('#t_amount').val()
      	var credit = $('#credit').val();
       var debit = t - credit;
	        $("#debit").val((isNaN(debit) ? '' : debit));

	});
</script>
@endsection