$(function () {

//添加条目
    $('.sub').click(function () {
        var aname = $('[name=aname]').val();
        var email = $('[name=email]').val();
        var cellphone = $('[name=cellphone]').val();
        var url = '/oop/index.php/Demo/User/addUser';
        //Ajax请求.执行成功后,增加记录条目.
        var data = {'aname': aname, 'email': email, 'cellphone': cellphone};
        $.post(url, data, function (res) {
            var tr = '<tr><td>' + data.aname + '</td><td>' + data.email + '</td><td>' + data.cellphone + '</td><td><span data-aid="{$v.aid}" class="btn btn-success btn-sm del">删除</span><span data-aid="$v.aid"  data-aname="$v.aname" data-email="{$v.email}" data-cellphone="$v.cellphone" class="btn btn-success btn-sm edit" >编辑</span></td></tr>';
        
            console.log($('.table').append(tr));
        })

    });
    //删除条目
    $('.del').click(function () {
        if (confirm('确定删除吗?')==false) {
            return;
        }

        var aid = $(this).attr('data-aid');
        var url = '/oop/index.php/Demo/User/delUser';
        $.get(url, {'aid': aid}, function (res) {
        });
        $(this).parent().parent().remove();
    })

    //编辑条目
    $('.edit').click(function () {

//或者编辑标签里的 各个属性值  
        var aname = $(this).attr('data-aname');
        var email = $(this).attr('data-email');
        var cellphone = $(this).attr('data-cellphone');
        var aid = $(this).attr('data-aid');
        //为编辑表单赋值
        $('[name=aid]').val(aid);
        $('[name=aname]').val(aname);
        $('[name=email]').val(email);
        $('[name=cellphone]').val(cellphone);
    });

//编辑
    $('.doedit').click(function () {

        var url = '/oop/index.php/Demo/User/editUser';
        var aid = $('[name=aid]').val();
        var aname = $('[name=aname]').val();
        var email = $('[name=email]').val();
        var cellphone = $('[name=cellphone]').val();


        $.post(url, {'aid': aid, 'aname': aname, 'email': email, 'cellphone': cellphone}, function (res) {

            $('.tr_' + aid + ' .aname').text(aname);
            $('.tr_' + aid + ' .email').text(email);
            $('.tr_' + aid + ' .cellphone').text(cellphone);

        })

    });


})

       