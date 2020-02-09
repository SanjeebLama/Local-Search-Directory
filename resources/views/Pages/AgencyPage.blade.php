<h1>This is where search results are display</h1>



<div class="container">
    @if(isset($agencies))
        <p> The Search results for your query <b></p>
    <h2>Sample User details</h2>
    <table class="table table-striped" border="5" >
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Body</th>
                <th>priority</th>
                <th>image</th>


            </tr>
        </thead>
        <tbody>
            @foreach($agencies as $agency)
            <tr>
                <td>{{$agency->id}}</td>
                <td>{{$agency->title}}</td>
                <td>{{$agency->body}}</td>
                <td>{{$agency->priority}}</td>
            <td><img src="{{asset('uploads/highlights/'.$agency->image)}}" width="100px;" height="100px;" alt="image "></td>


            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(@isset($message))
<p>{{$message}}</p>
        
    @endif
</div>