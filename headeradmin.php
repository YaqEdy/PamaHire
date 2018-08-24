<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Recruitment PAMA</title>

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat|Baloo+Thambi" rel="stylesheet">

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link href="<?php echo base_url().'templates/frontend/assets/bootstrap/css/' ;?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?php echo base_url().'templates/frontend/assets/css/' ;?>font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url().'templates/frontend/css/' ;?>sweetalert.css" rel="stylesheet">
<link href="<?php echo base_url().'templates/frontend/datatables/' ;?>datatables.min.css" rel="stylesheet">

<!-- uniform -->
<link rel="stylesheet" href="<?php echo base_url().'templates/frontend/assets/uniform/css/' ;?>uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?php  echo base_url().'templates/frontend/assets/wow/' ;?>animate.css" />

<!-- gallery -->
<link rel="stylesheet" href="<?php  echo base_url().'templates/frontend/assets/gallery/';?>blueimp-gallery.min.css" />

<script src="<?php  echo base_url().'templates/frontend/assets/' ;?>jquery.js"></script>

<!-- kendo -->
<link rel="stylesheet" href="<?php echo base_url().'templates/frontend/KendoCore/css/' ;?>kendo.common.min.css" />
<link rel="stylesheet" href="<?php echo base_url().'templates/frontend/KendoCore/css/' ;?>kendo.silver.min.css" />

<script src="<?php  echo base_url().'templates/frontend/KendoCore/js/' ;?>kendo.core.min.js"></script>
<script src="<?php  echo base_url().'templates/frontend/KendoCore/js/' ;?>kendo.ui.core.min.js"></script>
<script src="<?php  echo base_url().'templates/frontend/js/' ;?>sweetalert.min.js"></script>

<!-- favicon -->
<link rel="shortcut icon" href="<?php echo base_url().'templates/frontend/images/' ;?>logopama.png"  type="image/x-icon"/>
<link rel="icon" href="<?php echo base_url().'templates/frontend/images/' ;?>logopama.png"  type="image/x-icon"/>

<link rel="stylesheet" href="<?php  echo base_url().'templates/frontend/assets/' ;?>style.css" />
<link rel="stylesheet" href="<?php  echo base_url().'templates/frontend/assets/' ;?>loader.css" />

</head>

<body id="home">
<style>
html {
  height: 100%;
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  position: relative;
  margin: 0;
  padding-bottom: 6rem;
  min-height: 100%;
  font-family: "Helvetica Neue", Arial, sans-serif;
}
/*------------------------------------------------------------------
Bootstrap Admin Template by EGrappler.com
------------------------------------------------------------------*/

/* dari #0090c5 #19bcab ke #0090c5 */

/*------------------------------------------------------------------
[1. Global]
*/

/*
@import 'pages/dashboard.css';
@import 'pages/signin.css';
@import 'pages/reports.css';
@import 'pages/faq.css';
@import 'pages/plan.css';

body {
background: #efefef;
font: 13px/1.7em 'Open Sans';
}

p {
font: 13px/1.7em 'Open Sans';
}

input,
button,
select,
textarea {
font-family: 'Open Sans';
} */

.dropdown .dropdown-menu {
}

.btn-icon-only {
padding-right: 3px;
padding-left: 3px;
}

.table td {
vertical-align: middle;
}

.table-bordered th {
background: #E9E9E9;
background:-moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%); /* FF3.6+ */
background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#FAFAFA), color-stop(100%,#E9E9E9)); /* Chrome,Safari4+ */
background:-webkit-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%); /* Chrome10+,Safari5.1+ */
background:-o-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%); /* Opera11.10+ */
background:-ms-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%); /* IE10+ */
background:linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";

font-size: 10px;
color: #444;
text-transform: uppercase;
}







/*------------------------------------------------------------------
[2. Navbar / .navbar]
*/

.navbar .container {
position: relative;
}

.navbar-inner {
padding: 7px 0;

background: #0090c5 !important;

}

.navbar-fixed-top {
position: static;
}

.navbar .nav a {
font-size: 11px;
}
/* .navbar .nav>li>a { color:#fff !important;} */
.navbar .brand {
font-weight: 600;
position: relative;
top: 2px;
font-weight: normal;
}

.navbar .search-query {
background-color: #444;
width: 150px;
font-size: 11px;
font-weight: bold;
}

.navbar .search-query::-webkit-input-placeholder {
  color: #666;
}

.navbar .search-query:-moz-placeholder {
  color: #666;
}

.navbar-search .search-query { background:#fff; border:0; color:#fff; line-height:normal;}


/*------------------------------------------------------------------
[3. Subnavbar / .subnavbar]
*/

.subnavbar {
    margin-bottom: 2.5em;
  }

.subnavbar-inner {
height: 60px;
background: #fff;
border-bottom: 1px solid #d6d6d6;
}

.subnavbar .container > ul {
display: inline-block;

height: 80px;
padding: 0;
margin: 0;

}

.subnavbar .container > ul > li {
float: left;

min-width: 90px;
height: 60px;
padding: 0;
margin: 0;

text-align: center;
list-style: none;

border-left: 1px solid #d9d9d9;


}

.subnavbar .container > ul > li:last-child{
border-right: 1px solid #d9d9d9;
}

.subnavbar .container > ul > li > a {
display: block;

height: 100%;
padding: 0 15px;
color: #383838;
font-size: 12px;
font-weight: normal;
}

.subnavbar .container > ul > li > a:hover {
color: #383838;
text-decoration: none;
}

.subnavbar .container > ul > li > a > i {
display: inline-block;

width: 24px;
height: 24px;
margin-top: 11px;
margin-bottom: -3px;
font-size: 22px;
}

.subnavbar .container > ul > li > a > span {
display: block;

}


.subnavbar .container > ul > li.active > a {

border-bottom:3px solid #ff7f74;
color: #383838;
}


.subnavbar .dropdown .dropdown-menu a {
font-size: 12px;
}


.subnavbar .dropdown .dropdown-menu {
    text-align: left;

  border-top-left-radius: 0;
  border-top-right-radius: 0;
  }



.subnavbar .dropdown-menu::before {
content: '';
display: inline-block;
border-left: 7px solid transparent;
border-right: 7px solid transparent;
border-bottom: 7px solid #CCC;
border-bottom-color: rgba(0, 0, 0, 0.2);
position: absolute;
top: -7px;
left: 9px;
}

.subnavbar .dropdown-menu::after {
content: '';
display: inline-block;
border-left: 6px solid transparent;
border-right: 6px solid transparent;
border-bottom: 6px solid white;
position: absolute;
top: -6px;
left: 10px;
}


.subnavbar .caret {
margin-top: 4px;

border-top-color: white;
border-bottom-color: white;
}

.subnavbar .dropdown.open .caret {
display: none;
}





/*------------------------------------------------------------------
[4. Main / .main]
*/

.main {
padding-bottom: 2em;

}



/*------------------------------------------------------------------
[5. Extra / .extra]
*/


.extra-inner {
padding: 20px 0;

font-size: 11px;
color: #BBB;

background: #1A1A1A;
}

.extra a {
color: #666;
}

.extra h4 {
margin-bottom: 1em;

font-weight: 400;
}

.extra ul {
padding: 0;
margin: 0;
}

.extra li {
margin-bottom: .6em;

list-style: none;
}




/*------------------------------------------------------------------
[6. Footer/ .footer]
*/

.footer {
margin-top: 0;
margin-bottom: 40px;
text-align: right;
}

.footer-inner {


font-size: 12px;
color: #999;
}

.footer a {
color: #999;
}

.footer a:hover {
text-decoration: none;
}

.footer-inner .span12{
border-top: 1px solid #ccc;
padding: 15px 0;
}

/*------------------------------------------------------------------
[6. Widget / .widget]
*/

.widget {
position: relative;
clear: both;
width: auto;
margin-bottom: 2em;
overflow: hidden;
}

.widget-header {

position: relative;

height: 50px;
line-height: 50px;
padding: 2px 10px 2px 10px ;
background: #fff;
border: 1px solid #d6d6d6;
border-bottom: none;
-webkit-background-clip: padding-box;
}

.widget-header h3 {

  position: relative;
  top: 2px;
  left: 10px;

  display: inline-block;
  margin-right: 3em;

  font-size: 18px;
  font-weight: 800;
  color: #525252;
  line-height: 18px;

  text-shadow: 1px 1px 2px rgba(255,255,255,.5);
}

  .widget-header [class^="icon-"], .widget-header [class*=" icon-"] {

    display: inline-block;
    margin-left: 13px;
    margin-right: -2px;

    font-size: 20px;
    color: #555;
    vertical-align: middle;



  }




.widget-content {
padding: 20px 15px 15px;

background: #FFF;


border: 1px solid #D5D5D5;

}

.widget-header+.widget-content {
border-top: none;

border-top-left-radius: 0;
border-top-right-radius: 0;
}

.widget-nopad .widget-content {
padding: 0;
}

/* Widget Content Clearfix */
.widget-content:before,
.widget-content:after {
  content:"";
  display:table;
}

.widget-content:after {
  clear:both;
}

/* For IE 6/7 (trigger hasLayout) */
.widget-content {
  zoom:1;
}

/* Widget Table */

.widget-table .widget-content {
padding: 0;
}

.widget-table .table {
margin-bottom: 0;

border: none;
}

.widget-table .table tr td:first-child {
border-left: none;
}

.widget-table .table tr th:first-child {
border-left: none;
}


/* Widget Plain */

.widget-plain {

background: transparent;

border: none;
}

.widget-plain .widget-content {
padding: 0;

background: transparent;

border: none;
}


/* Widget Box */

.widget-box {

}

.widget-box .widget-content {
background: #E3E3E3;
background: #FFF;
}




/*------------------------------------------------------------------
[7. Error / .error-container]
*/

.error-container {
margin-top: 4em;
margin-bottom: 4em;
text-align: center;
}

.error-container h1 {
margin-bottom: .5em;

font-size: 120px;
line-height: 1em;
}

.error-container h2 {
margin-bottom: .75em;
font-size: 28px;
}

.error-container .error-details {
margin-bottom: 1.5em;

font-size: 16px;
}

.error-container .error-actions a {
margin: 0 .5em;
}



/* Message layout */


ul.messages_layout {
position: relative;
margin: 0;
padding: 0
}
ul.messages_layout li {
float: left;
list-style: none;
position: relative
}
ul.messages_layout li.left {
padding-left: 75px
}
ul.messages_layout li.right {
padding-right: 75px
}
ul.messages_layout li.right .avatar {
right: 0;
left: auto
}
ul.messages_layout li.right .message_wrap .arrow {
right: -12px;
left: auto;
background-position: 0 -213px;
height: 15px;
width: 12px
}
ul.messages_layout li.by_myself .message_wrap {
border: 1px solid #b3cdf8
}
ul.messages_layout li.by_myself .message_wrap .info a.name {
color: #4a8cf7
}
ul.messages_layout li a.avatar {
position: absolute;
left: 0;
top: 0;
padding:2px;
}
ul.messages_layout li a.avatar img {


}
ul.messages_layout li .message_wrap {
position: relative;
border: 1px solid #e9e9e9;
padding: 10px;
border: 1px solid #cbcbcb;
margin-bottom: 20px;
float: left;
background: #fefefe;
-webkit-box-shadow: rgba(0,0,0,0.1) 0 1px 0px;
-moz-box-shadow: rgba(0,0,0,0.1) 0 1px 0px;
box-shadow: rgba(0,0,0,0.1) 0 1px 0px
}
ul.messages_layout li .message_wrap .arrow {
background-position: 0 -228px;
height: 15px;
width: 12px;
height: 15px;
width: 12px;
position: absolute;
left: -12px;
top: 13px
}
ul.messages_layout li .message_wrap .info {
float: left;
width: 100%;
border-bottom: 1px solid #fff;
line-height: 23px
}
ul.messages_layout li .message_wrap .info .name {
float: left;
font-weight: bold;
color: #483734
}
ul.messages_layout li .message_wrap .info .time {
float: left;
font-size: 11px;
margin-left: 6px
}
ul.messages_layout li .message_wrap .text {
float: left;
width: 100%;
padding-top: 5px
}

ul.messages_layout .dropdown-menu  li{ width:100%; font-size:11px;}


/* Full Calendar */

.fc {
direction: ltr;
text-align: left;
position: relative
}
.fc table {
border-collapse: collapse;
border-spacing: 0
}
html .fc, .fc table {
font-size: 1em
}
.fc td, .fc th {
padding: 0;
vertical-align: top
}
.fc-header td {
white-space: nowrap;
background: none
}
.fc-header-left {
width: 100%;
text-align: left;
position: absolute;
left: 0;
top: 6px
}
.fc-header-left .fc-button {
margin: 0;
position: relative
}
.fc-header-left .fc-button-prev, .fc-header-left .fc-button-next {
float: left;
border: none;
padding: 14px 10px;
opacity: 0.5
}
.fc-header-left .fc-button-prev .fc-button-inner, .fc-header-left .fc-button-next .fc-button-inner {
border: none
}
.fc-header-left .fc-button-prev .fc-button-inner .fc-button-content, .fc-header-left .fc-button-next .fc-button-inner .fc-button-content {
display: none
}
.fc-header-left .fc-button-prev.fc-state-hover, .fc-header-left .fc-button-next.fc-state-hover {
opacity: 1
}
.fc-header-left .fc-button-prev.fc-state-down, .fc-header-left .fc-button-next.fc-state-down {
background: none !important;
margin-top: -1px
}
.fc-header-left .fc-button-prev .fc-button-inner {
background-position: 0 -351px;
height: 16px;
width: 11px
}
.fc-header-left .fc-button-next {
float: right
}
.fc-header-left .fc-button-next .fc-button-inner {
background-position: 0 -367px;
height: 16px;
width: 11px
}
.fc-header-center {
text-align: center
}
.fc-header-right {
text-align: right;
position: absolute;
top: -34px;
right: 10px
}
.fc-header-title {
display: inline-block;
vertical-align: top
}
.fc-header-title h2 {
margin-top: 0;
white-space: nowrap;
font-size: 1.1rem;
color: #6C737F;
line-height: 55px;
}
.fc .fc-header-space {
padding-left: 10px
}
.fc-header .fc-button {
margin-bottom: 1em;
vertical-align: top
}
.fc-header .fc-button {
margin-right: -1px
}
.fc-header .fc-corner-right {
margin-right: 1px
}
.fc-header .ui-corner-right {
margin-right: 0
}
.fc-header .fc-state-hover, .fc-header .ui-state-hover {
z-index: 2
}
.fc-header .fc-state-down {
z-index: 3
}
.fc-header .fc-state-active, .fc-header .ui-state-active {
z-index: 4
}
.fc-content {
clear: both;
background: #f9f9f9
}
.fc-view {
width: 100%;
overflow: hidden
}
.fc-view thead {
background:#e9ecf1;
line-height: 35px
}
.fc-widget-header, .fc-widget-content {
border: 1px solid #ccc
}
.fc-state-highlight {
background: #F4F3E6
}
.fc-cell-overlay {
background: #9cf;
opacity: .2;
filter: alpha(opacity=20)
}
.fc-button {
position: relative;
display: inline-block;
cursor: pointer
}
.fc-button-today{margin-top: 8px !important;}
.fc-state-default {
border-style: solid;
border-width: 1px 0
}
.fc-button-inner {
position: relative;
float: left;
overflow: hidden
}
.fc-state-default .fc-button-inner {
border-style: solid;
border-width: 0 1px
}
.fc-button-content {
position: relative;
float: left;
height: 1.9em;
line-height: 1.9em;
padding: 0 .6em;
white-space: nowrap
}
.fc-button-content .fc-icon-wrap {
position: relative;
float: left;
top: 50%
}
.fc-button-content .ui-icon {
position: relative;
float: left;
margin-top: -50%;
*margin-top:0;
*top:-50%
}
.fc-state-default .fc-button-effect {
position: absolute;
top: 50%;
left: 0
}
.fc-state-default .fc-button-effect span {
position: absolute;
top: -100px;
left: 0;
width: 500px;
height: 100px;
border-width: 100px 0 0 1px;
border-style: solid;
border-color: #fff;
background: #444;
opacity: .09;
filter: alpha(opacity=9)
}
.fc-state-default, .fc-state-default .fc-button-inner {
border-style: solid;
border-color: #ccc #bbb #aaa;
color: #000
}
.fc-state-hover, .fc-state-hover .fc-button-inner {
border-color: #999
}
.fc-state-down {
border-color: #555;
background: #777
}
.fc-state-active, .fc-state-active .fc-button-inner {
border-color: #555;
background: #777;
color: #fff
}
.fc-state-disabled, .fc-state-disabled .fc-button-inner {
color: #999;
border-color: #ddd
}
.fc-state-disabled {
cursor: default
}
.fc-state-disabled .fc-button-effect {
display: none
}
.fc-event {
border-style: solid;
border-width: 0;
font-size: .85em;
cursor: default
}
a.fc-event, .fc-event-draggable {
cursor: pointer
}
a.fc-event {
text-decoration: none
}
.fc-rtl .fc-event {
text-align: right
}
.fc-event-skin {
border-color: #3f85f5;
background-color: #5e96ea;
color: #fff
}
.fc-event-inner {
position: relative;
width: 100%;
height: 100%;
border-style: solid;
border-width: 0;
overflow: hidden
}
.fc-event-time, .fc-event-title {
padding: 0 1px
}
.fc .ui-resizable-handle {
display: block;
position: absolute;
z-index: 99999;
overflow: hidden;
font-size: 300%;
line-height: 50%
}
.fc-event-hori {
border-width: 1px 0;
margin-bottom: 1px
}
.fc-event-hori .ui-resizable-e {
top: 0 !important;
right: -3px !important;
width: 7px !important;
height: 100% !important;
cursor: e-resize
}
.fc-event-hori .ui-resizable-w {
top: 0 !important;
left: -3px !important;
width: 7px !important;
height: 100% !important;
cursor: w-resize
}
.fc-event-hori .ui-resizable-handle {
_padding-bottom: 14px
}
.fc-corner-left {
margin-left: 1px
}
.fc-corner-left .fc-button-inner, .fc-corner-left .fc-event-inner {
margin-left: -1px
}
.fc-corner-right {
margin-right: 1px
}
.fc-corner-right .fc-button-inner, .fc-corner-right .fc-event-inner {
margin-right: -1px
}
.fc-corner-top {
margin-top: 1px
}
.fc-corner-top .fc-event-inner {
margin-top: -1px
}
.fc-corner-bottom {
margin-bottom: 1px
}
.fc-corner-bottom .fc-event-inner {
margin-bottom: -1px
}
.fc-corner-left .fc-event-inner {
border-left-width: 1px
}
.fc-corner-right .fc-event-inner {
border-right-width: 1px
}
.fc-corner-top .fc-event-inner {
border-top-width: 1px
}
.fc-corner-bottom .fc-event-inner {
border-bottom-width: 1px
}
table.fc-border-separate {
border-collapse: separate
}
.fc-border-separate th, .fc-border-separate td {
border-width: 1px 0 0 1px
}
.fc-border-separate th.fc-last, .fc-border-separate td.fc-last {
border-right-width: 1px
}
.fc-border-separate tr.fc-last th, .fc-border-separate tr.fc-last td {
border-bottom-width: 0px
}
.fc-first {
border-left-width: 0 !important
}
.fc-last {
border-right-width: 0 !important
}
.fc-grid th {
text-align: center
}
.fc-grid .fc-day-number {
float: right;
padding: 0 2px
}
.fc-grid .fc-other-month .fc-day-number {
opacity: 0.3;
filter: alpha(opacity=30)
}
.fc-grid .fc-day-content {
clear: both;
padding: 2px 2px 1px
}
.fc-grid .fc-event-time {
font-weight: bold
}
.fc-rtl .fc-grid .fc-day-number {
float: left
}
.fc-rtl .fc-grid .fc-event-time {
float: right
}
.fc-agenda table {
border-collapse: separate
}
.fc-agenda-days th {
text-align: center
}
.fc-agenda .fc-agenda-axis {
width: 60px !important;
padding: 0 4px;
vertical-align: middle;
text-align: right;
white-space: nowrap;
font-weight: normal
}
.fc-agenda .fc-day-content {
padding: 2px 2px 1px
}
.fc-agenda-days .fc-agenda-axis {
border-right-width: 1px
}
.fc-agenda-days .fc-col0 {
border-left-width: 0
}
.fc-agenda-allday th {
border-width: 0 1px
}
.fc-agenda-allday .fc-day-content {
min-height: 34px;
_height: 34px
}
.fc-agenda-divider-inner {
height: 2px;
overflow: hidden
}
.fc-widget-header .fc-agenda-divider-inner {
background: #eee
}
.fc-agenda-slots th {
border-width: 1px 1px 0
}
.fc-agenda-slots td {
border-width: 1px 0 0;
background: none
}
.fc-agenda-slots td div {
height: 20px
}
.fc-agenda-slots tr.fc-slot0 th, .fc-agenda-slots tr.fc-slot0 td {
border-top-width: 0
}
.fc-agenda-slots tr.fc-minor th, .fc-agenda-slots tr.fc-minor td {
border-top-style: dotted
}
.fc-agenda-slots tr.fc-minor th.ui-widget-header {
*border-top-style:solid
}
.fc-event-vert {
border-width: 0 1px
}
.fc-event-vert .fc-event-head, .fc-event-vert .fc-event-content {
position: relative;
z-index: 2;
width: 100%;
overflow: hidden
}
.fc-event-vert .fc-event-time {
white-space: nowrap;
font-size: 10px
}
.fc-event-vert .fc-event-bg {
position: absolute;
z-index: 1;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: #fff;
opacity: .3;
filter: alpha(opacity=30)
}
.fc .ui-draggable-dragging .fc-event-bg, .fc-select-helper .fc-event-bg {
display: none\9
}
.fc-event-vert .ui-resizable-s {
bottom: 0 !important;
width: 100% !important;
height: 8px !important;
overflow: hidden !important;
line-height: 8px !important;
font-size: 11px !important;
font-family: monospace;
text-align: center;
cursor: s-resize
}
.fc-agenda .ui-resizable-resizing {
_overflow: hidden
}
.fc-header-left .fc-button-prev .fc-button-inner {background: url('../img/icons-sa7c41345d9.png') no-repeat; background-position: 0 -351px;
height: 16px;
width: 11px;}

.fc-header-left .fc-button-next .fc-button-inner {background: url('../img/icons-sa7c41345d9.png') no-repeat; background-position: 0 -367px;
height: 16px;
width: 11px;}

/*------------------------------------------------------------------
[8. Miscellaneous]
*/

.chart-holder {
width: 100%;
height: 250px;
}

.dropdown-menu li>a:hover, .dropdown-menu .active>a, .dropdown-menu .active>a:hover { background:#0090c5;}

.accordion-heading { background:#e5e5e5;  }
.accordion-heading a { color:#545454; text-decoration:none; font-weight:bold; }

.btn-facebook-alt i {
color: #23386a;
}
.btn-twitter-alt i {
color: #0098d0;
}
.btn-google-alt i {
color: #b6362d;
}
.btn-linkedin-alt i {
color: #0073b2;
}
.btn-pinterest-alt i {
color: #ab171e;
}
.btn-github-alt i {
color: #333;
}

.all-icons li { list-style:none;}

.ML0 { margin-left:0}
.MR0 { margin-right:0;}

/*------------------------------------------------------------------
[1. Max Width: 480px]
*/

/*************************** CUSTOM CSS ************************/

/* a, .search-query, .btn, input, textarea{
border-radius: 0 0 0 0 !important;

} */

.modal{
border-radius: 0;
}

.big-modal {
width: 1000px;
margin-left: -500px;
border-radius: 0;
}

.big-modal div.modal-header h3{
font-size: 18px;
}

.big-modal .form-group input[type=text]#post_title.input-block-level{
font-size: 17px;
padding: 10px 10px;
height: 40px;
}

.big-modal .form-group textarea.input-block-level{
padding: 15px 10px;
resize:vertical;
}

ul.nav-tabs{
}

ul.nav-tabs li{
border-radius: 2px;
}

ul.nav-tabs li a{
color:#888;
border-radius: 2px;
}

ul.nav-tabs li a:active{
border-radius: 2px;
}

ul.nav-tabs li a:hover{
background: #fafafa;
color: #555;
}

table#tbl-artikel, table#tbl-produk, table#tbl-pesanan, table#tbl-konfirmasi, table#tbl-komentar, table#tbl-user, .table-statistic{
border-right: none;
}

table#tbl-artikel tr, table#tbl-produk tr, table#tbl-pesanan tr, table#tbl-konfirmasi tr,  table#tbl-komentar tr, table#tbl-user tr,  .table-statistic tr{
border-right: none;
}

table#tbl-artikel tr td, table#tbl-produk tr td, table#tbl-pesanan tr td, table#tbl-konfirmasi tr td,  table#tbl-komentar tr td, table#tbl-user tr td {
font-size: 15px;
padding: 20px 15px 20px 15px;
border-left: none;
border-right: none;
}

.table-statistic tr td{
border-left: none;
border-right: none;
font-size: 14px;
text-align: center;
}

.table-statistic tr th{
font-size:14px;
border-left: none;
border-right: none;
padding: 20px 15px 20px 15px;
background: #fff;

}

table#tbl-artikel tr td:last-child, table#tbl-produk tr td:last-child, table#tbl-pesanan tr td:last-child, table#tbl-konfirmasi tr td:last-child,  table#tbl-komentar tr td:last-child, table#tbl-user tr td:last-child, .table-statistic tr td:last-child{
border-right: none;
}

table#tbl-artikel tr td span, table#tbl-produk tr td span, table#tbl-pesanan tr td span, table#tbl-konfirmasi tr td span{
font-weight: bold;
}

table#tbl-komentar tr td span{
font-weight: normal;
font-size: 14px;
}

div.controls{
margin-bottom: 20px;
margin-right: 10px;
}

div.widget-header{
padding: 15px 15px 0 15px ;
}

div.widget-content{
padding: 30px 20px;
}

ul.hirarki li{
font-size: 15px;
padding: 20px 15px 20px 15px;
border-left: 5px solid #0090c5 ;
border-right: none;
border-radius: 0;
}

ul.hirarki li.child-item{
margin-left: 30px;
}

ul.hirarki li.li-parent{
padding: 20px 0px 0px 15px;
}

ul.hirarki li.li-parent div.pull-right{
margin-right: 15px;
}

ul.hirarki li.li-parent ul{
margin-top: 20px;
margin-right: 0;
}

ul.hirarki li.li-parent ul li{
}

ul.hirarki li.li-parent ul li div.pull-right{
margin-right: 0;
}

.ui-state-highlight{
border:1px dashed #ccc;
list-style-type: none;
border-left: none;
background: #dfdfdf;
padding: 20px 15px 20px 15px;
}

ul.hirarki li:nth-child(odd) {
background: #fafafa;
}

ul.hirarki li:nth-child(even) {
background: #fff;
}

ul.hirarki li ul li:nth-child(odd){
background: #fff;
}

ul.hirarki li ul li:nth-child(even){
background: #fafafa;
}

div.tabbable.onmodal  {
margin-top: 0;
border:1px solid #ccc;
margin-bottom: 10px;
background: #fafafa;
}

div.tabbable.onmodal ul.nav.nav-tabs{
margin-bottom: 0;
background: #fff;
border: none;
}

div.tabbable.onmodal ul.nav.nav-tabs li a{
border: none;

}

div.tabbable.onmodal ul.nav.nav-tabs li:first-child.active a{
border: none;
}

div.tabbable.onmodal ul.nav.nav-tabs li.active a{
border: none;
background: #fafafa;
}

div.tabbable.onmodal ul.nav.nav-tabs li:first-child a{
border-left: none;
border-top: none;

}

div.tabbable.onmodal ul.list-group li{
border-left: none;
border-right: none;
}

div.tabbable.onmodal ul.list-group li:first-child{
border-top: none;
}

div.tab-content{
overflow: auto;

}

div.tabbable.onmodal div.tab-pane fieldset{
overflow: auto;
background: #fff;
margin: 20px !important;
border:1px solid #dfdfdf;
}

div.tabbable.onmodal div.tab-pane label{
}

div.tabbable.onmodal div.tab-pane label.control-label{
display: inline-block;
clear: none;
text-align: left;
}

ul.check-list-group-kategori{
position: relative;
margin: 10px 20px;
background: #fff;
}

ul.check-list-group-kategori li{
padding-top: 5px;
padding-bottom: 5px;
}

ul.check-list-group-kategori li:last-child{
border-bottom: none;
}

div.tab-pane{
/*height: 150px;
overflow: auto;*/
}


div.tab-pane div.control-group {
padding: 20px;
}

div.tab-pane div.control-group input.short{
width:60px;
}

div.tab-pane#kategori div.control-group{
padding:0;
}

.big-modal p.help-block{
background: #efefef;
width: auto;
padding: 8px;
margin-bottom: 15px;
margin-top: 0;
}

.modal-body .control-label{
text-align: left;
}

.noresize {
resize: none;
}

.vresize {
resize: vertical;
}

.hresize {
resize: horizontal;
}

.table-statistic tr th{
text-align: center;
}

i.flag{
width: 24px;
height: 24px;
}

i.Indonesia{
background:url('../img/flag/indonesia.png') no-repeat center center;
}

i.windows-7{
background:url('../img/flag/windows-7.png') no-repeat center center;
}

i.chrome{
background:url('../img/flag/chrome.png') no-repeat center center;
}

i.firefox{
background:url('../img/flag/firefox.png') no-repeat center center;
}

ul.list-statistic{
border:none;
}

ul.list-statistic li.list-group-item{
border:none;
}

ul.list-statistic li.list-group-item span.label-statistic{
width:20%;
display: inline-block;
}

ul.list-statistic li.list-group-item span.value-statistic{
border-bottom: 1px solid #ccc;
width: 80%;
font-weight: bold;
display: inline-block;
}

div#wrap-tampilan div.span3:not(:nth-child(4n+1)){
margin-left: 0;
}`

div#wrap-tampilan h3{
margin: 30px 0 0px 0;
}

div#wrap-tampilan div.span4{
margin-bottom: 40px;
}


div#wrap-tampilan img{
width: 100%;
margin-bottom: 10px;
border:1px solid #eee;
}

div#wrap-tampilan div.span4 img{
border:4px solid #eee;

}

div#wrap-tampilan div.span3{
width: 24%;
margin-right: 0px;
margin-bottom: 20px;
}


div#wrap-tampilan div.span3 h4{
font-weight:normal;
}

div.single-tampilan{
padding: 10px 10px;
}

div.template_detail img{
width: 100%;
border:3px solid #eee;
}

label.control-label{
text-align: left !important;
}

form.form-konfigurasi textarea{
}


img.featured_image{
padding: 2px;
background: #fafafa;
border:1px solid #ccc;
margin-bottom: 10px;
}

button#remove_featured_image{
margin-top: 10px;
font-family: tahoma;
}


.media {
margin-top: 15px;
}
.media:first-child {
margin-top: 0;
}
.media,
.media-body {
overflow: hidden;
zoom: 1;
}
.media-body {
width: 10000px;
}
.media-object {
display: block;
}
.media-object.img-thumbnail {
max-width: none;
}
.media-right,
.media > .pull-right {
padding-left: 10px;
}
.media-left,
.media > .pull-left {
padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
display: table-cell;
vertical-align: top;
}
.media-middle {
vertical-align: middle;
}
.media-bottom {
vertical-align: bottom;
}
.media-heading {
margin-top: 0;
margin-bottom: 5px;
}
.media-list {
padding-left: 0;
list-style: none;
}

td.produk-item em{
display: block;
line-height: 22px;
font-style: normal;
}

div#info-produk h3{

margin-bottom: 30px;
}

div#info-produk h3 span.label{
font-size: 15px;
font-weight: normal;
}

div#info-produk p.help-block{
margin-top: 10px;
}

div.image-list-wrap{
display: block;
height: auto;
margin-bottom: 10px;
}

div.image-single-item{
border:1px solid #dfdfdf;
padding:2px;
width: 100px;
height: 100px;
display: inline-block;
margin-right: 5px;
}

div.image-list-wrap div.image-single-item a.btn{
float: left;
background: rgba(0,0,0,.3);
border:none;
position: relative;
margin-bottom: -27px;
}

table#tbl-produk tbody img{
padding: 3px;
border:1px solid #eee;
background: #fff;
}


form.form-horizontal h3 span.label{
font-size: 16px;
}

h3.head-rekening{
display: inline-block;
margin-bottom: 20px;
margin-right: 10px;
}

div.rekening-satuan{
margin-bottom: 30px;
}

ol.ol-transaksi{
margin: 0;
padding: 0;
}

#tbl-pesanan tr th, #tbl-konfirmasi tr th{
font-size: 14px;
border-left: none;
border-right: none;
padding: 20px 15px 20px 15px;
background: #fff;
text-align: center;
text-transform: capitalize;
}

.text-center{
text-align: center !important;
}

.text-right{
text-align: right !important;
}

/*************************** END  CUSTOM CSS ************************/

@media (max-width: 480px) {

.error-container h1 {
  font-size: 72px;
}

}


/*------------------------------------------------------------------
[1. Max Width: 767px]
*/

@media (max-width: 767px) {

#main {
  padding: 0 10px;
  margin-right: -20px;
  margin-left: -20px;
}


/* .subnavbar {
  margin-left: -20px;
  margin-right: -20px;
} */


.subnavbar-inner {
  height: auto;
}

.subnavbar .container > ul {
  width: 100%;
  height: auto;

  border: none;
}

.subnavbar .container > ul > li {
  width: 33%;
  height: 70px;
  margin-bottom: 0;

  border: none;
}



  .subnavbar .container > ul > li.active > a {
  font-size: 11px;
    background: transparent;
  }

.subnavbar .container > ul > li > a > i {
  display: inline-block;
  margin-bottom: 0;

  font-size: 20px;
}


.subnavbar-open-right .dropdown-menu {
  left: auto;
  right: 0;
}

.subnavbar-open-right .dropdown-menu:before {
  left: auto;
  right: 12px;
}
.subnavbar-open-right .dropdown-menu:after {
  left: auto;
  right: 13px;
}

.extra {
  margin-right: -20px;
  margin-left: -20px;
}

.extra .container {
  padding: 0 20px;
}

.footer {
  margin-right: -20px;
  margin-left: -20px;
}

.footer .container {
  padding: 0 20px;
}

.footer .footer-terms {
  text-align: left;
}

.footer .footer-terms a {
  margin-left: 0;
  margin-right: 1em;
}

}





/*------------------------------------------------------------------
[3. Max Width: 979px]
*/

@media (max-width: 979px) {

.navbar-fixed-top {
  position: static;

  margin-bottom: 0;
}

.subnavbar {
}

.subnavbar .container {
  width: auto;
}
}






/*------------------------------------------------------------------
[2. Max Width: 1200px]
*/

@media (min-width: 1200px) {
.navbar .search-query {
  width: 200px;
}

}


html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, code,
del, dfn, em, img, q, dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
input, button, select, textarea,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, details, figcaption, figure, footer, header,
hgroup, nav, section {
	/* color: #3a3a3a;
	font-size: 14px;
	line-height: 18px;
	font-weight: 400; */
	font-family: Tahoma, Arial, Helvetica, sans-serif;
}
</style>
<!-- top
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<!-- <div class="navbar  navbar-default" style="background:url(<?php echo base_url().'templates/frontend/images/' ;?>headercopy.png)no-repeat,#162e71;border-bottom:3px solid #f8c301" role="navigation"> -->
<div class="navbar  navbar-default navbar-light" style="background-color:#26c6da;position:relative;z-index:50;box-shadow:5px 0px 10px rgba(0,0,0,0.5)" role="navigation">
  <div class="container" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbarMain">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img style="width:55px;height:60px;margin: 0 auto !important" src="<?php echo base_url().'templates/frontend/images/' ;?>logopama.png"  alt="Logo PAMA"></a>
      <!-- <a class="navbar-brand" href="#"><img style="width:85px;height:50px;margin-left: 40px;margin-top:5px" src="<?php echo base_url().'templates/frontend/images/' ;?>satuindo.png"  alt="Logo PAMA"></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse cust-nav navbar-right" id="myNavbarMain">

      <ul class="nav navbar-nav">
        <li><a style="color:white;font-size:14px" href="<?php echo base_url()?>">Home </a></li>
        <li><a style="color:white;font-size:14px" href="<?php echo base_url().'PeluangKarir/'?>">INFO PELUANG KARIR</a></li>
        <!-- <li><a href="introduction.php">INFO REKRUTMEN</a></li> -->
        <li><a style="color:white;font-size:14px" href="gallery.php">FAQ</a></li>
        <div class="hd hidden-md"></div>
        <!-- <li><a href="contact.php">YUHU</a></li> -->
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</div>
<!-- header -->
<?php
$_this =& get_instance();

$user_session = $_this->session->userdata;

if(isset($user_session['ID'])){
?>
<div class="subnavbar" style="box-shadow:0px 5px 20px rgba(0,0,0,0.05)!important;border-color:#d7dfe3">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <?php if($user_session['menu'] == 'dashboard'){ ?>
              <li class="active"><a href="<?=set_url('dashboard');?>"><i class="glyphicon glyphicon-dashboard" style="color:#2980b9"></i><span>Dashboard</span> </a> </li>
              <?php } else { ?>
              <li><a href="<?=set_url('dashboard');?>"><i class="glyphicon glyphicon-dashboard" style="color:#2980b9"></i><span>Dashboard</span> </a> </li>
              <?php } ?>
        <?php if($user_session['menu'] == 'rekrutmenadmin'){ ?>
              <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list-alt"style="color:#2980b9"></i><span>Rekrutmen</span> <b class="caret"></b></a>
              <?php } else { ?>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list-alt"style="color:#2980b9"></i><span>Rekrutmen</span> <b class="caret"></b></a>
              <?php } ?>

          <ul class="dropdown-menu">
            <li><a href="<?=set_url('m_jurusan');?>">Master Jurusan</a></li>
            <li><a href="<?=set_url('m_posisi');?>">Master Posisi</a></li>
            <li><a href="<?=set_url('t_rekrutmen');?>">Kelola Rekrutmen</a></li>
          </ul>
        </li>
        <?php if($user_session['menu'] == 'akun'){ ?>
              <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><span>User</span> <b class="caret"></b></a>
              <?php } else { ?>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><span>User</span> <b class="caret"></b></a>
              <?php } ?>

              <ul class="dropdown-menu">
                <li><a href="<?=set_url('user/logout');?>">Logout</a></li>
              </ul>
        </li>
        <!-- <li class="dropdown <?=is_active_page_print('halaman','active');?>"><a href="<?=set_url('halaman/index');?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book"></i><span>Halaman</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=set_url('halaman');?>">Daftar Halaman</a></li>
            <li><a href="<?=set_url('halaman#tambah');?>">Tambah Halaman</a></li>
          </ul>
        </li>
        <li class="dropdown <?=is_active_page_print('produk','active');?>"><a href="<?=set_url('produk/index');?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-shopping-cart"></i><span>Toko Online</span>  <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=set_url('produk');?>">Daftar Produk</a></li>
            <li><a href="<?=set_url('produk#tambah');?>">Tambah Produk</a></li>
            <li><a href="<?=set_url('produk/kategori');?>">Kategori Produk</a></li>
            <li><a href="<?=set_url('produk/pesanan');?>">Pesanan</a></li>
            <li><a href="<?=set_url('produk/konfirmasi');?>">Konfirmasi</a></li>
          </ul>
        </li>
        <li class="<?=is_active_page_print('komentar','active');?>"> <a href="<?=set_url('komentar');?>"><i class="icon-comments-alt"></i><span>Komentar</span></a> </li>
        <li class="<?=is_active_page_print('statistik','active');?>"><a href="<?=set_url('statistik');?>"><i class="icon-signal"></i><span>Statistik</span> </a> </li>
        <li class="<?=is_active_page_print('tampilan','active');?>"><a href="<?=set_url('tampilan');?>"><i class="icon-list-alt"></i><span>Tampilan</span></a></li>
        <li class="dropdown <?=is_active_page_print('konfigurasi','active');?>"><a href="<?=set_url('konfigurasi/');?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i><span>Konfigurasi</span>  <b class="caret"></b></a>
          <ul class="dropdown-menu" id="menu-konfigurasi">
            <li><a href="<?=set_url('konfigurasi/#konfigurasi-umum');?>">Konfigurasi Umum</a></li>
            <li><a href="<?=set_url('konfigurasi/#konfigurasi-konten');?>">Konfigurasi Konten</a></li>
            <li><a href="<?=set_url('konfigurasi/#konfigurasi-komentar');?>">Konfigurasi Komentar</a></li>
            <li><a href="<?=set_url('konfigurasi/#konfigurasi-seo');?>">SEO/Webmaster</a></li>
            <li><a href="<?=set_url('konfigurasi/#konfigurasi-toko-online');?>">Konfigurasi Toko Online</a></li>
          </ul>
        </li>
        <li class="dropdown <?=is_active_page_print('user','active');?>"><a href="<?=set_url('user/index');?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><span>User</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=set_url('user');?>">Daftar Semua User</a></li>
            <li><a href="<?=set_url('user#tambah');?>">Tambah User</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
    <!-- /container -->
  </div>
  <!-- /subnavbar-inner -->
</div>
<?php } ?>
