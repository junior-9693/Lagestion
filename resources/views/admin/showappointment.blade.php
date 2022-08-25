<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->

        <div id="conteneur_tableau" align="center" style="padding:1px;">
            <table class="" style="center; margin-top:200px"  >
                <tr style="background-color: black" align="center" >
                    <th  >Customer Name</th>
                    <th >Email</th>
                    <th >Phone</th>
                    <th >Property</th>
                    <th >Date</th>
                    <th style="padding:10px" >Message</th>
                    <th >Status</th>
                    <th>Approved</th>
                    <th >Canceled</th>
                </tr>
            
                @foreach ($data as $appoint)
            
                <tr>
                    
                        
                    <td style="padding: 3px" align="center" >{{$appoint->name}}</td>
                    <td style="padding: 3px" align="center" >{{$appoint->email}}</td>
                    <td style="padding: 3px" align="center">{{$appoint->phone}}</td>
                    <td style="padding: 3px" align="center">{{$appoint->property}}</td>
                    <td style="padding: 3px" align="center">{{$appoint->date}}</td>
                    <td style="padding: 3px" align="center"><p>{{$appoint->message}}</p></td>
                    <td style="padding: 3px" align="center">{{$appoint->status}}</td>
                    <td style="padding: 3px" align="center">
                        <a href="{{url('approved',$appoint->id)}}" class="btn btn-success" > Approved</a>
            
                    </td>
                    <td style="padding: 3px" align="center">
                        <a href="{{url('canceled',$appoint->id)}}" class="btn btn-danger" > Canceled</a>
            
                    </td>
                    
                </tr>
                @endforeach
            
            </table>
       </div>
      </div>

    
        
     
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
 
    <!-- End custom js for this page -->
  </body>
</html>