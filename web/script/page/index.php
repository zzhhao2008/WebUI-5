<?php view::header(); ?>
<div class="row">
    <div class="col-sm-8 abox first_row">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- 指示符 -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <!-- 轮播图片 -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img decoding="async" src="https://static.runoob.com/images/mix/img_fjords_wide.jpg" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img decoding="async" src="https://static.runoob.com/images/mix/img_nature_wide.jpg" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img decoding="async" src="https://static.runoob.com/images/mix/img_mountains_wide.jpg" class="d-block" style="width:100%">
                </div>
            </div>

            <!-- 左右切换按钮 -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="col-sm-4 first_row">
        <div class="abox" style="position:relative;min-height:200px">
            <div style="text-align: center;font-size:75px;margin:auto;" class="clock" id="time"></div>
            <div style="text-align: center;font-size:25px;margin:auto;" id='date'></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="abox">
            <div class="problemjump">
                
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="abox">
            <h2 style="text-align:center;margin-top:35px" id="welcometxt">Welcome To ZSV-WebUI5!</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="abox">
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="abox">
            <h4>公告</h4>
            <ul>
                
            </ul>
        </div>
    </div>
</div>
<?php view::foot(); ?>
<script>
    function gettime() {
        var nowtime = new Date();
        var hours = nowtime.getHours().toString().padStart(2, "0");
        var minutes = nowtime.getMinutes().toString().padStart(2, "0");
        var seconds = nowtime.getSeconds().toString().padStart(2, "0");
        var milliseconds = nowtime.getMilliseconds().toString().padStart(3, "0");
        document.getElementById("time").innerHTML = hours + ":" + minutes + ":" + seconds //+ "<span class='ms'>." + milliseconds+"</span>";
        document.getElementById("date").innerHTML = nowtime.getFullYear() + "年" +
            (nowtime.getMonth() + 1) + "月" +
            +nowtime.getDate() + "日";
    }
    gettime()
    sh = setInterval(function() {
        gettime()
    }, 1000);
    fetch("goodspeak")
        .then(res => res.json())
        .then(data =>
            document.getElementById("welcometxt").innerHTML = data
        )
        .catch(err => console.log(err));
</script>
<style>
    h1 {
        font-weight: 300;
    }

    .clock {
        position: absolute;
        height: 100px;
        line-height: 100px;
        top: calc(50% - 60px);
        text-align: center;
        width: 100%;
        font-weight: 300;
    }

    #date {
        position: absolute;
        height: 50px;
        line-height: 50px;
        top: calc(50% + 25px);
        text-align: center;
        width: 100%;
        font-weight: 300;
    }
</style>
