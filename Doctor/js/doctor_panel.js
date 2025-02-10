
//initially setting total number of appoint and patient as 0
  var appoint_num=0;
  var patient_num=0;
  var total_money=0;

//store the total number of elements with reject id
var reject_num=document.querySelectorAll("#reject");

//applying for each loop for every elements
reject_num.forEach(Element=>{

  Element.addEventListener('click',function(){
    //getting parent element of the clicked Element
let parent=Element.parentElement;
parent.style.color="red";
parent.style.fontSize="14px";
parent.innerHTML="Cancelled";
  })


})

document.querySelectorAll("#accept").forEach(Element=>{
Element.addEventListener('click',function(){

  let parent=Element.parentElement;
  parent.style.color="green";
  parent.style.fontSize="14px";
  parent.innerHTML="Completed";

//to update the appointment and patients when accpeted by doctor
var appointment_update=document.getElementById("appoint_update");
appointment_update.innerHTML=appoint_num+1;
appoint_num=+1;

var patient_update=document.getElementById("patient_update");
patient_update.innerHTML=patient_num+1;
patient_num=+1;

//updating the earning money in doctor panel

var pay=parent.parentElement;
//getting the payed money value
var payed_money=pay.children[5].lastChild.innerHTML;
console.log(payed_money);

var update_money=document.getElementById("earning_update");
update_money.innerHTML=(total_money+payed_money);
total_money=+payed_money;

})

})

//updating the active button vertical color 
var active_btn=document.getElementById("left").children;
for (let Button of active_btn) {

  if(Button.href===window.location.href){
    var active =Button.lastChild.lastChild;
    active.classList.add('active');
  }
}
