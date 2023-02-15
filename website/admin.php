
<?php
        require('functions.php');
        $selectedproduct = $product->getItemdata($_GET['id']);

        foreach ($selectedproduct as $item) {
            $item_brand = $item['item_brand'];
            $item_image = $item['item_image'];
            $item_price = $item['item_price'];
            $firstname = $item['fname'];
            $lastname = $item['lname'];
            $address = $item['address'];
            $purok = $item['purok'];
            $phone = $item['phone'];
            $network = $item['net'];
           
        }



        ?>
<?php

             }
                    

                        echo "<table class=\"content-table\">
                                 <thead>
                                    <tr>
                                       <th>Barangay</th>
                                       <th>Network Sim</th>
                                       <th>Provider</th>
                                       <th>Network Signal</th>
                                    </tr>
                                 </thead>
                                 <tbody>";

                    if($count==0){
                     $output = 'There was no search results';
                    }
                    else{
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                      echo "<td>" . $row['brgyname'] . "</td>";
                      echo "<td>" . $row['networksim'] . "</td>";
                      echo "<td>" . $row['networkname'] . "</td>";
                      echo "<td>" . $row['networksignal'] . "</td>";
                        }
                    }
                    echo $output;
                 
                  
                 }
            
      ?>