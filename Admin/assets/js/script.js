function login() {
  var e = document.getElementById("email");
  var p = document.getElementById("password");

  var f = new FormData();

  f.append("e", e.value);
  f.append("p", p.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "sucsess") {
        window.location = "adminhome.php";
      } else {
        document.getElementById("msg").innerHTML = t;
      }
    }
  };

  r.open("POST", "loginProcess.php", true);
  r.send(f);
}

//page count

var counterContainer = document.querySelector(".website-counter");
var resetButton = document.querySelector("#reset");
var visitCount = localStorage.getItem("page_view");

// Check if page_view entry is present
if (visitCount) {
  visitCount = Number(visitCount) + 1;
  localStorage.setItem("page_view", visitCount);
} else {
  visitCount = 1;
  localStorage.setItem("page_view", 1);
}
counterContainer.innerHTML = visitCount;

// Adding onClick event listener
resetButton.addEventListener("click", () => {
  visitCount = 1;
  localStorage.setItem("page_view", 1);
  counterContainer.innerHTML = visitCount;
});

//page count

function changeImage() {
  var view = document.getElementById("viewimg"); //image tag
  var file = document.getElementById("profileimg"); //file chooser

  file.onchange = function () {
    var file1 = this.files[0];
    var url1 = window.URL.createObjectURL(file1);
    view.src = url1;
  };
}

function update() {
  var file = document.getElementById("profileimg");
  var d = document.getElementById("Discription");
  var a = document.getElementById("About");

  var f = new FormData();

  f.append("u", file.files[0]);
  f.append("d", d.value);
  f.append("a", a.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      alert(t);
    }
  };

  r.open("POST", "profileUpdateProcess.php", true);
  r.send(f);
}

function UploadSample() {
  var file = document.getElementById("profileimg");
  var cid = document.getElementById("cid");
  var fileUpload = document.getElementById("fileUpload");

  var f = new FormData();

  f.append("u", file.files[0]);
  f.append("cid", cid.value);

  for (var i = 0; i < fileUpload.files.length; i++) {
    f.append("files"+ i, fileUpload.files[i]);
  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "sucsess") {
          window.location = "addSample.php";
      } else {
          alert(t);
      }
 
    }
  };

  r.open("POST", "UpdateSample.php", true);
  r.send(f);
}

function DeleteSample(id) {
  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "sucsess") {
        window.location = "addSample.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("GET", "deletePracess.php?id=" + id, true);
  r.send();
}

function AddContactLink(id) {
  var link = document.getElementById("link" + id);

  var f = new FormData();
  f.append("id", id);
  f.append("link", link.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "sucsess") {
        window.location = "addlink.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "addContactPracess.php", true);
  r.send(f);
}

function AddOrderLink(id) {
  var link = document.getElementById("Oederlink" + id);

  var f = new FormData();
  f.append("id", id);
  f.append("link", link.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "sucsess") {
        window.location = "addlink.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "addorderLinkPracess.php", true);
  r.send(f);
}
