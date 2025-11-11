<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Office Hours</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>

    <header>
        <h1>Office Hours for a Business</h1>
    </header>

    <div class="hours-container">
        <?php
            $office_hours = array(
                "Monday"    => "9am - 6pm",
                "Tuesday"   => "9am - 6pm",
                "Wednesday" => "9am - 6pm",
                "Thursday"  => "9am - 6pm",
                "Friday"    => "9am - 5pm",
                "Saturday"  => "10am - 3pm",
                "Sunday"    => "Closed"
            );

            echo "<h2>Weekly Schedule</h2>";
            echo "<ul class='schedule-list'>";

            foreach ($office_hours as $day => $hours) {

                $list_item_class = (strtolower($hours) == "closed") ? "closed-day" : "open-day";

                echo "<li class='{$list_item_class}'>";
                echo "<span class='day'>{$day}:</span> ";
                echo "<span class='hours'>{$hours}</span>";
                echo "</li>";
            }

            echo "</ul>";
        ?>
    </div>

</body>
</html>