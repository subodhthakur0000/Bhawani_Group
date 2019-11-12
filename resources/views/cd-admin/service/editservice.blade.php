@extends('cd-admin.home-master')

@section('page-title')  
Edit Services
@endsection

@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
  Edit Services
  </h1>   

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Services</a></li>
        <li class="active">Edit Services</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
      
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" action= "{{url('/update/'.$ser['id'])}}" enctype="multipart/form-data" method="post">
               {{csrf_field()}}
            <div class="form-group">
              <div class="text text-danger">{{$errors->first('image')}}</div>
              <label for="Image"> Image</label>
              <input type="file" class="form-control" id="image" name="image" value="{{$ser['image']  }}">
            </div>  

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('altimage')}}</div>
              <label for="Alternative Image Name" > Alternative Image Text</label>
              <input type="textarea" class="form-control" name="altimage" id="altimage" value="{{$ser['altimage']  }}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('title')}}</div>
              <label for="title" >Title</label>
              <input type="text" class="form-control" name="title" id="title" value="{{$ser['title']  }}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('description')}}</div>
              <label for="description" > Description</label>
              <textarea  name="description" id="summernote">{!!$ser['description']  !!}</textarea>
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('seotitle')}}</div>
              <label for="seotitle" >SEO Title</label>
              <input type="text" class="form-control" name="seotitle" id="seotitle"value="{{$ser['seotitle']  }}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('seokeyword')}}</div>
              <label for="keywords" >SEO Keyword</label>
              <input type="textarea" class="form-control" name="seokeyword" id="seokeyword"value="{{$ser['seokeyword']  }}" >
            </div>

            <div class="form-group">
              <div class="text text-danger">{{$errors->first('seodescription')}}</div>
              <label for="seodescription" >SEO Description</label>
              <input type="textarea" class="form-control" name="seodescription" id="seodescription" value="{{$ser['seodescription']  }}" >
            </div>

            <div class="form-group" >
              <div class="text text-danger">{{$errors->first('status')}}</div>
              <label for="status">Status</label><br>
               <label>
                  <input type="radio" class="minimal" <?php echo $ser['status'] == 'active' ? 'checked' :  '' ?> checked name="status" value="active">Active

                </label><br>
                <label>
                  <input type="radio"  class="minimal"  <?php echo $ser['status'] == 'inactive' ? 'checked' :  '' ?> name="status" value="inactive">Inactive
                </label>
            </div>

       
       
              
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Update</button>
               </div>

    </form>
    <div class="box-footer" style="margin-left: 10px;">
    <a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
          </div>
    
            
          </div>
          <!-- /.box -->
      </div>
      
  </div>
</section>



</div>
       
@endsection