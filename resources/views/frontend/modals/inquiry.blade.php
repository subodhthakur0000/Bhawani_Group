<!-- Modal -->
<div id="inquiryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h2 class="modal-title">Inquiry Now</h2></center>
      </div>
      <div class="modal-body col-md-10">
        <form method="POST" action="{{url('/')}}">
          <input class="form-control" type="text" name="name" placeholder="Full Name">
          <input class="form-control" type="email" name="email" placeholder="E-mail">
          <textarea class="form-control" placeholder="Your Inquiry"></textarea>
          <input type="submit" value="Send" class="custom-btn">
        </form>
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
      </div>
    </div>

  </div>
</div>