 
      function validation()  
      {  
          var id=document.email.value;  
          var ps=document.password.value;  
          if(id.length=="" && ps.length=="") {  
              alert("User Name and Password fields are empty");  
              return false;  
          }  
          else  
          {  
              if(id.length=="") {  
                  alert("User Name is empty");  
                  return false;  
              }   
              if (ps.length=="") {  
              alert("Password field is empty");  
              return false;  
              }  
          }                             
      }  
 