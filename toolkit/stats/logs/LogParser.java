import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.BufferedReader;
import java.io.IOException;
import java.text.NumberFormat;
import java.text.SimpleDateFormat;
import java.util.regex.Pattern;
import java.util.regex.Matcher;
import java.util.Calendar;
import java.util.Enumeration;
import java.util.Hashtable;
import java.util.NoSuchElementException;
import java.util.StringTokenizer;
import java.util.Vector;

/**
 * Parse the FTP and HTTP logs from globus.org, tally up the results.
 *
 * <gose@mcs.anl.gov>
 */
public class LogParser
{
    // ---- Constant(s) ----
    
    // ---- Data field(s) ----

    public static final boolean DEBUG = ( System.getProperty( "DEBUG" ) == null ? false : true );

    static String version = null;
    static Calendar begin_date = Calendar.getInstance();
    static Calendar end_date = Calendar.getInstance();

    Hashtable table = new Hashtable();
    Hashtable months = new Hashtable();
    boolean can_categorize = false;
    static boolean single_date = false;
    Integer total = new Integer( 0 );

    // ---- Constructor(s) ----

    public LogParser()
    {
        /* Initialize 'month' Hastable */
        months.put( "jan", "0" );
        months.put( "feb", "1" );
        months.put( "mar", "2" );
        months.put( "apr", "3" );
        months.put( "may", "4" );
        months.put( "jun", "5" );
        months.put( "jul", "6" );
        months.put( "aug", "7" );
        months.put( "sep", "8" );
        months.put( "oct", "9" );
        months.put( "nov", "10" );
        months.put( "dec", "11" );

        checkVersion();
        parseFtpLog();
        parseHttpLog();
        calculateTotal();

        if ( single_date )
        {
            outputGNUPlotData();
        }

        if ( can_categorize )
        {
            writeSummary();
        }

        writeResults();
    }

    // ---- Method(s) ----

    public static void main( String[] args )
    {
        debug( "ON" );

        if ( args.length == 1 )         /* search entire set of logs */
        {
            begin_date.set( 1978, 01, 01, 0, 0, 0 );
            end_date.set( 2012, 01, 01, 0, 0, 0 );
        }
        else if ( args.length == 4 )    /* search logs for one date */
        {
            single_date = true;

            /* Look into using SimpleDateFormat to read in the args */

            begin_date.set( Integer.parseInt( args[3] ),
                Integer.parseInt( args[1] ) - 1,
                Integer.parseInt( args[2] ),
                0, 0, 0 );

            end_date.set( Integer.parseInt( args[3] ),
                Integer.parseInt( args[1] ) - 1,
                Integer.parseInt( args[2] ) + 1,
                0, 0, 0 );
        }
        else if ( args.length == 7 )    /* search logs between two dates */
        {
            begin_date.set( Integer.parseInt( args[3] ),
                Integer.parseInt( args[1] ) - 1,
                Integer.parseInt( args[2] ),
                0, 0, 0 );

            end_date.set( Integer.parseInt( args[6] ),
                Integer.parseInt( args[4] ) - 1,
                Integer.parseInt( args[5] ),
                0, 0, 0 );
        }
        else 
        {
            System.out.println();
            System.out.println( "Dates must have the form MM DD YYYY." );
            System.out.println();
            System.out.println( "Usage: java LogParser <version> [<date> [<date>]]" );
            System.out.println();
            System.out.println( "  Search the logs for <version>." );
            System.out.println();
            System.out.println( "  Search the logs for <version> on a particular <date>." );
            System.out.println();
            System.out.println( "  Search the logs for <version> inbetween <date> and <date>." );
            System.out.println();

            System.exit( 0 );
        }

        version = args[0];

        debug( "version     -> " + version );

        debug( "begin year  -> " + begin_date.get( Calendar.YEAR ) );
        debug( "begin month -> " + begin_date.get( Calendar.MONTH ) );
        debug( "begin date  -> " + begin_date.get( Calendar.DATE ) );
        debug( "begin hour  -> " + begin_date.get( Calendar.HOUR ) );
        debug( "begin minute-> " + begin_date.get( Calendar.MINUTE ) );
        debug( "begin second-> " + begin_date.get( Calendar.SECOND ) );

        debug( "end year    -> " + end_date.get( Calendar.YEAR ) );
        debug( "end month   -> " + end_date.get( Calendar.MONTH ) );
        debug( "end date    -> " + end_date.get( Calendar.DATE ) );
        debug( "end hour    -> " + end_date.get( Calendar.HOUR ) );
        debug( "end minute  -> " + end_date.get( Calendar.MINUTE ) );
        debug( "end second  -> " + end_date.get( Calendar.SECOND ) );

        new LogParser();
    }

    /**
     * Based on the version passed in, populate a Hashtable with the
     * files associated with that release.
     */
    void checkVersion()
    {
        if ( version.equals( "1.0.0" ) )
        {
            table.put( "globus-1.0.0.tar.gz", new Integer( 0 ) );
        }
        else if ( version.equals( "1.1.1" ) )
        {
            table.put( "globus-1.1.1.tar.gz", new Integer( 0 ) );
        }
        else if ( version.equals( "1.1.2" ) )
        {
            table.put( "globus-1.1.2.tar.gz", new Integer( 0 ) );
        }
        else if ( version.equals( "1.1.3" ) )
        {
            table.put( "globus-1.1.3.tar.gz", new Integer( 0 ) );
        }
        else if ( version.equals( "1.1.4" ) )
        {
            table.put( "globus-1.1.4.tar.gz", new Integer( 0 ) );
        }
        else if ( version.equals( "2.0.0" ) )
        {
            File f = new File( "/mcs/ftp.globus.org/pub/gt2/2.0/bundles/bin" );
            String[] files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }

            f = new File( "/mcs/ftp.globus.org/pub/gt2/2.0/bundles/src" );
            files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }
        }
        else if ( version.equals( "2.2.2" ) )
        {
            can_categorize = true;

            File f = new File( "/mcs/ftp.globus.org/pub/gt2/2.2/2.2.2/bundles/bin" );
            String[] files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }

            f = new File( "/mcs/ftp.globus.org/pub/gt2/2.2/2.2.2/bundles/src" );
            files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }
        }
        else if ( version.equals( "2.2.3" ) )
        {
            can_categorize = true;

            File f = new File( "/mcs/ftp.globus.org/pub/gt2/2.2/2.2.3/bundles/bin" );
            String[] files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }

            f = new File( "/mcs/ftp.globus.org/pub/gt2/2.2/2.2.3/bundles/src" );
            files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }
        }
        else if ( version.equals( "2.2.4" ) )
        {
            can_categorize = true;

            File f = new File( "/mcs/ftp.globus.org/pub/gt2/2.2/2.2.4/bundles/bin" );
            String[] files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }

            f = new File( "/mcs/ftp.globus.org/pub/gt2/2.2/2.2.4/bundles/src" );
            files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }
        }
        else if ( version.equals( "2.4.0" ) )
        {
            can_categorize = true;

            File f = new File( "/mcs/ftp.globus.org/pub/gt2/2.4/2.4.0/bundles/bin" );
            String[] files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }

            f = new File( "/mcs/ftp.globus.org/pub/gt2/2.4/2.4.0/bundles/src" );
            files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }
        }
        else if ( version.equals( "2.4.1" ) )
        {
            can_categorize = true;

            File f = new File( "/mcs/ftp.globus.org/pub/gt2/2.4/2.4.1/bundles/bin" );
            String[] files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }

            f = new File( "/mcs/ftp.globus.org/pub/gt2/2.4/2.4.1/bundles/src" );
            files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }
        }
        else if ( version.equals( "2.4.2" ) )
        {
            can_categorize = true;

            File f = new File( "/mcs/ftp.globus.org/pub/gt2/2.4/2.4.2/bundles/bin" );
            String[] files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }

            f = new File( "/mcs/ftp.globus.org/pub/gt2/2.4/2.4.2/bundles/src" );
            files = f.list();

            for ( int i = 0; i < files.length; i++ )
            {
                table.put( files[i], new Integer( 0 ) );   
            }
        }
        else if ( version.equals( "3.0.0" ) )
        {
            can_categorize = false;
            table.put( "gt3-base-installer.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-core-bin.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-core-src.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-gars-bin.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-linux-installer.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-src-installer-rls.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-src-installer.tar.gz", new Integer( 0 ) );   
        }
        else if ( version.equals( "3.0.1" ) )
        {
            can_categorize = false;
            table.put( "globus-rls-server-2.0.8-src_bundle.tar.gz", new Integer( 0 ) );   
            table.put( "gt3.0.1-base-installer.tar.gz", new Integer( 0 ) );   
            table.put( "gt3.0.1-linux-installer.tar.gz", new Integer( 0 ) );   
            table.put( "gt3.0.1-source-installer.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-core-bin.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-core-src.tar.gz", new Integer( 0 ) );   
            table.put( "gt3-gars-bin.tar.gz", new Integer( 0 ) );   
        }
        else
        {
            System.out.println( "Bad version: " + version );
            System.exit( 0 );
        }
    }

    /**
     * Parse the FTP log file(s).
     */
    void parseFtpLog()
    {
        // File f = new File( "/sandbox/gose/xferlog" );
        File f = new File( "/nfs/logs/virtual/globus.org/xferlog" );

        Calendar entry_date = Calendar.getInstance();
        String line;
        String file;
        String second;
        String minute;
        String hour;
        String time;
        String day;
        String month;
        String year;
        Vector tokens = new Vector();
        StringTokenizer st;

        try
        {
            BufferedReader br = new BufferedReader( new FileReader( f ) );
            while ( ( line = br.readLine() ) != null )
            // for ( int j = 0; j < 20; j++ )
            {
                // line = br.readLine(); /* for 'for' loop */
                /**
                 * Extract the full filename, date, and time.
                 */
                st = new StringTokenizer( line, " " );
                while ( st.hasMoreTokens() )
                {
                    tokens.add( st.nextToken() );
                }
                time = (String)tokens.get( 3 );
                day = (String)tokens.get( 2 );
                month = (String)tokens.get( 1 );
                year = (String)tokens.get( 4 );
                file = (String)tokens.get( 8 );

                // debug( "day         -> " + day );
                // debug( "month       -> " + month );
                // debug( "year        -> " + year );
                // debug( "time        -> " + time );
                // debug( "file path   -> " + file );

                tokens.clear();

                /**
                 * Extract the hour, minute and seconds from the time.
                 */
                st = new StringTokenizer( time, ":" );
                while ( st.hasMoreTokens() )
                {
                    tokens.add( st.nextToken() );
                }
                hour = (String)tokens.get( 0 );
                minute = (String)tokens.get( 1 );
                second = (String)tokens.get( 2 );

                // debug( "hour        -> " + hour );
                // debug( "minute      -> " + minute );
                // debug( "second      -> " + second );

                entry_date.set( Integer.parseInt( year ),
                    Integer.parseInt( (String)months.get( month.toLowerCase() ) ),
                    Integer.parseInt( day ),
                    Integer.parseInt( hour ),
                    Integer.parseInt( minute ),
                    Integer.parseInt( second ) );

                tokens.clear();

                if ( begin_date.before( entry_date ) && end_date.after( entry_date ) )
                {

                    /**
                     * Extract the filename from the absolute path.
                     */
                    st = new StringTokenizer( file, File.separator );
                    while ( st.hasMoreTokens() )
                    {
                        tokens.add( st.nextToken() );
                    }
                    file = (String)tokens.lastElement();
                    // debug( "filename    -> " + file );

                    tokens.clear();

                    /**
                     * Check to see if it's a file in our Hashtable, and
                     * if so, increment the value of the key.
                     */
                    if ( table.containsKey( file ) )
                    {
                        Integer i;
                        i = new Integer( ((Integer)table.get(file)).intValue() + 1 );
                        table.put( file, i );
                    }
                }
            }
        }
        catch ( IOException e ) { }
    }

    /**
     * Parse the HTTP log file(s).
     */
    void parseHttpLog()
    {
        // File f = new File( "/sandbox/gose/access_log" );
        File f = new File( "/nfs/logs/http/www-unix.globus.org/access_log" );

        Calendar entry_date = Calendar.getInstance();
        String line;
        String file;
        String second;
        String minute;
        String hour;
        String day;
        String month;
        String year;
        Vector tokens = new Vector();
        StringTokenizer st;

        try
        {
            BufferedReader br = new BufferedReader( new FileReader( f ) );
            while ( ( line = br.readLine() ) != null )
            // for ( int j = 0; j < 20; j++ )
            {
                // line = br.readLine(); /* for 'for' loop */
                /**
                 * Extract the full filename, date, and time.
                 */
                st = new StringTokenizer( line, " " );
                while ( st.hasMoreTokens() )
                {
                    tokens.add( st.nextToken() );
                }
                
                try
                {
                    line = (String)tokens.get( 3 );
                    file = (String)tokens.get( 6 );

                    tokens.clear();

                    try
                    {
                        day = line.substring( 1, 3 );
                        month = line.substring( 4, 7 );
                        year = line.substring( 8, 12 );
                        hour = line.substring( 13, 15 );
                        minute = line.substring( 16, 18 );
                        second = line.substring( 19, 21 );

                        // debug( "day         -> " + day );
                        // debug( "month       -> " + month );
                        // debug( "year        -> " + year );
                        // debug( "hour        -> " + hour );
                        // debug( "minute      -> " + minute );
                        // debug( "second      -> " + second );
                        // debug( "file path   -> " + file );

                        entry_date.set( Integer.parseInt( year ),
                            Integer.parseInt( (String)months.get( month.toLowerCase() ) ),
                            Integer.parseInt( day ),
                            Integer.parseInt( hour ),
                            Integer.parseInt( minute ),
                            Integer.parseInt( second ) );

                        if ( begin_date.before( entry_date ) && end_date.after( entry_date ) )
                        {
                            /**
                             * Extract the filename from the absolute path.
                             */
                            st = new StringTokenizer( file, File.separator );
                            while ( st.hasMoreTokens() )
                            {
                                tokens.add( st.nextToken() );
                            }
                            try 
                            {
                                file = (String)tokens.lastElement();
                                // debug( "filename    -> " + file );

                                tokens.clear();

                                /**
                                 * Check to see if it's a file in our Hashtable, and
                                 * if so, increment the value of the key.
                                 */
                                if ( table.containsKey( file ) )
                                {
                                    Integer i;
                                    i = new Integer( ((Integer)table.get(file)).intValue() + 1 );
                                    table.put( file, i );
                                }
                            }
                            catch ( NoSuchElementException e ) { }
                        }
                    }
                    catch ( StringIndexOutOfBoundsException e ) { }
                }
                catch ( ArrayIndexOutOfBoundsException e ) { } 
            }
        }
        catch ( IOException e ) { }
    }

    /**
     * Calculate total downloads.
     */
    void calculateTotal()
    {
        Enumeration keys = table.keys();

        while( keys.hasMoreElements() )
        {
            String key = (String)keys.nextElement();
            Integer value = (Integer)table.get( key );

            total = new Integer( total.intValue() + value.intValue() );
        }

        debug( "total       -> " + total.toString() );
    }

    /**
     * Generate GNU Plot data by appending the date and the total 
     * to "data/<version>.dat".
     */
    void outputGNUPlotData()
    {
        Calendar entry_date = Calendar.getInstance();
        SimpleDateFormat sdf = new SimpleDateFormat( "MM-dd-yyyy" );
        String date;
        String line;
        String grand_total;
        Integer new_grand_total = new Integer ( 0 );
        Vector tokens = new Vector();
        StringTokenizer st;

        File f = new File( "data/" + version + ".date" );

        try
        {
            BufferedReader br = new BufferedReader( new FileReader( f ) );
            while ( ( line = br.readLine() ) != null )
            {
                if ( line.startsWith( "#" ) )
                {
                    continue;
                }

                /**
                 * Extract the entry date and grand total.
                 */
                st = new StringTokenizer( line, " " );
                while ( st.hasMoreTokens() )
                {
                    tokens.add( st.nextToken() );
                }

                date = (String)tokens.get( 0 );
                debug( "GNUPlotData: date: " + date );

                grand_total = (String)tokens.get( 2 );
                debug( "GNUPlotData: grand_total: " + grand_total );

                /* entry_date's date is incremented by one so we can
                 * check for equality below when we see if it is the 
                 * day before begin_date.
                 */
                entry_date.set( Integer.parseInt( date.substring( 6, 10 ) ),
                    Integer.parseInt( date.substring( 0, 2 ) ) - 1,
                    Integer.parseInt( date.substring( 3, 5 ) ) + 1,
                    0, 0, 0 );

                debug( "entry year    -> " + entry_date.get( Calendar.YEAR ) );
                debug( "entry month   -> " + entry_date.get( Calendar.MONTH ) );
                debug( "entry date    -> " + entry_date.get( Calendar.DATE ) );
                debug( "entry hour    -> " + entry_date.get( Calendar.HOUR ) );
                debug( "entry minute  -> " + entry_date.get( Calendar.MINUTE ) );
                debug( "entry second  -> " + entry_date.get( Calendar.SECOND ) );

                tokens.clear();

                /**
                 * If the entry date (which was incremented by 1) is
                 * equal to the begin_date (i.e., the entry_date is the
                 * day before begin_date), then update the grand_total.
                 */
                // if ( entry_date.equals( begin_date ) )
                if ( entry_date.get( Calendar.YEAR ) == begin_date.get( Calendar.YEAR ) && 
                    entry_date.get( Calendar.MONTH ) == begin_date.get( Calendar.MONTH ) &&
                    entry_date.get( Calendar.DATE ) == begin_date.get( Calendar.DATE ) )
                {
                    debug( "GNUPlotData: Found previous date" );
                    new_grand_total = new Integer( Integer.parseInt( grand_total ) + total.intValue() );
                    /* grand_total holds previous grand_total */
                    break;
                }
                else
                {
                    new_grand_total = new Integer( total.intValue() );
                }
                    
            }
            br.close();

            date = sdf.format( begin_date.getTime() );

            /* now open it for appending */
            FileWriter fw = new FileWriter( f, true );
            fw.write( date );
            fw.write( "              " );
            fw.write( total.toString() );
            fw.write( "               " );
            fw.write( new_grand_total.toString() );
            fw.write( "\n" );
            fw.close();
        }
        catch( IOException e ) { }
    }

    /**
     * Categorize the download files and their numbers.  
     * Note: These do NOT apply to releases prior to 2.2!
     */
    void writeSummary()
    {
        Integer source      = new Integer( 0 );
        Integer linux       = new Integer( 0 );
        Integer solaris     = new Integer( 0 );
        Integer hpux        = new Integer( 0 );
        Integer irix        = new Integer( 0 );
        Integer tru64       = new Integer( 0 );

        /* Operating Systems */
        Pattern source_pattern = Pattern.compile( "src" );
        Pattern linux_pattern = Pattern.compile( "linux" );
        Pattern hpux_pattern = Pattern.compile( "hpux" );
        Pattern solaris_pattern = Pattern.compile( "solaris" );
        Pattern irix_pattern = Pattern.compile( "irix" );
        Pattern tru64_pattern = Pattern.compile( "osf" );

        NumberFormat nf = NumberFormat.getInstance();
        nf.setMaximumFractionDigits( 2 );
        nf.setMinimumFractionDigits( 2 );

        Enumeration keys = table.keys();

        while( keys.hasMoreElements() )
        {
            String key = (String)keys.nextElement();
            Integer value = (Integer)table.get( key );

            Matcher source_match    = source_pattern.matcher( key );
            Matcher linux_match     = linux_pattern.matcher( key );
            Matcher hpux_match      = hpux_pattern.matcher( key );
            Matcher solaris_match   = solaris_pattern.matcher( key );
            Matcher irix_match      = irix_pattern.matcher( key );
            Matcher tru64_match     = tru64_pattern.matcher( key );

            if ( source_match.find() )
            {
                source = new Integer( source.intValue() + value.intValue() );
            }
            else if ( linux_match.find() )
            {
                linux = new Integer( linux.intValue() + value.intValue() );
            }
            else if ( solaris_match.find() )
            {
                solaris = new Integer( solaris.intValue() + value.intValue() );
            }
            else if ( hpux_match.find() )
            {
                hpux = new Integer( hpux.intValue() + value.intValue() );
            }
            else if ( irix_match.find() )
            {
                irix = new Integer( irix.intValue() + value.intValue() );
            }
            else if ( tru64_match.find() )
            {
                tru64 = new Integer( tru64.intValue() + value.intValue() );
            }
        }

        try
        {
            FileWriter fw = new FileWriter( "data/" + version + ".summary" );
            fw.write( "Total => " );
            fw.write( total.toString() );
            fw.write( " => " );
            fw.write( "100%" );
            fw.write( "\n" );

            fw.write( "Source => " );
            fw.write( source.toString() );
            fw.write( " => " );
            fw.write( nf.format( ( source.floatValue() / total.floatValue() ) * 100 ) );
            fw.write( "%\n" );

            fw.write( "Linux => " );
            fw.write( linux.toString() );
            fw.write( " => " );
            fw.write( nf.format( ( linux.floatValue() / total.floatValue() ) * 100 ) );
            fw.write( "%\n" );

            fw.write( "Solaris => " );
            fw.write( solaris.toString() );
            fw.write( " => " );
            fw.write( nf.format( ( solaris.floatValue() / total.floatValue() ) * 100 ) );
            fw.write( "%\n" );

            fw.write( "HPUX => " );
            fw.write( hpux.toString() );
            fw.write( " => " );
            fw.write( nf.format( ( hpux.floatValue() / total.floatValue() ) * 100 ) );
            fw.write( "%\n" );

            fw.write( "IRIX => " );
            fw.write( irix.toString() );
            fw.write( " => " );
            fw.write( nf.format( ( irix.floatValue() / total.floatValue() ) * 100 ) );
            fw.write( "%\n" );

            fw.write( "Tru64 => " );
            fw.write( tru64.toString() );
            fw.write( " => " );
            fw.write( nf.format( ( tru64.floatValue() / total.floatValue() ) * 100 ) );
            fw.write( "%\n" );
            fw.close();
        }
        catch( IOException e ) { }
    }

    /**
     * Write the results for each bundle downloaded for the version 
     * in "data/<version>.full".
     */
    void writeResults()
    {
        try
        {
            FileWriter fw = new FileWriter( "data/" + version + ".full" );
            Enumeration keys = table.keys();

            while( keys.hasMoreElements() )
            {
                String key = (String)keys.nextElement();
                Integer value = (Integer)table.get( key );

                try
                {
                    fw.write( key + " => " + value.toString() + "\n" );
                }
                catch( IOException e ) { }
            }
            fw.close();
        }
        catch( IOException e ) { }
    }

    private static final void debug( String s ) 
    {
        if ( DEBUG ) 
        {
            System.out.println( "  DEBUG: " + s );
        }
    }

}
