<?php
include 'connection.php';
$query="SELECT * FROM user ";
$result=mysql_query($query) or die (mysql_error());
$fetch = mysql_fetch_assoc($result)
?>
    <form action="includes/user_panel.php" method="POST">
                <table>
                    <tr>
                        <td><label for="userID">userID</label></td>
                        <td><input type="text" name="email" id="email" value="<?php echo "{$fetch['userID']}"; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="name">  name </label></td>
                        <td><input type="text" name="name" id="name" value="<?php echo "{$fetch['name']}"; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="last_name"> Last name </label></td>
                        <td><input type="text" name="last_name" id="last_name" value="<?php echo "{$fetch['last_name']}"; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="type"> Sex </label></td>
                        <?php
                        if ($fetch['type'] = hero)
                        {
                            echo "<td><input type='radio' name='hero' value='hero' id='hero' checked>hero <input type='radio' name='creeps' value='creeps' id='creeps'>creeps  <input type='radio' name='elf' value='elf' id='elf'>elf <input type='radio' name='minions' value='minions' id='minions'>minions</td>";
                        }
                        if($fetch['type'] = creeps)
                        {
                            echo "<td><input type='radio' name='hero' value='hero' id='hero' >hero <input type='radio' name='creeps' value='creeps' id='creeps' checked>creeps  <input type='radio' name='elf' value='elf' id='elf'>elf <input type='radio' name='minions' value='minions' id='minions'>minions</td>";

                        }
                        if($fetch['type'] = elf)
                        {
                            echo "<td><input type='radio' name='hero' value='hero' id='hero' >hero <input type='radio' name='creeps' value='creeps' id='creeps' >creeps  <input type='radio' name='elf' value='elf' id='elf' checked>elf <input type='radio' name='minions' value='minions' id='minions'>minions</td>";

                        }
                        if($fetch['type'] = minions)
                        {
                            echo "<td><input type='radio' name='hero' value='hero' id='hero' >hero <input type='radio' name='creeps' value='creeps' id='creeps' >creeps  <input type='radio' name='elf' value='elf' id='elf'>elf <input type='radio' name='minions' value='minions' id='minions' checked>minions</td>";

                        }
                        ?>
</tr>
</table>
</br>
<input type="submit" name="edit_user" value="Edit" class="button_1">
<input type="hidden" name="edit_user_data">
</form>