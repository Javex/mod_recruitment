<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

require_once( dirname(__FILE__).DS.'helper.php' );

$doc =& JFactory::getDocument();
/*$doc->addScript("modules/mod_recruitment/helper.js");*/
$doc->addStyleSheet("modules/mod_recruitment/mod_styles.css");
$recruitment = ModRecruitmentHelper::getRecruitment($module->params);


echo '<div class="module_title" id="'.$module->title.'">'.$module->title.'</div>';
echo '<div class="module_content">';

$output = '';

$output .= '<table id="recruitment"><tbody>';
foreach($recruitment as $class)
{
	$output .= '<tr>';
	$output .= '<td class="class_icon"><img src="http://www.saliva-amphora.de/images/wow/classes/'.strtolower($class["Class"]).'.png"/></td>';
	$output .= '<td class="class">'.$class["Class"].'</td>';
	$output .= '<td class="type">'.$class["Type"].'</td>';
	$output .= '</tr>';
}

$output .= '</tbody></table>';
$output .= '<a href="index.php/bewerbung" id="apply">Jetzt bewerben!</a>';
echo $output;

?>
<!--
<table id="recruitment"><tbody>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/deathknight.gif"/> DK</td>
    <td align="left" style="color: green;">DD</td>
</tr>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/druid.png"/> Druid</td>
    <td align="left" style="color: green;">Balance</td>
</tr>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/druid.png"/> Druid</td>
    <td align="left" style="color: green;">Heal</td>
</tr>
<tr>
    <td width="80px"><img src="http://www.saliva-amphora.de/images/recruitment/hunter.png"/> Hunter</td>
    <td align="left" style="color: green;">Open</td>
</tr>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/paladin.png"/> Paladin</td>
    <td align="left" style="color: green;">Holy</td>
</tr>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/priest.png"/>Priest</td>
    <td align="left" style="color: green;">Shadow</td>
</tr>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/rogue.png"/> Rogue</td>
    <td align="left" style="color: green;">Open</td>
</tr>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/shaman.png"/> Shaman</td>
    <td align="left" style="color: green;">Heal</td>
</tr>
<tr>
    <td><img src="http://www.saliva-amphora.de/images/recruitment/warrior.png"/> Warrior</td>
    <td align="left" style="color: green;">Off</td>
</tr>
</tbody></table>-->
<?php
echo '</div>';

?>