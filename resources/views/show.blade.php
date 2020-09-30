@extends('app')

@section('content')
<h1 class="page-header text-center">Laravel Crud Operation</h1>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h2>Members Table
			<button type="button" id="add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Member</button>
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-bordered table-responsive table-striped">
			<thead>
				<th>Fisrtname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
			<tbody id="memberBody">
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
	
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
		
			showMember();
		
			$('#add').click(function(){
				$('#addnew').modal('show');
				$('#addForm')[0].reset();
			});

			$('#addForm').on('submit', function(e){
				e.preventDefault();
				var form = $(this).serialize();
				var url = $(this).attr('action');
				$.ajax({
					type: 'POST',
					url: url,
					data: form,
					dataType: 'json',
					success: function(){
						$('#addnew').modal('hide');
						showMember();
					}
				});
			});
			
			$(document).on('click', '.delete', function(){
				var id = $(this).data('id');
				$('#deletemodal').modal('show');
				$('#deletemember').val(id);
			});
			
			$('#deletemember').click(function(){
				var id = $(this).val();
				$.post("{{ URL::to('delete') }}",{id:id}, function(){
					$('#deletemodal').modal('hide');
					showMember();
				})
			});
			
			$(document).on('click', '.edit', function(){
				var id = $(this).data('id');
				var firstname = $(this).data('first');
				var lastname = $(this).data('last');
				$('#editmodal').modal('show');
				$('#firstname').val(firstname);
				$('#lastname').val(lastname);
				$('#memid').val(id);
			});

			$('#editForm').on('submit', function(e){
				e.preventDefault();
				var form = $(this).serialize();
				var url = $(this).attr('action');
				$.post(url,form,function(data){
					$('#editmodal').modal('hide');
					showMember();
				})
			});
		});

		function showMember(){
			$.get("{{ URL::to('show') }}", function(data){
				$('#memberBody').empty().html(data);
			})
		}
	</script>
@endsection