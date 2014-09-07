function allowDrop(ev)
{
ev.preventDefault();
}

function drop(ev)
{
ev.preventDefault();
var data = ev.dataTransfer.getData("Text");
if(ev.target.id == "free")
{
ev.target.appendChild(document.getElementById(data));
ev.target.setAttribute("id","occupied")
}
}

function drag(ev,sender)
{
ev.dataTransfer.setData("Text",ev.target.id);
var tr = sender.parentNode;
tr.setAttribute("id","free");
}