<table class="table table-bordered">
    <thead>
        <tr>
            <th> model name</th>
            <th>type name</th>
            <th>chassis number</th>
            <th>production year</th>
            <th>registration number</th>
            <th>fuel name</th>
            <th>registration to</th>

        </tr>
    </thead>
    <tbody>

        <tr>
            <td><?php echo $registration['model_name'] ?></td>
            <td><?php echo $registration['type_name'] ?></td>
            <td><?php echo $registration['chassis_number'] ?></td>
            <td><?php echo $registration['production_year'] ?></td>
            <td><?php echo $registration['registration_number'] ?></td>
            <td><?php echo $registration['fuel_name'] ?></td>
            <td><?php echo $registration['registration_to'] ?></td>

        </tr>


    </tbody>
</table>