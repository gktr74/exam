<?
function dump($var, $die = false, $all = false)
{
    global $USER;
    if( ($USER->GetID() == 1))
    {
        ?>
        <font style="text-align: left; font-size: 10px"><pre><?var_dump($var)?></pre></font><br>
        <?
    }
    if($die)
    {
        die;
    }
}

function my_dump($var)
{
    global $USER;
    if($USER-> isAdmin()) {
       ?> <pre>
    <? print_r($var);?>
</pre>
<?php }
?>

<?php }