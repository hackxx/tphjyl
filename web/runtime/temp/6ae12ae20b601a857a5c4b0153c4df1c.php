<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"/Users/sky/Desktop/code/yhyl/web/public/../application/index/view/activity/xiaofei.html";i:1530859227;}*/ ?>
<script type="text/javascript" src="__JS__/jquery-1.9.1.js"></script>
<script>
    function hrefother(url){
        window.location.href=url;
    }
    function checkrechargetime(recharge_start,recharge_end,current){
        window.open("user_userbankinfo.html",'_self');
    }
</script>
<link rel="stylesheet" href="__CSS__/default_content.min.css">
<link rel="stylesheet" href="__CSS__/gift.min.css">
<link rel="stylesheet" href="/static/todo/images/game/game-touzhu.css">

<div class="ys-content">
    <!--<div class="header"></div>-->w
    <div class="main">
        <div class="section">
            <h3>【活动时间】2017/09/01 至 2018/10/01</h3>
            <h3>【活动内容】</h3>
            <!-- <h3>三、活动明细：</h3> -->
            <div class="content">
                <div class="step">
                    <div class="formTable">
                        <ul>
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>会员消费<?php echo $vo['all']; ?>元：奖励<?php echo $vo['amount']; ?>元</li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <h3>【领取方式】</h3>
            <div class="content">
                <div class="step">
                    <div class="formTable">
                        <span id="J-bet-order" class="add-order">
                        今日消费 <font color=red><?php echo $myxf; ?></font>
                        </span>
                        <?php if($have==false): ?>
                            <span id="J-bet-order2" onclick="xiaofei()" class="add-order">
                                今日领取
                                    <font color=red>未领取</font>
                            </span>
                        <?php else: ?>
                            <span id="J-bet-order3" class="add-order">
                                今日领取
                                    <font color=red>已领取</font>
                            </span>
                        <?php endif; ?>
                        </div>
                </div>
            </div>
            <h3>【注意事项】</h3>
            <div class="step">
                本次活动共设立15个现金回馈劵，全部现金劵金额共计53311元，每个现金劵限领取一次，根据每日投注 总量计算当日最高可领取的现金劵金额，投注量统计时间为当日凌晨3点至次日凌晨3点，当日有达标的请在 次日凌晨3点之前点击领取，超时未领取的视为放弃当日活动资格。
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script>
    function onclickgift(){
        $('#btngift').attr('disabled', 'disabled');
        hrefother('./gift_activitypoints.html?getmoney=1');
    }
   function xiaofei() {
        var v_t=$(this).attr("data-type");
        if (confirm("是否确定领取该活动金额？"))
        {
            $.ajax({
                type: "POST",
                url: "/activity/onxiaofei.html",
                data: { id: v_t },
                dataType: "json",
                global: false,
                success: function (data) {
                    if (data.code==1) {
                        alert(data.msg);
                        document.location.reload();
                    }
                    else {
                        alert(data.msg);
                    }
                },
                error: null,
                cache: false
            });
        }
    };

</script>