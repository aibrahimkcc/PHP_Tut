<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php $skor=90?>
    <?php if($skor >=90): ?>
        <strong style="font-size:100px; color:green;">A</strong>
    <?php elseif($skor >=80) :?>
        <strong>B</strong>
    <?php elseif($skor>=70):?>
        <strong>C</strong>
    <?php elseif($skor>=60):?>
        <strong>D</strong>
    <?php else:?>
        <strong style="color:red">F</strong>
    <?php endif?>
</body>
</html>