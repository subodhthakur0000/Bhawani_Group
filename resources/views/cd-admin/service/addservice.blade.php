@extends('cd-admin.home-master')

@section('page-title')  
Add Service
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add Service
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Services</a></li>
        <li class="active">Add Services</li>
      </ol>
    </section>


<section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Add Services</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('storeservice')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <div class="text text-danger">{{$errors->first('image')}}</div>
              <label for="Image"> Image</label>
              <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
            </div>  

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('altimage')}}</div>
              <label for="Alternative Image Name" > Alternative Image Text</label>
              <input type="textarea" class="form-control" name="altimage" id="altimage" value="{{old('altimage')}}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('title')}}</div>
              <label for="title" >Title</label>
              <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('description')}}</div>
              <label for="description" > Description</label>
              <textarea  name="description" id="summernote">{{old('description')}}</textarea>
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('seotitle')}}</div>
              <label for="seotitle" >SEO Title</label>
              <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('seokeyword')}}</div>
              <label for="keywords" >SEO Keyword</label>
              <input type="textarea" class="form-control" name="seokeyword" id="seokeyword" value="{{old('seokeyword')}}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('seodescription')}}</div>
              <label for="seodescription" >SEO Description</label>
              <input type="textarea" class="form-control" name="seodescription" id="seodescription" value="{{old('seodescription')}}" >
            </div>

            <div class="form-group" >
              <div class="text text-danger">{{$errors->first('status')}}</div>
              <label for="status">Status</label><br>
              <label>
                <input type="radio" class="minimal" name="status" value="active" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
                Active
              </label>
              <label>
                <input type="radio" class="minimal" name="status" value="inactive" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
                Inactive
              </label>
              
              
            </div>

       
            <button class="btn btn-success pull-right" type="submit">Add Service</button>
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



