<?php
include_once "init.php";

$dataJordan = $db->getData('region?region=jordan')->data;
$country = $dataJordan->summary;
$globalSata = $db->getData('latest')->data->summary;
include_once $templates . "header.inc.php";
?>
<header>
    <div class="container">
        <div class="row">
            <div id="top_nav">
                <img src="<?php echo $db->getUrl('img', false) . 'Site.svg' ?>" alt="">
                <h1>حالات الإصابة بفيروس (كوفيد-١٩)</h1>
            </div>
        </div>
    </div>
</header>

<div class="global_data">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>عالميا</h2>
            </div>
        </div>
        <div class="row">
            <table class="table text-center table-striped table-bordered" style="width:100%" dir="rtl">
                <thead>
                    <tr>
                        <th scope="col">الإصابات</th>
                        <th scope="col">النشطة</th>
                        <th scope="col">التعافي</th>
                        <th scope="col">الوفيات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td dir="rtl">
                            <span class="num gry"><?php echo $globalSata->total_cases ?></span>
                        </td>
                        <td dir="rtl">
                            <span class="num gry"><?php echo $globalSata->active_cases ?></span>
                        </td>
                        <td dir="rtl">
                            <span class="num gry"><?php echo $globalSata->recovered ?></span>
                        </td>
                        <td dir="rtl">
                            <span class="num gry"><?php echo $globalSata->deaths ?></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-right" dir="rtl"> <small><b>الإصابات:</b> تشمل جميع الحالات المصابة والمتعافية والوفيات.</small> <br> <small><b>النشطة:</b> هي
                الحالات التي ما زالت مصابة ولم تتعافى بعد.</small> <br> <small><b>التعافي:</b> هي الحالات التي تعافت
                وشفيت من الفيروس.</small> <br> <small>*للحصول على أرقام أكثر دقة يجب الرجوع إلى الجهات الرسمية في كل
                دولة.</small></p>
        <div class="row">
            <div class="col text-center">
                <img src="<?php echo $db->getUrl('img', false) . 'Flag_of_Jordan.svg' ?>" alt="" width="100px">

                <h2>في الأردن</h2>
            </div>
        </div>
        <div class="row">
            <table class="table text-center table-striped table-bordered" style="width:100%" dir="rtl">
                <caption>Last Update : <?php echo date('Y-m-d', time()) ?></caption>
                <thead>
                    <tr dir="rtl">
                        <th scope="col">الإصابات</th>
                        <th scope="col">النشطة</th>
                        <th scope="col">التعافي</th>
                        <th scope="col">الوفيات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir="rtl">
                        <td dir="rtl">
                            <span class="num gry"><?php echo $country->total_cases ?></span>
                        </td>
                        <td dir="rtl">
                            <span class="num gry"><?php echo $country->active_cases ?></span>
                        </td>
                        <td dir="rtl">
                            <span class="num gry"><?php echo $country->recovered ?></span>
                        </td>
                        <td dir="rtl">
                            <span class="num gry"><?php echo $country->deaths ?></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once $templates . "footer.inc.php"; ?>