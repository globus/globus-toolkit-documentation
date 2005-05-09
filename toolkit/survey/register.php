<?php
    $hostname = gethostbyaddr( $ip );

    # get the country id
    $query = "SELECT country_id FROM country WHERE country_name = '$country'";
    $result = pg_exec( $dbh, $query );
    $row = pg_fetch_assoc( $result );
    $country_id = $row['country_id'];

    # get the software id
    $query = "SELECT software_id FROM software WHERE software_filename = '$software'";
    $result = pg_exec( $dbh, $query );
    $row = pg_fetch_assoc( $result );
    $software_id = $row['software_id'];

    # insert the new survey
    $query = "INSERT INTO survey ( " .
        "survey_country_id, " .
        "survey_software_id, " .
        "survey_date, " .
        "survey_ip, " .
        "survey_hostname, " .
        "survey_first_name, " .
        "survey_last_name, " .
        "survey_title, " .
        "survey_org, " .
        "survey_comments " .
        " ) VALUES ( " .
        " '$country_id', " .
        " '$software_id', " .
        " current_date, " .
        " '$ip', " .
        " '$hostname', " .
        " '$first', " .
        " '$last', " .
        " '$title', " .
        " '$org', " .
        " '$comments' " .
        " )";

    $result = pg_exec( $dbh, $query );

    $query = "SELECT software_url_base from software where " .
        "software_filename = '$software'";
    $result = pg_exec( $dbh, $query );
    $row = pg_fetch_assoc( $result );
    $link = $row['software_url_base'] . $software;
    print "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1;URL=$link\">";

?>
