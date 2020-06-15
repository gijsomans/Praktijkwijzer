<?php
include '../includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Document</title>
</head>
<body>

<div class="wrapper">
<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Camping Maasvallei</h3>
            </div>

            <ul class="list-unstyled components">
                <p>De leukste camping</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Klachten</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="overzicht.php">Overzicht</a>
                        </li>
                        <li>
                            <a href="archief.php">Klachten archief</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <?php
            
            $sql = 'SELECT * FROM Klachten';
            
            
            foreach ($conn->query($sql) as $row)
            {
                if($row['completed'] == '0')
                continue;

                $completed = $row['completed'];
                $id = $row['Id'];
                $message = $row['message'];
                $title = $row['title'];
                $prio = $row['prioriteit'];

                
            
                echo "
                <div class='card'>$title
                    <div class='card-body'>$message <br> prioriteit: $prio
                    </div>

                    <a href='dearchive.php?id=$id' class='btn btn-primary'>Dearchiveer</a>
                </div>";
            }

    	?>
        </div>
        
</div>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>