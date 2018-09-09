<?php

require 'Chest.php';
require 'Lock.php';

$chest = new Chest(new Lock);

$chest->locked(true);

$chest->open();

$chest->close();
