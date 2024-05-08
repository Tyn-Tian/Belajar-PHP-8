<?php

var_dump(str_contains("Chris Tian", "Chris"));
var_dump(str_contains("Chris Tian", "Tian"));
var_dump(str_contains("Chris Tian", "Tyn"));

var_dump(str_starts_with("Chris Tian", "Chris"));
var_dump(str_starts_with("Chris Tian", "Tian"));
var_dump(str_starts_with("Chris Tian", "Aku"));

var_dump(str_ends_with("Chris Tian", "Chris"));
var_dump(str_ends_with("Chris Tian", "Tian"));
var_dump(str_ends_with("Chris Tian", "Aku"));