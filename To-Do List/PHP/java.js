
function changeStatus(info) 
{
    var serverRequester = new XMLHttpRequest();
    serverRequester.onreadystatechange = function() 
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        document.getElementById("status "+info).innerHTML = this.responseText;
      }
    };
    serverRequester.open("GET", "changeStatus.php?id="+info);
    serverRequester.send();
  }