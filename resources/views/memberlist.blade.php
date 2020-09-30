@foreach($members as $member)
	<tr>
		<td>{{ $member->firstname }}</td>a
		<td>{{ $member->lastname }}</td>
		<td><a style="cursor:pointer;" class='btn btn-success edit' data-id='{{ $member->id }}' data-first='{{ $member->firstname }}' data-last='{{ $member->lastname }}'><i class='fa fa-edit'></i> Edit</a> 
			<a style="cursor:pointer;" class='btn btn-danger delete' data-id='{{ $member->id }}'><i class='fa fa-trash'></i> Delete</a>
		</td>
	</tr>
@endforeach