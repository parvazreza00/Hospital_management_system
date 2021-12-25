<!DOCTYPE html>
<html lang="en">
  <head>
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

		    <div align="left" style="padding-top: 80px; ">

                <table>
                    <thead>
                        <tr style="background-color: black;">
                            <th style="padding: 10px;">Doctor Name</th>
                            <th style="padding: 10px;">Phone no</th>
                            <th style="padding: 10px;">Speciality</th>
                            <th style="padding: 10x;">Room no</th>
                            <th style="padding: 10px;">Image</th>
                            <th style="padding: 10px;">Delete</th>
                            <th style="padding: 10px;">Update</th>

                        </tr>
                    </thead>

                    <tbody>

                      @foreach($data as $doctors)
						              <tr align="center;" style="background-color: skyblue;">
                            <td>{{$doctors->name}}</td>
                            <td>{{$doctors->phone}}</td>
                            <td>{{$doctors->speciality}}</td>
                            <td>{{$doctors->room}}</td>
                            <td><img height="100px" width="100px" src="doctorimage/{{$doctors->image}}"></td>
                            <td><a onclick="return confirm('Are you sure to delete this?')" href="{{url('deletedoctor',$doctors->id)}}" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{url('updatedoctor',$doctors->id)}}" class="btn btn-primary">Update</a></td>
                          </tr>
                        @endforeach
                        
                    </tbody>
                </table>


            </div>


	  </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
