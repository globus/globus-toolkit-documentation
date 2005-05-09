<h1>Optional Globus Toolkit Survey</h1>

<p>Before your download begins, please take a few quick seconds to
fill out this <i>brief</i> survey. Note that all fields in the survey
are <i>optional.</i>  By providing some or all of this information, you
are helping us justify the continued funding of our open-source project.
Your efforts that enable us to improve our software are much appreciated.
Thank you.</p>

<p>If you would like to discuss the Globus Toolkit with the community, please
subscribe to one of our <a href="../support.html">mailing lists</a>.</p>

<form method=post action=<?php echo $PHP_SELF; ?>>

<table>
<tr>
<td>
    First Name:
</td>
<td>
    <input name="first" value=<?php echo $first; ?>>
</td>
</tr>
<tr>
<td>
    Last Name:
</td>
<td>
    <input name="last" value=<?php echo $last; ?>>
</td>
</tr>
<tr>
<td>
    Title:
</td>
<td>
    <input name="title" value=<?php echo $title; ?>>
</td>
</tr>
<tr>
<td>
    Organization:
</td>
<td>
    <input name="org" value=<?php echo $org; ?>>
</td>
</tr>
<tr>
<td>
    Country:
</td>
<td>
    <select name="country">
<?php
    $query = "SELECT country_name FROM country";
    $result = pg_exec( $dbh, $query );

    while ( $row = pg_fetch_assoc( $result ) )
    {
        print "<option ";
        if ( $country == $row['country_name'] )
        {
            print "selected=\"selected\" ";
        }
        if ( ( $row['country_name'] == "United States" ) and
            ( $country == "" ) )
        {
            print "selected=\"selected\" ";
        }
        print "value=\"" . $row['country_name'] . 
            "\">" . $row['country_name'] . "</option>\n";
    }
?>
    </select>
</td>
</tr>
<tr>
<td>
    Software:
</td>
<td>
<?php 
    if ( $software != "" )
    {
        $query = "SELECT software_filename FROM software where " .
            "software_filename = '$software'";
        $result = pg_exec( $dbh, $query );
        if ( $row = pg_fetch_assoc( $result ) )
        {
            print $software;
            print "<input type=hidden value=$software name=software>";
        }
        else
        {
            $software = "";
        }
    }
    if ( $software == "" )
    {
        print "<select name=software>\n";

        $query = "SELECT software_filename FROM software";
        $result = pg_exec( $dbh, $query );
        $row = pg_fetch_assoc( $result );

        print "<option selected=selected value=" . $row['software_filename'] .
            ">" . $row['software_filename'] . "</option>\n";

        while ( $row = pg_fetch_assoc( $result ) )
        {
            print "<option value=\"" . $row['software_filename'] . 
                "\">" . $row['software_filename'] . "</option>\n";
        }
        print "</select>\n";
    }
?>
</td>
</tr>
<tr>
<td valign=top>
    Planned Use<br>and Comments:
</td>
<td>
    <textarea name=comments rows=5 cols=50><?php echo $comments; ?></textarea>
</td>
</tr>
</table>

<p>Please read our <a href=privacy.php>privacy</a> policy.</p>

<input type="reset" value="&nbsp; Reset &nbsp;">
<input type="submit" value="&nbsp; Download &nbsp;">

</form>
