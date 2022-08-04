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
            <div class="container">
           
    
  
                <div style="padding: 15px" >
                  <label > Property Adresse</label>
                  <input type="text" style="color:black" name="adresse" placeholder="Write the adresse " required="">
                </div>
                
                <div style="padding: 15px" >
                  <label> Property type</label>
                  <select name="description"  required=""  style="color: black; width: 200px";>
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
                  <label> Property Image</label>
                  <input type="file" name="file">
                </div>
  
  
                <div style="padding: 15px" >
                  
                  <input type="submit" class="btn btn-success"  name="file"  >
                </div>
  
            </div>
  
  
              </form>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>