$(function () {
    //单击提交按钮,触发单击事件
    $('.doUser').click(function () {
        //获得隐藏表单内容
        var aid = $('del2').attr('data-aid');
        var aname = $('[name=aname]').val();
        var email = $('[name=email]').val();
        var cellphone = $('[name=cellphone]').val();
        //ajax  post 请求
        var url = '/oop/index.php/Demo/Index/addUser';
        $.post(url, {'aname': aname, 'email': email, 'cellphone': cellphone});

        //向表格中插入结果
        var tr = '<tr><td>' + aname + '</td><td>' + email + '</td><td>' + cellphone + '</td><td><span class="btn btn-success btn-sm del2 " >删除</span><span class="btn btn-success btn-sm edit2" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2" data-aid="{$v.aid}" data-aname="{$v.aname}" data-email="{$v.email}" data-cellphone="{$v.cellphone}">编辑</span></td></tr>';
        $('.table2').append(tr);


    });
    //单击删除
    $('.del2').click(function () {

        if (confirm('确定删除吗?') == false) {
            return;
        }

        //获得删除item的aid        
        var aid = $(this).attr('data-aid');
        var url = '/oop/index.php/Demo/Index/delUser';
        $.get(url, {'aid': aid});
        //前台删除当前条目
        $(this).parent().parent().remove();
    });

    //编辑
    $('.edit2').click(function () {
        //获取原条目数据
        var aid = $(this).attr('data-aid');
        var aname = $(this).attr('data-aname');
        var email = $(this).attr('data-email');
        var cellphone = $(this).attr('data-cellphone');
        //为表单填充数据
        $('[ename=aid]').val(aid);
        $('[ename=aname]').val(aname);
        $('[ename=email]').val(email);
        $('[ename=cellphone]').val(cellphone);

    });
    //编辑提交
    $('.editUser2').click(function () {
        var aid = $(this).attr('data-aid');
        //获取用户修改的信息
       var aname= $('[ename=aname]').val();
       var email=  $('[ename=email]').val();
       var cellphone=  $('[ename=cellphone]').val();
        var url ='/oop/index.php/Demo/Index/editUser';
        $.post(url,{'aid':aid,'aname': aname, 'email': email, 'cellphone': cellphone},function(res){
          
             $('tr_'+aid+' .aname').text(aname);
            $('tr_'+aid+' .email').text(email);
            $('tr_'+aid+' .cellphone').text(cellphone);            
       
        });    
     

    });


});