<div class="signcontainer">
    <h2 style="text-align: center"><?=$association_name?></h2>
    <p style="text-align: center">你们需要支付的金额为：</p>
    <h1 style="text-align: center; color: #ff0000"><?=$bill?>元</h1>
    <hr/>

    <p>请将参赛费用在4月27日23:59之前转账至以下帐户：</p>
    <p>帐号：6212 2602 0008 5883 805</p>
    <p>开户行：中国工商银行 （海淀西区支行）</p>
    <p>姓名：蓝添翼</p>
    <p>如有疑问请发邮件至 racemoney@163.com</p>
    <p><strong>请在转账时将学校和领队姓名等信息写在备注中</strong></p>
    <p style="color: red">不接受其他任何缴费方式!</p>

    <hr/>
    <button id="return-to-index" class="btn-success btn btn-block">返回主页</button>
</div>
<script>
    $("#return-to-index").click(function() {
        window.location.assign("<?=site_url('index')?>");
    });
</script>
