<h1>
    Laravel Assignments
</h1>
<ul>
    @foreach ($datakeys as $data)
    <li>Name: {{$data['name']}}Age Is {{$data['age']}}</li>
    @endforeach

</ul>
