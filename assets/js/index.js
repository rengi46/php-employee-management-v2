window.addEventListener('DOMContentLoaded', 
async () => {
    
    a=await empleados()
    $("#jsGrid").jsGrid({
     width:"100%",
     height:"auto",
 
     editing:true,
     sorting:true,
     inserting:true,
     paging:true,
     pageSize:15,
     pageButtonCount:3,
 
     data: a,
 
 fields: [
     { name: "name", type: "text", title: "Name" },
     { name: "lastName", type: "text", title: "lastName" },
     { name: "age", type: "number", title: "Age" },
     { name: "email", type: "text", title: "Email" },
     { name: "city", type: "text", title: "City" },
     { name: "gender", type: "text", title: "gender" },
     { type: "control",rowClick:true, modeSwitchButton: true, editButton: false },
   ],
 
   rowClick: function name(item) {
     window.location.assign("./getEmployee/"+item.item.id)
    },
    onItemInserted: function name(args) {
     $.ajax({
         method: 'POST',
         url: './newemployee',
         data: args.item,
         success: function (pi) {
         }
     }); 
   },

 
 controller: { 


     deleteItem: async function name(item) {
        const response = await fetch('./deleteemployee/'+item.id,{ method: 'DELETE'});
        // const data =  await response.json();
        window.location.reload();
     },
 
      updateItem: async function name(item) {
      var formData = new FormData();
      formData.append('id', item.id);
      formData.append('name', item.name);
      formData.append('lastName', item.lastName);
      formData.append('email', item.email);
      formData.append('age', item.age);
      formData.append('gender', item.gender);
      formData.append('city', item.city);
      formData.append('state', item.state);
      formData.append('streetAddress', item.streetAddress);
      formData.append('phoneNumber', item.phoneNumber);
      formData.append('postalCode', item.postalCode);
      const response = await fetch('./library/employeeController.php?edit='+item.id,
      { method: 'POST', body :formData});
      const data =  await response.json();
      if(data==true)
      {
        alertas("se a cambiado correctamente!");
      }
      else alertas("email no valido");
    },
  },
})
})

async function empleados(){
    const response = await fetch("./getEmployees")
    const data = await response.json()
    return data
  }