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
                        <tr style="background-color: black;" align="center">
                            <th style="padding: 5px;">Customer Name</th>
                            <th style="padding: 5px;">Email</th>
                            <th style="padding: 5px;">Phone</th>
                            <th style="padding: 5x;">Doctor Name</th>
                            <th style="padding: 5px;">Date</th>
                            <th style="padding: 5px;">Message</th>
                            <th style="padding: 5px;">Status</th>
                            <th style="padding: 5px;">Approved</th>
                            <th style="padding: 5px;">Canceled</th>
                            <th style="padding: 5px;">Send Mail</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $appoint)
                        <tr align="left;" style="background-color: skyblue;">
                            <td align="center">{{$appoint->name}}</td>
                            <td align="center">{{$appoint->email}}</td>
                            <td align="center">{{$appoint->phone}}</td>
                            <td align="center">{{$appoint->doctor}}</td>
                            <td align="center">{{$appoint->date}}</td>
                            <td align="center">{{$appoint->message}}</td>
                            <td align="center">{{$appoint->status}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
                            </td>
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
    </div>
  </body>
</html>
