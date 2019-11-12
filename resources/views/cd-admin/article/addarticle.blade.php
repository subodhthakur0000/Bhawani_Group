@extends('cd-admin.home-master')

@section('page-title')  
Add Article
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Article
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Article</a></li>
        <li class="active">Add Article</li>
      </ol>
    </section>


<section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Add Article</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('storearticle')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              
              <label for="Image"> Image</label>
              <div class="text text-danger">{{$errors->first('image')}}</div>
              <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
            </div>  

            <div class="form-group">
              <label for="Alternative Image Name" > Alternative Image Name</label>
              <div class="text text-danger">{{$errors->first('altimage')}}</div>
              <input type="textarea" class="form-control" name="altimage" id="altimage" value="{{old('altimage')}}" >
            </div>

            <div class="form-group">
              
              <label for="title" >Title</label>
              <div class="text text-danger">{{$errors->first('title')}}</div>
              <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" >
            </div>

            <div class="form-group">
              
              <label for="description" > Description</label>
              <div class="text text-danger">{{$errors->first('description')}}</div>
              <textarea id="summernote" rows="10" cols="80" name="description" >
                {{old('description')}}
              </textarea>
            </div>
            <div class="form-group">
              
              <label for="seotitle" >SEO Title</label>
              <div class="text text-danger">{{$errors->first('seotitle')}}</div>
              <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" >
            </div>

            <div class="form-group">
              
              <label for="keywords" >SEO Keywords</label>
              <div class="text text-danger">{{$errors->first('keywords')}}</div>
              <input type="textarea" class="form-control" name="keywords" id="keywords" value="{{old('keywords')}}" >
            </div>

            <div class="form-group">
              
              <label for="seodescription" >SEO Description</label>
              <div class="text text-danger">{{$errors->first('seodescription')}}</div>
              <input type="textarea" class="form-control" name="seodescription"value="{{old('seodescription')}}">
            </div>
            <div class="form-group" >
              
              <label for="status">Status</label>
              <div class="text text-danger">{{$errors->first('status')}}</div>
               <label>
                <input type="radio" class="minimal" name="status" value="active" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
                Active
              </label>
              <label>
                <input type="radio" class="minimal" name="status" value="inactive" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
                Inactive
              </label>
            </div>
       
          
            <button class="btn btn-success pull-right" type="submit">Add Article</button>
          <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
        </form>
          
      </div>
    </div>
  </div>


</div>



</section>
</div>

      

      <!-- /.box -->


    <style type="text/css">
      .test1 
      {
        margin-left:15px;
        margin-right: 15px; 
      }
      .box1
      {
        margin-bottom: 15px;
        margin-top: 15px;
      }
    </style>
    @endsection



