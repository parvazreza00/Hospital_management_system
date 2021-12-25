
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">

          <div class="container" align="center" style="padding-top:80px">

          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
          @endif

              <form action="{{url('sendemail',$data->id)}}" method="post">

                  @csrf

                  <div style="padding:15px">
                      <label for="">Greeting</label>
                      <input type="text" class="text-black" name="greeting" required >
                  </div>

                  <div style="padding:15px">
                      <label for="">Body</label>
                      <input type="text" class="text-black" name="body" required>
                  </div>


                  <div style="padding:15px">
                      <label for="">Action Text</label>
                      <input type="text" class="text-black" name="actiontext" required>
                  </div>

                  <div style="padding:15px">
                      <label for="">Action Url</label>
                      <input type="text" class="text-black" name="actionurl" required>
                  </div>

                  <div style="padding:15px">
                      <label for="">End Part</label>
                      <input type="text" class="text-black" name="endpart" required>
                  </div>

                  <div style="padding:15px">
                      <input type="submit" class="btn btn-success">
                  </div>



              </form>
          </div>

      </div>


        <!-- partial -->
      <!-- @include('admin.body') -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
