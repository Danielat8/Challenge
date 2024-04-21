<div class="container-xxl">
    <table class=" mt-5 table table-bordered">
        <thead>
            <tr>
                <th> model name</th>
                <th>type name</th>
                <th>chassis number</th>
                <th>production year</th>
                <th>registration number</th>
                <th>fuel name</th>
                <th>registration to</th>
                <th>action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT r.*, vt.type_name, vm.model_name, ft.fuel_name FROM `registrations` r' .
                ' inner join vehicle_types vt on vt.id = r.vehicle_type_id' .
                ' inner join vehicle_models vm on vm.id = r.vehicle_model_id' .
                ' inner join fuel_types ft on ft.id = r.fuel_type_id';
            if (!empty($searchTerm)) {
                $sql = $sql . " where r.registration_number like :searchTerm or r.chassis_number like :searchTerm or vm.model_name like :searchTerm";
            }
            $selectQuery = $pdo->prepare($sql);
            if (!empty($searchTerm)) {
                $likeSearchTerm = '%' . $searchTerm . '%';
                $selectQuery->bindParam(':searchTerm', $likeSearchTerm, PDO::PARAM_STR);
            }
            $selectQuery->execute();
            $registrations = $selectQuery->fetchAll(PDO::FETCH_ASSOC);
           
            foreach ($registrations as &$registration) {
                $colorClass = '';
                $regToDate = $registration['registration_to'];
                $currentDate = date('Y-m-d');
                $expireDate = date('Y-m-d', strtotime('+1 month', strtotime($currentDate)));
                $showextend = false;
                $red = false;
                $yellow = false;
                if ($regToDate < $currentDate) {
                    $red = true;
                    $showextend = true;
                } elseif ($regToDate < $expireDate) {
                    $yellow = true;
                    $showextend = true;
                }


            ?>
                <tr class="<?= $colorClass ?>">
                    <td <?php if ($red) {
                            echo "class='bg-danger'";
                        } elseif ($yellow) {
                            echo "class='bg-warning'";
                        }
                        ?>> <?php echo $registration['model_name'] ?></td>
                    <td <?php if ($red) {
                            echo "class='bg-danger'";
                        } elseif ($yellow) {
                            echo "class='bg-warning'";
                        }
                        ?>> <?php echo $registration['type_name'] ?></td>
                    <td <?php if ($red) {
                            echo "class='bg-danger'";
                        } elseif ($yellow) {
                            echo "class='bg-warning'";
                        }
                        ?>><?php echo $registration['chassis_number'] ?></td>
                    <td <?php if ($red) {
                            echo "class='bg-danger'";
                        } elseif ($yellow) {
                            echo "class='bg-warning'";
                        }
                        ?>><?php echo $registration['production_year'] ?></td>
                    <td <?php if ($red) {
                            echo "class='bg-danger'";
                        } elseif ($yellow) {
                            echo "class='bg-warning'";
                        }
                        ?>><?php echo $registration['registration_number'] ?></td>
                    <td <?php if ($red) {
                            echo "class='bg-danger'";
                        } elseif ($yellow) {
                            echo "class='bg-warning'";
                        }
                        ?>><?php echo $registration['fuel_name'] ?></td>
                    <td <?php if ($red) {
                            echo "class='bg-danger'";
                        } elseif ($yellow) {
                            echo "class='bg-warning'";
                        }
                        ?>><?php echo $registration['registration_to'] ?></td>
                    <td>


                        <a href="./Delete.php?id=<?= $registration['id'] ?>"> <button type="button" class="btn btn-danger">Delete</button>
                            <a href="./Edit.php?id=<?= $registration['id'] ?>"> <button type="button" class="btn btn-warning">Edit</button>
                                <?php if ($showextend) { ?>
                                    <a href="./Extend.php?id=<?= $registration['id'] ?>"> <button type="button" class="btn btn-success">Extend</button>

                                    <?php } ?>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>