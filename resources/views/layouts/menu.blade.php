@extends('layouts.style')
<!-- Header  -->
<div class="wrapper style1">
  <!-- Header -->
  <div id="header">
    <div class="container">
      <!-- Logo -->
      <h1><a href="/homme" id="logo"><img src="images/logo100px.png" alt=""></a></h1>
        
      <!-- Nav -->
      <nav id="nav">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li>
            <a href="">Dropdown</a>
            
            <ul>
              <li><a href="#">Lorem ipsum dolor</a></li>
              <li><a href="#">Magna phasellus</a></li>
              <li><a href="#">Etiam dolore nisl</a></li>
              <li>
                <a href="">Phasellus consequat</a>
                <ul>
                  <li><a href="#">Lorem ipsum dolor</a></li>
                  <li><a href="#">Phasellus consequat</a></li>
                  <li><a href="#">Magna phasellus</a></li>
                  <li><a href="#">Etiam dolore nisl</a></li>
                  <li><a href="#">Veroeros feugiat</a></li>
                </ul>
              </li>
              <li><a href="#">Veroeros feugiat</a></li>
            </ul>
          </li>
          <li><a href="left-sidebar.html">Left Sidebar</a></li>
          <li><a href="right-sidebar.html">Right Sidebar</a></li>
          <li><a href="no-sidebar.html">No Sidebar</a></li>
      </ul>
    </nav>
  </div>
</div>
@extends('layouts.scrips')