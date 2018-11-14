
var a=document.getElementById('menu').getElementsByTagName('a');

var title=document.title.substring("TML/".length);

for(var i=0;i<a.length;i++){     
    if(a[i].innerText==document.title.substring("TML/".length+1)){
        a[i].className='active';        
    }
}

