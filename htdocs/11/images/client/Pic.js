<!--
var globopObject;
var opIndex=0;
var cleared=true;
var direction=10;

function dynOpacity(opObject,stop) 
{
if (stop) 
{
clearInterval(window.tm);
cleared=true;
opIndex=10;
return;
}
globopObject=opObject;
if (opIndex>180) direction=-1;
if (opIndex<50) direction=1;
opIndex+=direction;
globopObject.style.filter='alpha(opacity:' + opIndex + ')';
if (cleared)
{
window.tm=setInterval("dynOpacity(globopObject,false);",1);
cleared=false;
}
//alert(window.tm);

}

function handleevent()
{

if (event.type=="mouseover")
if(event.srcElement.tagName=="IMG") 
if (event.srcElement.parentElement.tagName=="A") 
{
dynOpacity(event.srcElement,false);
}
if (event.type=="mouseout")
if(event.srcElement.tagName=="IMG") 
{
event.srcElement.style.filter="";
dynOpacity(event.srcElement,true); 
}
}
document.onmouseover=handleevent;
document.onmouseout=handleevent;
// -->
