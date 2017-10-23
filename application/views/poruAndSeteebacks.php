<div class="row">
  <div class="column nature">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-1.jpg alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-2.jpg alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-3.jpg alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column cars">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-4.jpg alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-5.jpg alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-6.jpg alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-7.jpg alt="People" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <h4>Man</h4>
      <img src=<?php echo base_url();?>images/cS-8.jpg alt="People" style="width:100%">

      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
      <img src=<?php echo base_url();?>images/cS-9.jpg alt="People" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>
<script>
filterSelection("all")
function filterSelection(c) {
var x, i;
x = document.getElementsByClassName("column");
if (c == "all") c = "";
for (i = 0; i < x.length; i++) {
w3RemoveClass(x[i], "show");
if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
}
}

function w3AddClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
}
}

function w3RemoveClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
while (arr1.indexOf(arr2[i]) > -1) {
arr1.splice(arr1.indexOf(arr2[i]), 1);
}
}
element.className = arr1.join(" ");
}
</script>
