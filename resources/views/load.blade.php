<div id="preloader_malc">

    <div>

        <img src="/images/load.gif">
        <img src="/images/loading.gif">

    </div>

</div>

<style type="text/css">
    #preloader_malc {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #00FFFF;
        z-index: 99
    }

    #preloader_malc div {
        background: #00FFFF;
        width: 200px;
        height: 210px;
        line-height: 40px;
        border-radius: 8px;
        font-family: arial;
        font-size: 25px;
        color: #FFFFFF;
        text-align: center;
        box-shadow: 0 2px 6px #00FFFF;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto
    }
</style>

<script type="text/javascript">

    window.onload = function () {

        setTimeout(function () {

            document.getElementById("preloader_malc").style.display = "none";

        }, 2800);

    };

</script>


