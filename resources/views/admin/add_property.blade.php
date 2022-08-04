<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
    </style>
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
          <div class="container" align="center" style="padding-top: 100px">

            @if (session()->has('message'))
            <div class="alert alert-success">
              <button type="button"  class="close" data-dissmiss="alert"></button>
              
              {{session()->get('message')}}
  
            </div>
            @endif

                <form  class="row g-3" action="{{url('upload_property')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px" >
                  <label > Property Adresse</label>
                  <input type="text" style="color:black" name="adresse" placeholder="Write the adresse " required="">
                </div>
                
                <div style="padding: 15px" >
                  <label> Property type</label>
                  <select name="type"  required=""  style="color: black; width: 200px";>
                    <option value="maison">--select--</option>
                    <option value="maison">Maison</option>
                    <option value="appartement">Appartement</option>
                   
                  </select>
                  
                </div>
  
  
                <div style="padding: 15px" >
                  <label> Property Description</label>
                  <input type="text" style="color:black" name="description" placeholder="Write the description of property " required="">
                 </div>

                 <div style="padding: 15px" >
                    <label > Owner Name</label>
                    <input type="text" style="color:black" name="name" placeholder="Write the name " required="">
                  </div>
                  
                  <div style="padding: 15px" >
                    <label>Owner Phone</label>
                    <input type="text" style="color:black" name="number" placeholder="Write the number " required="">
                  </div>
                  <div style="padding: 15px" >
                    <label>Owner Adress</label>
                    <input type="text" style="color:black" name="address" placeholder="Write the adress " required="">
                  </div>
                  <div style="padding: 15px" >
                    <label>Owner Email</label>
                    <input type="text" style="color:black" name="email" placeholder="Write the email " required="">
                  </div>
  
              
  
                <div style="padding: 15px" >
                  <label> Property Image</label>
                  <input type="file" name="file">
                </div>
  
  
                <div style="padding: 15px" >
                  
                  <input type="submit" class="btn btn-success"  name="file"  >
                </div>
            </form>
  
            </div>
        </div>
    </div>
  
              
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>