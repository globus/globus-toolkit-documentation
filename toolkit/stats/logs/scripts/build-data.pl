#!/usr/bin/env perl

# system( "java LogParser 2.2.2 09-30-2002" );

# 31 - jan, mar, may, jul, aug, oct, dec
# 30 -        apr,  jun,     sep,  nov

foreach $version qw( 1.1.3 1.1.4 2.0.0 2.2.2 2.2.3 2.2.4 )
{
    foreach $year ( 2000, 2001, 2002, 2003 )
    {
        foreach $month ( 1..12 )
        {
            if ( ( $month == 2 ) and ( $year == 2000 ) )
            {
                $days = 29;
            }
            elsif ( ( $month == 2 ) or
                ( $month == 4 ) or
                ( $month == 6 ) or
                ( $month == 9 ) or
                ( $month == 11 ) )
            {
                $days = 30;
            }
            else 
            {
                $days = 31;
            }

            foreach $day ( 1..$days )
            {
                print "command -> java LogParser $version $month $day $year\n";
                system( "java LogParser $version $month $day $year" );
            }
        }
    }
}
