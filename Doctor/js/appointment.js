

//handling appoint rejection
var reject=document.querySelectorAll("#reject");
reject.forEach(Element=>{

  Element.addEventListener('click',function(){
 
    let rej_message=Element.parentElement;
    rej_message.style.fontSize='14px';
    rej_message.style.color="red";
    rej_message.innerHTML="Cancelled";

  })
})
//handling accept the appoint reqeust
var accept=document.querySelectorAll("#accept");

accept.forEach(Element=>{
Element.addEventListener('click',function(){
let acp_message=Element.parentElement;
acp_message.style.fontSize="14px";
acp_message.style.color="green";
acp_message.innerHTML="Completed";

//updating the earning money in doctor panel


var pay=acp_message.parentElement;
//getting the payed money value
var payed_money=pay.children[5].lastChild.innerHTML;
console.log(payed_money);


});
})


//updating the active button vertical color 
var active_btn=document.getElementById("left").children;
for (let Button of active_btn) {

  if(Button.href===window.location.href){
    var active =Button.lastChild.lastChild;
    active.classList.add('active');
  }
}
