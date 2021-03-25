<?php
function koneksi ()
{
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"pw_tubes_203040158");

	return $conn;
}

function query($sqL)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sqL");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    	$rows[] = $row;
    }
    return $rows;
}  