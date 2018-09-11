<?php
if(isset($_POST['submit']))
{
    $person1 = $_POST['person1'];
    $exclamation1 = $_POST['exclamation1'];
    $verb1 = $_POST['verb1'];
    $verb2 = $_POST['verb2'];
    $place1 = $_POST['place1'];
    $place2 = $_POST['place2'];
    $noun1 = $_POST['noun1'];
    $verb3 = $_POST['verb3'];
    $noun2 = $_POST['noun2'];
    $exclamation2 = $_POST['exclamation2'];
    echo "<h1>Mad Lib</h1>
    <h2>My Skates!</h2>
    We live on a lake. Today <b>{$person1}</b> tested the ice. <b>{$exclamation1}</b> it's frozen!<br>
    Now I am off to <b>{$verb1}</b> my skates. I <b>{$verb2}</b> in the <b>{$place1}</b>, <br>
    not there. I look in the <b>{$place2}</b>, nope not there. I search high and low for my ice <b>{$noun1}</b>.<br>
    Ok so the one place I haven't looked, <b>{$verb3}</b> my <b>{$noun2}</b>. <b>{$exclamation2}</b><br>
    they are there!<br>
    Let's go skating!<br>";
}