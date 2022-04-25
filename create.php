<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/freeboon.css" rel="stylesheet" type="text/css" />
   <style>
   form{
 margin: 20px 0;
 }
 form input, button{
padding: 5px;
}
table{
 width: 100%;
 margin-bottom: 20px;
border-collapse: collapse;
}
table, th, td{
border: 1px solid #cdcdcd;
}
table th, table td{
padding: 10px;
text-align: left;
}
   </style>
   </head>
   <body style="background-color:#2B3856;color:white;">
      <nav class="navbar navbar-expand-md bg-faded justify-content-center" style="background-color:#f8f9fa;">
         <div class="container-fluid" >
         <a class="navbar-brand d-flex  me-auto">
         <img src="img/logo.png" alt="FreeBoon Logo" style="width:250px;" height="45px;" /> </a>
         <a class="nav-link" href="create.php">Create</a>
         <a class="nav-link" href="#">View Generated Content</a>
         <a class="nav-link" href="#">Edit Generated Content</a>
         <a class="nav-link" href="#">About The Tool</a>
      </nav>
      <!-- Begin Page Content -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-top:10px;">
         <li class="nav-item">
            <a class="nav-link active" id="pills-menubar-tab" data-toggle="pill" href="#pills-1" role="tab">Menubar</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="pills-about_us-tab" data-toggle="pill" href="#pills-2" role="tab">About Us</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="pills-services-tab" data-toggle="pill" href="#pills-3" role="tab">Services</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="pills-teams-tab" data-toggle="pill" href="#pills-4" role="tab">Teams</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" id="pills-contact_forms-tab" data-toggle="pill" href="#pills-5" role="tab">Contact Forms</a>
         </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
         <!--Menubar-->
         <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-menubar-tab">
            <div class="container d-flex align-items-center " style="margin-top:10px;">
               <form>
                  <div>
                     <h3 style="color:#ff0735eb;">Configure Menubar</h3>
                  </div>
                  <div class="mb-3" style="margin-top:30px;">
                     <label for="select_menubar_side" class="form-label">Menubar Side</label>
                     <select id="select_menubar_side" class="form-select">
                        <option>Left</option>
                        <option>Right</option>
                        <option>Center</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label class="form-check-label" for="logo_required">Logo Required  </label>
                     <input type="checkbox" class="form-check-input" id="logo_required" required>
                  </div>
                  <div class="mb-3">
                     <label for="logofile" class="form-label">Choose Logo</label>
                     <input class="form-control form-control-sm" id="logofile" type="file" name="myImage" accept="image/png, image/gif, image/jpeg" />
                  </div>
                  <div class="mb-3">
                     <label for="websitename" class="form-label">Website Name</label>
                     <input type="textbox" class="form-control" id="websitename" aria-describedby="websiteHelp" required>
                  </div>
                  <div class="mb-3">
                     <label for="menu_items" class="form-label">Menu Items</label>
                     <textarea class="form-control" id="menu_items" placeholder="max 4000 chars" rows="5" required></textarea>
                  </div>
                  <div id="btnNext">
                     <a class="btn btn-primary btnNext">Next</a>
                  </div>
            </div>
            </form>
         </div>
         <!--About Us-->
         <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-about_us-tab">
            <div class="container d-flex align-items-center" style="margin-top:10px;">
               <form>
                  <div>
                     <h3 style="color:#ff0735eb;">Configure About Us</h3>
                  </div>
                  <div class="mb-3" style="margin-top:30px;">
                     <label for="about_us_select" class="form-label">About Us</label>
                     <select id="about_us_select" class="form-select">
                        <option></option>
                        <option></option>
                        <option></option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="about_us_textarea" class="form-label">Textarea</label>
                     <textarea class="form-control" id="about_us_textarea" placeholder="Max 4000 chars" rows="5"  maxlength="4000" required></textarea>
                  </div>
                  <div class="navbuttons">
                     <div id="btnPrevious">
                        <a class="btn btn-primary btnPrevious">Previous</a>
                        <a class="btn btn-primary btnNext">Next</a>
                     </div>
                  </div>
                  <!--<button type="submit" class="btn btn-primary">Submit</button>-->
               </form>
            </div>
         </div>
         <!--Services-->
         <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-services-tab">
            <div class="container d-flex align-items-center" style="margin-top:10px;">
               <form>
                  <div>
                     <h3 style="color:#ff0735eb;">Configure Services</h3>
                  </div>
                  <div class="mb-3" style="margin-top:30px;">
                     <label for="select_service" class="form-label">Service Section Type</label>
                     <select id="select_service" class="form-select">
                        <option>...</option>
                        <option>...</option>
                        <option>...</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="service_section" class="form-label">Service Section Content</label>
                     <textarea class="form-control" id="service_section" placeholder="" maxlength="" required></textarea>
                  </div>
                  <div class="mb-3 ">
                     <label class="form-check-label" for="service_details">More Details Button Required  </label>
                     <input type="checkbox" class="form-check-input" id="service_details" required>
                  </div>
                  <div class="navbuttons">
                     <div id="btnPrevious">
                        <a class="btn btn-primary btnPrevious">Previous</a>
                        <a class="btn btn-primary btnNext">Next</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!--Teams-->
         <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-teams-tab">
            <div class="container  align-items-center" style="margin-top:10px;">
               <form>
                  <div>
                     <h3 style="color:#ff0735eb;">Configure Teams</h3>
                  </div>
                  <input type="text" id="teams_name" placeholder="Name">
                  <input type="text" id="teams_designation" placeholder="Designation">
                  <input class=" form-control-sm" id="teams_person_image" type="file" name="myImage" accept="image/png, image/gif, image/jpeg" style="border:1px solid grey;" />
                  <input type="button" class="add-row" value="Add Row">
               </form>
               <table>
                  <thead>
                     <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Person Image</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><input type="checkbox" name="record"></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </tbody>
               </table>
               <button type="button" class="delete-row">Delete Row</button>
               <div class="navbuttons" style="margin-top:10px;">
                  <div id="btnPrevious">
                     <a class="btn btn-primary btnPrevious">Previous</a>
                     <a class="btn btn-primary btnNext">Next</a>
                  </div>
               </div>
            </div>
         </div>
         <!--Contact Forms-->
         <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-contact_forms-tab">
            <div class="container d-flex align-items-center" style="margin-top:10px;">
               <form>
                  <div>
                     <h3 style="color:#ff0735eb;">Configure Contact Forms</h3>
                  </div>
                  <div class="mb-3" style="margin-top:30px;">
                     <label for="contact_name" class="form-label">Name</label>
                     <input type="textbox" class="form-control" id="contact_name" aria-describedby="nameHelp" required>
                  </div>
                  <div class="mb-3">
                     <label for="contact_no" class="form-label">Contact</label>
                     <input type="textbox" class="form-control" id="contact_no" aria-describedby="contactHelp" required>
                  </div>
                  <div class="mb-3">
                     <label for="contact_email" class="form-label">Email</label>
                     <input type="email" class="form-control" id="contact_email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                     <label for="contact_message" class="form-label">Message</label>
                     <textarea class="form-control" id="contact_message" placeholder="Max 4000 chars" maxlength="4000" required></textarea>
                  </div>
                 <div id="btnPrevious">
                     <a class="btn btn-primary btnPrevious">Previous</a>
                     <!--<a class="btn btn-primary">Submit</a>-->
                    <!-- <button type="submit" class="btn btn-primary" style="margin-top:10px;">Submit</button>-->
					<input type="button" class="btn btn-primary" id="bt" value="Submit" onclick="saveFile()" />
                    
               </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap -->
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/1b59bc20c8.js"></script>
      <script>
         $(document).ready(function(){
             $(".add-row").click(function(){
                 var name = $("#name").val();
                 var designation = $("#designation").val();
         var person_image = $("#person_image").val();
                 var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + designation + "</td><td>" + person_image + "</td></tr>";
                 $("table tbody").append(markup);
             });
             
             // Find and remove selected table rows
             $(".delete-row").click(function(){
                 $("table tbody").find('input[name="record"]').each(function(){
                 	if($(this).is(":checked")){
                         $(this).parents("tr").remove();
                     }
                 });
             });
         });    
      </script>
      <script>
         $('.btnNext').click(function() {
             $('.nav-pills .active').parent().next('li').find('a').trigger('click');
         });
         $('.btnPrevious').click(function() {
             $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
         });
      </script>
	  <script>
	  


    let saveFile = () => {
    	
        // Get the data from each element on the form.
    	const menubar_side = document.getElementById('select_menubar_side');
        const logo_required = document.getElementById('logo_required');
        const logofile = document.getElementById('logofile');
        const websitename = document.getElementById('websitename');
		const menu_items = document.getElementById('menu_items');
        
		const about_us_select = document.getElementById('about_us_select');
        
		const about_us_textarea = document.getElementById('about_us_textarea');
        
		const select_service = document.getElementById('select_service');
        
		const service_section = document.getElementById('service_section');
        
		const service_details = document.getElementById('service_details');
		
		const teams_name = document.getElementById('teams_name');
        
		const teams_designation = document.getElementById('teams_designation');
        
		const teams_person_image = document.getElementById('teams_person_image');
        
		const contact_name = document.getElementById('contact_no');
        
		const contact_no = document.getElementById('contact_no');
        
		const contact_email = document.getElementById('contact_email');
        	
		const contact_message = document.getElementById('contact_message');
        
        // This variable stores all the data.
        let data = 
            '\r Menubar Side: ' + menubar_side.value + ' \r\n ' + 
            'Logo required: ' + logo_required.value + ' \r\n ' + 
            'Logo File: ' + logofile.value + ' \r\n ' + 
            'Website Name: ' + websitename.value + ' \r\n ' + 
			'Menu Items: ' + menu_items.value + ' \r\n ' + 
            
			'About Us Select: ' + about_us_select.value + ' \r\n ' + 
            
			'About Us Textarea: ' + about_us_textarea.value + ' \r\n ' + 
            
			'Select Service: ' + select_service.value + ' \r\n ' + 
            
			'Service Section: ' + service_section.value + ' \r\n ' + 
            
			'Service Details: ' + service_details.value + ' \r\n ' + 
            
			'Teams Name: ' + teams_name.value + ' \r\n ' + 
            
			'Teams Designation: ' + teams_designation.value + ' \r\n ' + 
            
			'Teams Person Image: ' + teams_person_image.value + ' \r\n ' + 
            
			'Contact Name: ' + contact_name.value + ' \r\n ' + 
            
			'Contact Number: ' + contact_no.value + ' \r\n ' + 
			
			'Contact Email: ' + contact_email.value + ' \r\n ' + 
                        
            'Contact Message: ' + contact_message.value;
        
        // Convert the text to BLOB.
        const textToBLOB = new Blob([data], { type: 'text/plain' });
        const sFileName = 'formData.txt';	   // The file to save the data.

        let newLink = document.createElement("a");
        newLink.download = sFileName;

        if (window.webkitURL != null) {
            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
        }
        else {
            newLink.href = window.URL.createObjectURL(textToBLOB);
            newLink.style.display = "none";
            document.body.appendChild(newLink);
        }

        newLink.click(); 
    }

	  </script>
	  <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>-->
   <?php include 'footer.php';?>

   </body>
</html>