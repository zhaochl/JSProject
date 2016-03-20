查找 <li class="item-a"> 的祖先元素，直到 <ul class="level-1">，
并将它们设置为红色背景。
同时，找到 <li class="item-2"> 的所有类名为 "yes" 的祖先元素，
直到 <ul class="level-1">，然户为它们设置蓝色边框：

$("li.item-a").parentsUntil(".level-1")
  .css("background-color", "red");

$("li.item-2").parentsUntil( $("ul.level-1"), ".yes" )
  .css("border", "3px solid blue");