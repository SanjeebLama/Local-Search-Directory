<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Advertisement</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
</head>
<body>
    
<h1>Create Advertisement Post</h1>
{{-- @if (count($errors) > 0)
<div class="alert alert-danger">
 Upload Validation Error<br><br>
 <ul>
  @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif --}}

{{-- <form action="{{ route('devservice.store')}}" method="post" enctype="multipart/form-data">
    @csrf --}}
    <div class="container">
        <div class="jumbotron">
        <form method="post" action="{{route('addimage')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
      <div class="form-group">AdvPostsController <br/>
          <label for="title"> Title</label>
          <input type="text" class="form-control" name="title" placeholder="title">
          <br/>
          <input type="text" class="form-control" name="priority" placeholder="priority">
          <input type="number" class="form-control" name="priorityID" placeholder="priorityID">

      </div>

      <div class="form-group">
        <br/>
        <textarea cols="200" rows="10" placeholder="intro" name="intro" id="article-ckeditor"></textarea>
        
        <br/>
    </div>
      <div class="form-group">
          <br/>
          <textarea cols="200" rows="10" placeholder="body" name="body" id="article-ckeditor"></textarea>
          <br/>
      </div>
      <div class="form-group">
        <br/>
        <input type="text" class="form-control" name="portfolio" placeholder="portfolio">

        <input type="text" class="form-control" name="video" placeholder="video link">
        
        <br/>
    </div>
      <div class="form-group">
        <table class="table">
         <tr>
          <td width="40%" align="right"><label>Select File for Upload</label></td>
          <td width="30"><input type="file" name="image" /></td>
          <td width="30%" align="left"><input type="submit" name="submit" class="btn btn-primary" value="Upload"></td>
         </tr>
         <tr>
          <td width="40%" align="right"></td>
          <td width="30"><span class="text-muted">jpg, png, gif</span></td>
          <td width="30%" align="left"></td>
         </tr>
        </table>
       </div>
       
        </div>
    </div>
</form>  
</body>
</html>
