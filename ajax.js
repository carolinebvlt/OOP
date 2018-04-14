function show(filePath){
  var rq = new XMLHttpRequest();
  rq.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mainBox").innerHTML =
      this.responseText;
    }
  };
  rq.open("GET", filePath, true);
  rq.send();
}

function getExo(filePath, targetBox){
  var rq = new XMLHttpRequest();
  rq.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      targetBox.innerHTML =
      this.responseText;
    }
  };
  rq.open("GET", filePath, true);
  rq.send();
}
