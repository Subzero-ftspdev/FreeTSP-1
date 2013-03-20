<?php

/*
*-------------------------------------------------------------------------------*
*----------------    |  ____|        |__   __/ ____|  __ \        --------------*
*----------------    | |__ _ __ ___  ___| | | (___ | |__) |       --------------*
*----------------    |  __| '__/ _ \/ _ \ |  \___ \|  ___/        --------------*
*----------------    | |  | | |  __/  __/ |  ____) | |            --------------*
*----------------    |_|  |_|  \___|\___|_| |_____/|_|            --------------*
*-------------------------------------------------------------------------------*
*---------------------------    FreeTSP  v1.0   --------------------------------*
*-------------------   The Alternate BitTorrent Source   -----------------------*
*-------------------------------------------------------------------------------*
*-------------------------------------------------------------------------------*
*--   This program is free software; you can redistribute it and / or modify  --*
*--   it under the terms of the GNU General Public License as published by    --*
*--   the Free Software Foundation; either version 2 of the License, or       --*
*--   (at your option) any later version.                                     --*
*--                                                                           --*
*--   This program is distributed in the hope that it will be useful,         --*
*--   but WITHOUT ANY WARRANTY; without even the implied warranty of          --*
*--   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           --*
*--   GNU General Public License for more details.                            --*
*--                                                                           --*
*--   You should have received a copy of the GNU General Public License       --*
*--   along with this program; if not, write to the Free Software             --*
*-- Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA  --*
*--                                                                           --*
*-------------------------------------------------------------------------------*
*------------   Original Credits to tbSource, Bytemonsoon, TBDev   -------------*
*-------------------------------------------------------------------------------*
*-------------      Developed By: Krypto, Fireknight, Subzero       ------------*
*-------------------------------------------------------------------------------*
*-----------------       First Release Date August 2010      -------------------*
*-----------                 http://www.freetsp.info                 -----------*
*------                    2010 FreeTSP Development Team                  ------*
*-------------------------------------------------------------------------------*
*/

function begin_frame ($caption = "", $center = false, $padding = 10)
{
    $tdextra = "";

    if ($caption)
    {
        print("<h2>$caption</h2>\n");
    }

    if ($center)
    {
        $tdextra .= " align='center'";
    }

    print("<table width='100%' cellspacing='0' cellpadding='$padding' border='1'><tr><td $tdextra>\n");
}

function end_frame ()
{
    print("</td></tr></table>\n");
}

function begin_table ($fullwidth = false, $padding = 5)
{
    $width = "";

    if ($fullwidth)
    {
        $width .= " width='100%'";
    }

    print("<table class='main' $width cellspacing='0' cellpadding='$padding' border='1'>\n");
}

function end_table ()
{
    echo("</table>\n");
}

?>