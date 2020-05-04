

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

function previewfunc() {
  var title= document.getElementById("title").value;
  var post = document.getElementById("textarea").value;
/*  let newDiv = document.createElement('div');
  newDiv.className = 'Hello text-center';
  newDiv.id = 'Hello1';
  newDiv.setAttribute('title','hello div');
  let newDivText = document.createTextNode('<strong>Title:</strong>"+ title +" \n <strong>Post:</strong>"+ post');
  newDiv.appendChild(newDivText);*/
  if(preventDefault())
  {

    document.write("<h4> Preview of your post. </h4><strong>Title:</strong> <strong><em>"+ title +"</em></strong> <br><br> <strong>Post: </strong> <em>"+ post +"</em>  ");

  }
}

function goBack() {
  window.history.back();
}
