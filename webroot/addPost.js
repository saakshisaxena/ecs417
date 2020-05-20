/* event processing for preview button */
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
document.querySelector('.form-content').innerHTML = "<p class='dandt'>"+ datetime + " <br> <p class='title'><strong>"+title+"</strong></p><em>"+post+"</em>";
});

document.querySelector('.close').addEventListener('click', function() {
  document.querySelector('.bg-model').style.display='none';
});

document.getElementById('goback').addEventListener('click', function() {
document.querySelector('.bg-model').style.display='none';
});

/* event processing for clear button */
function resetfunction() {
  var confirmation = window.confirm("This article will not be saved once cleared. \n \'OK\' to continue \n \'Cancel\' to discontinue");
  if(confirmation == true)
    return true;
  return false;
}

/*prevents the submission of form if fields are left empty */
function preventDefault() {
  var title= document.getElementById("title").value;
  var post = document.getElementById("textarea").value;
  var count = 0;
  if(title=='' && post=='')
  {
    document.getElementById("title").style.backgroundColor="rgba(255,0,0, 0.2)";
    document.getElementById("textarea").style.backgroundColor="rgba(255,0,0, 0.2)";
    window.alert("Can't leave title and blog text empty :(");
    count++;
  }
  else if(post=='' && title!='')
  {
    document.getElementById("title").style.backgroundColor="white";
    document.getElementById("textarea").style.backgroundColor="rgba(255,0,0, 0.2)";
    window.alert("Can't leave blog text empty :(");
    count ++;
  }
  else if(post!='' && title=='')
  {
    document.getElementById("textarea").style.backgroundColor="white";
    document.getElementById("title").style.backgroundColor="rgba(255,0,0, 0.2)";
    window.alert("Can't leave title empty :(");
    count ++;
  }
  else if(title=='')
  {
    document.getElementById("title").style.backgroundColor="rgba(255,0,0, 0.2)";
    window.alert("Can't leave title empty :(");
    count++;
  }
  else if(post=='')
  {
    document.getElementById("textarea").style.backgroundColor="rgba(255,0,0, 0.2)";
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


function goBack() {
  window.history.back();
}
