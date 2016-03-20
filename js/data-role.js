$('#id').data()
是指收集指定元素上的所有以data-开头的自定义属性，并合并成为一个对象字面量
<div id="abc" data-role="aa" data-tag="bb"></div>

$('#abc').data() = {role:'aa','tag':'bb'}