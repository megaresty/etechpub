<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<table>
	<thead>
    	<tr>
        	<th><strong>Nopeg</strong></th>
            <th><strong>Staff Name</strong></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($staff as $row){ ?>
    	<tr>
        	<td><?php echo $row->nopeg; ?></td>
            <td><?php echo $row->staff_name; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>