
<!DOCTYPE html>
<html lang="en">
  <head>
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

              <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

                  @csrf

                  <div style="padding:15px">
                      <label for="">Doctor Name : </label>
                      <input type="text" class="text-black" name="name" placeholder="Write Name" required >
                  </div>

                  <div style="padding:15px">
                      <label for="">Phone Number: </label>
                      <input type="number" class="text-black" name="number" placeholder="Write Number" required>
                  </div>

                  <div style="padding:15px">
                      <label for="">Speciality : </label>
                      <select name="speciality" id="" class="text-black" style="width:200px;">
                          <option>--select--</option>
                          <option value="skin">skin</option>
                          <option value="eye">eye</option>
                          <option value="nose">nose</option>
                          <option value="tongue">tongue</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                      </select>
                  </div>

                  <div style="padding:15px">
                      <label for="">Room No.: </label>
                      <input type="number" class="text-black" name="room" placeholder="Write Room No." required>
                  </div>

                  <div style="padding:15px">
                      <label for="">Doctor Image: </label>
                      <input type="file" name="file" required>
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
