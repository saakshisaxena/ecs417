document.getElementById('button').addEventListener('click', function() {
document.querySelector('.bg-model').style.display='flex';
const searchRegExp = /\n/g;
const replaceWith = '<br>';
var title= document.getElementById("title").value;
title = title.replace(searchRegExp, replaceWith);
var post = document.getElementById("textarea").value;
post = post.replace(searchRegExp, replaceWith);
var currentdate = new Date();
const options = {  day: 'numeric', month: 'long', year: 'numeric'};
var datetime = "<br> &#128336; " +currentdate.toLocaleDateString(undefined, options)+ "&nbsp;&nbsp;&nbsp;" + currentdate.getHours() + ":"
+ currentdate.getMinutes() + " UTC";
document.querySelector('.form-content').innerHTML = "<p class='dandt'>"+ datetime + " <br> <p class='title'><strong>"+title+"</strong></p><br><em>"+post+"</em>";
});

document.querySelector('.close').addEventListener('click', function() {
  document.querySelector('.bg-model').style.display='none';
});

document.getElementById('goback').addEventListener('click', function() {
document.querySelector('.bg-model').style.display='none';
});

function resetfunction() {
  var confirmation = window.confirm("This article will not be saved once cleared. \n \'OK\' to continue \n \'Cancel\' to discontinue");
  if(confirmation == true)
    return true;
  return false;
}

function preventDefault() {
  var title= document.getElementById("title").value;
  var post = document.getElementById("textarea").value;
  var count = 0;
  if(title=='')
   {document.getElementById("title").style.backgroundColor="purple";
   window.alert("Can't leave title empty :(");
    count++;
    }
  if(post=='')
  {document.getElementById("textarea").style.backgroundColor="red";
  window.alert("Can't leave blog text empty :(");
    count ++;
    }
  if(count > 0){
      return false;
  }

  else {
    return true;
  }
}

/*function previewfunc() {
  var title= document.getElementById("title").value;
  var post = document.getElementById("textarea").value;
/*  let newDiv = document.createElement('div');
  newDiv.className = 'Hello text-center';
  newDiv.id = 'Hello1';
  newDiv.setAttribute('title','hello div');
  let newDivText = document.createTextNode('<strong>Title:</strong>"+ title +" \n <strong>Post:</strong>"+ post');
  newDiv.appendChild(newDivText);*/
/*  if(preventDefault())
  {

    document.write("<h4> Preview of your post. </h4><strong>Title:</strong> <strong><em>"+ title +"</em></strong> <br><br> <strong>Post: </strong> <em>"+ post +"</em>  ");

  }
}*/

function goBack() {
  window.history.back();
}
