<!-- Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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