

var edit_btn=document.getElementById("edit_btn");

var save_btn=document.getElementById("save_btn");


//getting doctor each editing option
var doctor_about=document.getElementById("about_doctor");
var qualif=document.getElementById("qualif");
var exp=document.getElementById("exp");

var doc_name=document.getElementById("doc-name");
var fee=document.getElementById("fee");
var address=document.getElementById("address");

var available_btn=document.getElementById("doc_available");



edit_btn.addEventListener('click',function(){

  edit_btn.style.display='none';
  doctor_about.contentEditable="true";
doc_name.contentEditable="true";
qualif.contentEditable="true";
exp.contentEditable="true";
fee.contentEditable="true";
address.contentEditable="true";



  doctor_about.classList.add("Editing");
  doc_name.focus();
  
  save_btn.style.display="block";




})


save_btn.addEventListener("click",function(){
  save_btn.style.display="none";

  doctor_about.contentEditable="false";
  doc_name.contentEditable="false";
  qualif.contentEditable="false";
exp.contentEditable="false";
fee.contentEditable="false";
address.contentEditable="false";
  doctor_about.classList.remove("Editing");
 edit_btn.style.display="block";

}
)


//updating the active button vertical color 
var active_btn=document.getElementById("left").children;
for (let Button of active_btn) {

  if(Button.href===window.location.href){
    var active =Button.lastChild.lastChild;
    active.classList.add('active');
  }
}