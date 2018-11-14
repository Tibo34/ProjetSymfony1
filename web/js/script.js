
var a=document.getElementById('menu').getElementsByTagName('a');
var li=document.getElementById('menu').getElementsByTagName('li');
var title=document.title.substring("TML/".length);

for(var i=0;i<a.length;i++){     
    if(a[i].innerText==document.title.substring("TML/".length+1)){
        li[i].className='active';        
    }
}

