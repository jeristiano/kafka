
{html_radios name='id' values=$sex output=$name
selected=1 separator='<br />'}


{html_table loop=$data}
{html_table loop=$data cols="first,second,third,fourth,fiveth" tr_attr=$tr}
{html_table loop=$data cols=5 table_attr='border="0"'}

