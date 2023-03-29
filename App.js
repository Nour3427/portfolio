

var burger=document.querySelector('.burger');
var line1=document.querySelector('.line1');
var line3=document.querySelector('.line3');
var links=document.querySelector('.links');
var p1=document.querySelector('.p1');
var p2=document.querySelector('.p2');
var p3=document.querySelector('.p3');
var list=document.querySelector('.list');
var educ=document.querySelector('.educ');
var experience=document.querySelector('.experience');
var button=document.getElementById('button');









button.addEventListener('click',function sendMail(){
    var params={
        name: document.getElementById('namee').Value,
        email: document.getElementById('emaiil').Value,
        message: document.getElementById('messagee').Value,
    };

const serviceID = "service_a47terr";
const templateID = "template_61dvzq5";

emailjs
.send(serviceID,templateID,params).then((res)=>{
    document.getElementById('namee').Value="";
     document.getElementById('emaiil').Value="";
    document.getElementById('messagee').Value="";
    console;log(res);
    alert("your message sent successfully");

})
.catch((err) => console.log(err));

})

burger.addEventListener('click',function(){
    
    this.classList.toggle('openmenu');
    line1.classList.toggle('cross');
    line3.classList.toggle('cross');

});

p2.addEventListener('click',function(){
    this.style.borderBottom='2px solid #f42d6c';
    p1.style.borderBottom='2px solid transparent';
    p3.style.borderBottom='2px solid transparent';
    list.style.display='none';
    educ.style.display='block';
    experience.style.display='none';

})
p1.addEventListener('click',function(){
    this.style.borderBottom='2px solid #f42d6c';
    p2.style.borderBottom='2px solid transparent';
    p3.style.borderBottom='2px solid transparent';

    list.style.display='block';
    educ.style.display='none';
    experience.style.display='none';

})
p3.addEventListener('click',function(){
    this.style.borderBottom='2px solid #f42d6c';
    p2.style.borderBottom='2px solid transparent';
    p1.style.borderBottom='2px solid transparent';
    list.style.display='none';
    educ.style.display='none';
    experience.style.display='block';

});
