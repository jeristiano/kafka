{* 模板会打印$arr数组的所有值 *}
{section name=customer loop=$arr}
    {*section customer $arr*} 
    id: {$arr[customer]}<br>
{/section}<hr>

{section name=foo loop=$arr step=-1} 
    id: {$arr[foo]}<br>
{/section}<hr>

{section name=foo start=10 loop=20 step=2}
{$smarty.section.foo.index}
{/section}
<hr />
{section name=bar loop=21  step=-2 max=6}
{$smarty.section.bar.index}
{/section}






