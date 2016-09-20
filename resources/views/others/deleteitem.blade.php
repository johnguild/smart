<input type="button" id="btn-{{$item_name.'-'.$item_id}}" value="Delete" class="btn btn-danger">
<form method="POST" id="form-{{$item_name.'-'.$item_id}}" action="{{ $item_url.'/'.$item_id }}" style="display:none;">
	{{ method_field('DELETE') }}
	{{ csrf_field() }}			
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("#btn-{{$item_name.'-'.$item_id}}").click(function(){
		   	if (confirm("Are you sure you delete the {{$item_name}}?")) {
			    $("#form-{{$item_name.'-'.$item_id}}").submit();
			} 
		});
	});
</script>