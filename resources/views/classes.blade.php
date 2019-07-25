<table border=1>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Teacher name</th>
        <th>Major</th>
    <th>Max student</th>
    </thead>
<tbody>
@foreach( $classes as $key =>$value)
<tr style="background:{{$value -> id % 2 ? 'yellow':'green'}}">
<td>{{$value->id}}</td>
<td>{{$value->name}}</td>
<td>{{$value->teacher_name}}</td>
<td>{{$value->major}}</td>
<td>{{$value->max_student}}</td>
</tr>
@endforeach
</tbody>
</table>