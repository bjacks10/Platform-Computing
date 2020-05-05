<?php include 'header.php' ?>
<?php
//read pets file
function readPetsFile() {
    // read the file into memory; if there is an error then stop processing
    $arr = file("data/pets.txt") or die('ERROR: Cannot find file');
    // our data is comma-delimited
    $delimiter = ','; 
    // loop through each line of the file
    foreach ($arr as $line) {  
       // explode returns an array of strings where each element in the array
       // corresponds to each substring between the delimiters
       $splitcontents = explode($delimiter, $line);       
       $pet = array();
       $pet['name'] = $splitcontents[0];
       $pet['type'] = $splitcontents[1];
       $pet['file'] = $splitcontents[2];
       // add pet to array of pets
       //when you add an element to an array in php, if you don't
       //give it an index or key, it just adds it to the end
       $pets[$pet['name']] = $pet;
    }
    return $pets;
 }
?>
<table class="mdl-data-table  mdl-shadow--2dp">
    <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
    </tr>
    </thead>
    <tbody>
    <?php  
        $pets = readPetsFile();
        foreach ($pets as $pet) {
            echo '<tr>';
            echo '<td><a href="showPetDetails.php?name=' . $pet['name'] . '&type='. $pet['type'] . '&image=' . $pet['file'] . '">' . $pet['name'] . '</a></td>';
            echo '<td >' . $pet['type'] . '</td>';
            echo '</tr>    ';    
        } 
    ?>            
    </tbody>
    </table>