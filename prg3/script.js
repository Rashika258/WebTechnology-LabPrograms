  //Global declarations

  //initial font size value
  var size = 10;
  var i = 0;

  //   The setInterval() method calls a function or evaluates an expression at specified intervals (in milliseconds).
  // The setInterval() method will continue calling the function until clearInterval() is called, or the window is closed.
  // The ID value returned by setInterval() is used as the parameter for the clearInterval() method.
  var myWait1 = setInterval(GrowText1, 100);

  function GrowText1() {
    if (size < 51) {
      size = size + 1;
      document.getElementById("myP1").style.fontSize = size + "pt";
      document.getElementById("myP1").style.color = "#acf7c1";
      //Hide the paragraph "text-shriniking"
      document.getElementById("myP2").style.visibility = "hidden";
    } else {
      clearInterval(myWait1);
      myWait1 = setInterval(ShrinkText1, 100);
      //Now hide the 1st paragraph and display the second paragraph
      document.getElementById("myP1").style.visibility = "hidden";
      document.getElementById("myP1").style.fontSize = "1pt";
      document.getElementById("myP2").style.visibility = "visible";
    }
  }

  function ShrinkText1() {
    if (size > 5) {
      size = size - 1;
      document.getElementById("myP2").style.fontSize = size + "pt";
      document.getElementById("myP2").style.color = "#f5bb00";
    } else {
      //The clearInterval() method clears a timer set with the setInterval() method.
      // The ID value returned by setInterval() is used as the parameter for the clearInterval() method.
      clearInterval(myWait1);
    }
  }