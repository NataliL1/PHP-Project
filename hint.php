<?php
$a[] = "Габриела Иванова";
$a[] = "Виктория Лалева";
$a[] = "Христина Велкова";
$a[] = "Евелиана Радева";
$a[] = "Кристиян Тодоров";
$a[] = "Мартин Петров";
$a[] = "Бойко Лъчезаров";
$a[] = "Радмил Василев";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "Няма съвпадения" : $hint;

?>