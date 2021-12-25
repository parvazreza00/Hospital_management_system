<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      <style>
          label{
              display: inline-block;
              width: 200px;
          }
      </style>
    <!-- Required meta tags -->
    @include('admin.css')   
     
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">

         

          <div class="container" align="center" style="padding:100px">

           @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
          @endif

          <form action="{{url('editdoctor',$data->id)}}" method="post" enctype="multipart/form-data">

              @csrf
              <div style="padding:10px">
                  <label for="name">Doctor Name</label>
                  <input type="text" style="color:black;" name="name" value="{{$data->name}}">
              </div>

              <div style="padding:10px">
                  <label for="name">Phone</label>
                  <input type="number" style="color:black;" name="phone" value="{{$data->phone}}">
              </div>

              <div style="padding:10px">
                  <label for="name">Room no</label>
                  <input type="text" style="color:black;" name="room" value="{{$data->room}}">
              </div>

              <div style="padding:10px">
                  <label for="name">Speciality</label>
                  <input type="text" style="color:black;" name="speciality" value="{{$data->speciality}}">
              </div>

              <div style="padding:10px">
                  <label for="name">Old image</label>
                  <img height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
              </div>

               <div style="padding:10px">
                  <label for="name">Change image</label>
                  <input type="file" name="file">
              </div>

              <div style="padding:10px">
                 <input class="btn btn-success" type="Submit">
              </div>
              

          </form>

          </div>

      </div>    
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
